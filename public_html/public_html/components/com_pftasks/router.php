<?php
/**
 * @package      Projectfork
 * @subpackage   Tasks
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2012 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


/**
 * Build the route for the com_pftasks component
 *
 * @param     array    $query    An array of URL arguments
 *
 * @return    array              The URL arguments to use to assemble the subsequent URL.
 */
function PFtasksBuildRoute(&$query)
{
    // We need to have a view in the query or it is an invalid URL
    if (!isset($query['view'])) {
        return array();
    }

    $segments = array();
    $app      = JFactory::getApplication();
    $menu     = $app->getMenu();
    $view     = $query['view'];

    // We need a menu item.  Either the one specified in the query, or the current active one if none specified
    if (empty($query['Itemid'])) {
        $menu_item_given = false;
    }
    else {
        $app  = JFactory::getApplication();
	    $menu = $app->getMenu();
        $menuItem = $menu->getItem($query['Itemid']);

        if ($menuItem) {
        // if ($menuItem && $menuItem->query['view'] == $query['view']) {
            $menu_item_given = true;
        }
        else {
            $menu_item_given = false;
            unset($query['Itemid']);
        }
    }

    // Handle tasks and task query
    if($view == 'tasks' || $view == 'task') {
        if (!$menu_item_given) $segments[] = $view;
        unset($query['view']);

        // Get project filter
        if (isset($query['filter_project'])) {
            if (strpos($query['filter_project'], ':') === false) {
                $query['filter_project'] = PFtasksMakeSlug($query['filter_project'], '#__pf_projects');
            }
        }
        else {
            $query['filter_project'] = PFtasksMakeSlug('0', '#__pf_projects');
        }

        $segments[] = $query['filter_project'];
        unset($query['filter_project']);


        // Get milestone filter
        if (isset($query['filter_milestone'])) {
            if (strpos($query['filter_milestone'], ':') === false) {
                $query['filter_milestone'] = PFtasksMakeSlug($query['filter_milestone'], '#__pf_milestones', 'all-milestones');
            }
        }
        else {
            $query['filter_milestone'] = '0:all-milestones';
        }

        $segments[] = $query['filter_milestone'];
        unset($query['filter_milestone']);


        // Get task list filter
        if (isset($query['filter_tasklist'])) {
            if (strpos($query['filter_tasklist'], ':') === false) {
                $query['filter_tasklist'] = PFtasksMakeSlug($query['filter_tasklist'], '#__pf_task_lists', 'all-lists');
            }
        }
        else {
            $query['filter_tasklist'] = '0:all-lists';
        }

        $segments[] = $query['filter_tasklist'];
        unset($query['filter_tasklist']);


        // Get task id
        if($view == 'task' && isset($query['id'])) {
            if (strpos($query['id'], ':') === false) {
                $query['id'] = PFtasksMakeSlug($query['id'], '#__pf_tasks');
            }

            $segments[] = $query['id'];
            unset($query['id']);
        }


        return $segments;
    }

    // Handle the layout
    if (isset($query['layout'])) {
        if ($menu_item_given && isset($menuItem->query['layout'])) {
            if ($query['layout'] == $menuItem->query['layout']) {
                unset($query['layout']);
            }
        }
        else {
            if ($query['layout'] == 'default') {
                unset($query['layout']);
            }
        }
    }

    return $segments;
}



/**
 * Parse the segments of a URL.
 *
 * @param     array    The segments of the URL to parse.
 *
 * @return    array    The URL attributes to be used by the application.
 */
function PFtasksParseRoute($segments)
{
    // Setup vars
    $vars  = array();
    $count = count($segments);
    $menu  = JFactory::getApplication()->getMenu();
    $item  = $menu->getActive();


    // Standard routing.  If we don't pick up an Itemid then we get the view from the segments
    // the first segment is the view and the last segment is the id of the item.
    if (!isset($item)) {
        $vars['view'] = $segments[0];
        $vars['id']   = $segments[$count - 1];

        return $vars;
    }

    // Set the view var
    $vars['view'] = $item->query['view'];

    // Handle Tasks
    if ($vars['view'] == 'tasks') {
        if ($count >= 1) {
            $vars['filter_project'] = PFtasksParseSlug($segments[0]);
        }
        if ($count >= 2) {
            $vars['filter_milestone'] = PFtasksParseSlug($segments[1]);
        }
        if ($count >= 3) {
            $vars['filter_tasklist'] = PFtasksParseSlug($segments[2]);
        }
        if ($count >= 4) {
            $vars['view'] = 'task';
            $vars['id']   = PFtasksParseSlug($segments[3]);
        }

        return $vars;
    }

    // Handle Task details
    if ($vars['view'] == 'task') {
        if ($count >= 1) {
            $vars['filter_project'] = PFtasksParseSlug($segments[0]);
        }
        if ($count >= 2) {
            $vars['filter_milestone'] = PFtasksParseSlug($segments[1]);
        }
        if ($count >= 3) {
            $vars['filter_tasklist'] = PFtasksParseSlug($segments[2]);
        }
        if ($count >= 4) {
            $vars['id'] = PFtasksParseSlug($segments[3]);
        }

        return $vars;
    }

    return $vars;
}


/**
 * Parses a slug segment and extracts the ID of the item
 *
 * @param     string    $segment    The slug segment
 *
 * @return    int                   The item id
 */
function PFtasksParseSlug($segment)
{
    if (strpos($segment, ':') === false) {
        return (int) $segment;
    }
    else {
        list($id, $alias) = explode(':', $segment, 2);
        return (int) $id;
    }
}


/**
 * Creates a slug segment
 *
 * @param     int       $id       The item id
 * @param     string    $table    The item table
 * @param     string    $alt      Alternative alias if the id is 0
 * @param     string    $field    The field to query
 *
 * @return    string              The slug
 */
function PFtasksMakeSlug($id, $table, $alt = 'all', $field = 'alias')
{
    if ($id == '' || $id == '0') {
        if ($table == '#__pf_projects') {
            $app   = JFactory::getApplication();
            $id    = (int) $app->getUserState('com_projectfork.project.active.id', 0);
            $alias = $app->getUserState('com_projectfork.project.active.title', 'all-projects');
            $alias = JApplication::stringURLSafe($alias);

            return $id . ':' . $alias;
        }
        else {
            return '0:' . $alt;
        }
    }

    $db    = JFactory::getDbo();
    $query = $db->getQuery(true);

    $query->select($db->quoteName($field))
          ->from($db->quoteName($table))
          ->where('id = ' . (int) $id);

    $db->setQuery($query->__toString());

    $alias = $db->loadResult();
    $slug  = $id . ':' . $alias;

    return $slug;
}