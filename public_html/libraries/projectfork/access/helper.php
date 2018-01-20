<?php
/**
 * @package      Projectfork.Library
 * @subpackage   Access
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2012 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


/**
 * Projectfork Access Helper Class
 *
 */
abstract class PFAccessHelper
{
    /**
     * Returns all parent groups of the given group id
     *
     * @param     integer    $id    The group id
     *
     * @return    array             The parent groups
     */
    public static function getGroupPath($id)
    {
        static $groups;
        static $path;

        // Preload all groups
        if (empty($groups)) {
            $db = JFactory::getDbo();

            $query = $db->getQuery(true)
                   ->select('parent.id, parent.lft, parent.rgt')
                   ->from('#__usergroups AS parent')
                   ->order('parent.lft');

            $db->setQuery((string) $query);
            $groups = (array) $db->loadObjectList('id');
        }

        if (empty($path)) $path = array();

        // Make sure group id is valid
        if (!array_key_exists($id, $groups)) return array();

        // Get parent groups and leaf group
        if (!isset($path[$id])) {
            $path[$id] = array();

            foreach ($groups as $group)
            {
                if ($group->lft <= $groups[$id]->lft && $group->rgt >= $groups[$id]->rgt) {
                    $path[$id][] = $group->id;
                }
            }
        }

        return $path[$id];
    }


    /**
     * Returns all groups with the given access level
     *
     * @param     integer    $access        The access level id
     * @param     boolean    $diagnostic    If true, will only load the group id's
     *
     * @return    array                     The groups
     */
    public static function getGroupsByAccessLevel($access, $diagnostic = true)
    {
        static $cache = array();
        $cache_key    = $access . '.' . strval($diagnostic);

        if (isset($cache[$cache_key])) {
            return $cache[$cache_key];
        }

        $db     = JFactory::getDbo();
        $query  = $db->getQuery(true);
        $groups = array();
        $fields = ($diagnostic ? 'a.id' : 'a.id, a.lft, a.rgt');

        // Handle public access
        if ($access == '1') {
            $query->select($fields)
                  ->from('#__usergroups AS a');

            $db->setQuery((string) $query);
            $groups = (array) $db->loadColumn();

            $cache[$cache_key] = $groups;

            return $cache[$cache_key];
        }


        // Get the groups of the access level
        $query->select('a.rules')
              ->from('#__viewlevels AS a')
              ->where('a.id = '. (int) $access);

        $db->setQuery((string) $query);
        $rules = $db->loadResult();
        $rules = (empty($rules) ? array() : json_decode($rules));

        if (!count($rules)) {
            $cache[$cache_key] = array();
            return $cache[$cache_key];
        }


        // Loop through the top groups to find the children
        $groups = array();
        foreach($rules AS $gid)
        {
            $gid = (int) $gid;

            // Load the group data
            $query->clear();
            $query->select('a.id, a.lft, a.rgt')
                  ->from('#__usergroups AS a')
                  ->where('a.id = ' . $db->quote($gid))
                  ->join('LEFT', $query->quoteName('#__usergroups') . ' AS b ON a.lft > b.lft AND a.rgt < b.rgt')
                  ->group('a.id')
                  ->order('a.lft ASC');

            $db->setQuery((string) $query);

            $group = $db->loadObject();

            // Load child groups
            if (is_object($group)) {
                $groups[] = ($diagnostic ? $group->id : $group);

                $query->clear();
                $query->select($fields)
                      ->from('#__usergroups AS a')
                      ->join('LEFT', $query->quoteName('#__usergroups'). ' AS b ON a.lft > b.lft AND a.rgt < b.rgt')
                      ->where('a.lft > ' . intval($group->lft) . ' AND a.rgt < ' . intval($group->rgt))
                      ->group('a.id')
                      ->order('a.lft ASC');

                $db->setQuery((string) $query);
                $children = (array) ($diagnostic ? $db->loadColumn() : $db->loadObjectList());

                foreach($children AS $child)
                {
                    $groups[] = $child;
                }
            }
        }

        $cache[$cache_key] = $groups;

        return $cache[$cache_key];
    }


    /**
    * Returns all children of the given access level
    *
    * @param     integer    $id    The access level id
    *
    * @return    array             The child access levels
    */
    public static function getAccessTree($id)
    {
        static $cache = array();
        static $list  = null;

        // Load all access levels if not yet set
        if (is_null($list)) {
            $db    = JFactory::getDbo();
            $query = $db->getQuery(true);

            $query->select('a.id, a.rules')
                  ->from('#__viewlevels AS a');

            $db->setQuery((string) $query);

            $list = (array) $db->loadObjectList();
        }

        if (isset($cache[$id])) {
            return $cache[$id];
        }

        $groups = self::getGroupsByAccessLevel($id);
        $tree   = array();

        if (!count($groups)) {
            $cache[$id] = $tree;

            return $cache[$id];
        }

        foreach ($list AS $item)
        {
            if (empty($item->rules) || $item->id == $id || in_array($item->id, $tree)) {
                continue;
            }

            $rules = (array) json_decode($item->rules);
            $count = count($rules);
            $found = 0;

            if ($count == 0) {
                continue;
            }

            foreach ($rules AS $rule)
            {
                if ($rule < 0) {
                    continue;
                }

                if (in_array($rule, $groups)) {
                    $found++;
                }
            }

            if ($found == $count) {
                $tree[] = $item->id;
            }
        }

        $cache[$id] = $tree;


        return $cache[$id];
    }


    /**
     * Method to get a Viewing Access Level based on the selected groups.
     * The Access level will be created if none is found
     *
     * @param     mixed      $rules     The selected rules from the form
     * @param     integer $access       The access level from the form (optional)
     * @param     integer $inherit       If set to true, will inherit the groups from $access if no groups have been selected
     *
     * @return    integer    $access    The viewing access level on success, False on error.
     */
    public static function getViewLevelFromRules(&$rules, $access = 0, $inherit = true)
    {
        JLoader::register('UsersModelLevel', JPATH_ADMINISTRATOR . '/components/com_users/models/level.php');

        if (!is_array($rules)) return false;

        $db     = JFactory::getDbo();
        $query  = $db->getQuery(true);
        $groups = array();

        // Filter out the groups from the rules
        foreach ($rules as $key => $value)
        {
            if (!is_numeric($key) || !is_numeric($value)) continue;

            $groups[] = (int) $value;
            unset($rules[$key]);
        }

        $group_count = count($groups);

        if (!$group_count) {
            if ($access && $inherit) {
                $query->clear();
                $query->select('rules')
                      ->from('#__viewlevels')
                      ->where('id = ' . $db->quote((int) $access));

                $db->setQuery($query);
                $access_rules = $db->loadResult();

                $groups      = json_decode($access_rules, true);
                $group_count = count($groups);

                if (!$group_count) return false;
            }
            else {
                return false;
            }
        }

        if ($access > 1 && !$inherit) {
            // Parent access level is given, see if the rules are the same
            $query->clear();
            $query->select('rules')
                  ->from('#__viewlevels')
                  ->where('id = ' . $db->quote((int) $access));

            $db->setQuery($query);
            $access_rules = $db->loadResult();

            $json_rules = json_decode($access_rules, true);

            if (count($json_rules) == count($groups)) {
                $is_equal = true;

                foreach ($json_rules AS $gid)
                {
                    if (!in_array($gid, $groups)) $is_equal = false;
                }
            }

            if ($is_equal) return (int) $access;
        }

        // Try to find the access levels that are connecting to the groups
        $query->select('id, rules')
              ->from('#__viewlevels')
              ->order('id ASC');

        $db->setQuery($query);
        $levels = $db->loadAssocList('id', 'rules');

        foreach ($levels AS $lvl_id => $lvl_rules)
        {
            $json_rules = json_decode($lvl_rules, true);

            if (count($json_rules) == $group_count) {
                $is_equal = true;

                foreach ($json_rules AS $gid)
                {
                    if (!in_array($gid, $groups)) $is_equal = false;
                }

                if ($is_equal) {
                    return (int) $lvl_id;
                }
            }
        }

        // Create the access level if none is found
        $query->clear();
        $query->select('title')
              ->from('#__usergroups')
              ->where('id IN(' . implode(', ', $groups) . ')')
              ->order('title ASC');

        $db->setQuery($query);
        $group_names = $db->loadColumn();

        if (empty($group_names) || !count($group_names)) {
            return false;
        }

        // Generate level title
        $level_name = implode(', ', $group_names);
        $model      = new UsersModelLevel(array('ignore_request' => true));
        $table      = $model->getTable();

        // Truncate the title if need be
        if (strlen($level_name) > 92) {
            $level_name = substr($level_name, 0, 92) . '...';
        }

        // Make sure the title is unique
        while ($table->load(array('title' => $level_name)))
        {
            $m = null;

            if (preg_match('#\((\d+)\)$#', $level_name, $m)) {
                $level_name = preg_replace('#\(\d+\)$#', '('.($m[1] + 1).')', $level_name);
            }
            else {
                $level_name .= ' (2)';
            }
        }

        $data = array('id' => 0, 'title' => $level_name, 'rules' => $groups);

        // Store access level
        if (!$model->save($data)) return false;

        return (int) $model->getState('level.id');
    }
}