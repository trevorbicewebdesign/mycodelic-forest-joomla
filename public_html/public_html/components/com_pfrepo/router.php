<?php
/**
 * @package      pkg_projectfork
 * @subpackage   com_pfrepo
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


/**
 * Build the route for the com_pfrepo component
 *
 * @param     array    $query    An array of URL arguments
 *
 * @return    array              The URL arguments to use to assemble the subsequent URL.
 */
function PFrepoBuildRoute(&$query)
{
    // We need to have a view in the query or it is an invalid URL
    if (!isset($query['view'])) {
        return array();
    }

    // Setup vars
    $segments = array();
    $view     = $query['view'];

    // We need a menu item.  Either the one specified in the query, or the current active one if none specified
    if (empty($query['Itemid'])) {
        $menu_item_given = false;
    }
    else {
        $menu_item_given = true;
    }

    // Handle repository query
    $views = array('repository', 'file', 'note', 'filerevisions', 'noterevisions');

    if(in_array($view, $views)) {
        if (!$menu_item_given) $segments[] = $view;
        unset($query['view']);

        // Get project filter
        if (isset($query['filter_project'])) {
            if (strpos($query['filter_project'], ':') === false) {
                $query['filter_project'] = PFrepoMakeSlug($query['filter_project'], '#__pf_projects');
            }
        }
        else {
            $query['filter_project'] = PFrepoMakeSlug('0', '#__pf_projects');
        }

        $segments[] = $query['filter_project'];
        unset($query['filter_project']);

        // Get path
        if (isset($query['path'])) {
            $parent_isset = isset($query['filter_parent_id']);
            $parent_id    = (($parent_isset) ? (int) $query['filter_parent_id'] : 0);

            $parts = explode('/', $query['path']);
            $count = count($parts);

            foreach($parts AS $i => $part)
            {
                if (empty($part)) continue;
                if ($count >= 1 && $i == 0) continue;
                if ($count >= 2 && $i == ($count - 1) && $parent_id > 1) continue;

                $segments[] = $part;
            }

            unset($query['path']);
        }

        // Get directory filter
        if (isset($query['filter_parent_id'])) {
            if (strpos($query['filter_parent_id'], ':') === false) {
                $query['filter_parent_id'] = PFrepoMakeSlug($query['filter_parent_id'], '#__pf_repo_dirs');
            }
        }
        else {
            $query['filter_parent_id'] = PFrepoMakeSlug('0', '#__pf_repo_dirs');
        }

        $segments[] = $query['filter_parent_id'];
        unset($query['filter_parent_id']);

        // Get file id
        if (isset($query['id']) && ($view == 'file' || $view == 'filerevisions')) {
            if (strpos($query['id'], ':') === false) {
                $query['id'] = PFrepoMakeSlug($query['id'], '#__pf_repo_files');
            }

            $segments[] = $view;
            $segments[] = $query['id'];
            unset($query['id']);
        }

        // Get note id
        if (isset($query['id']) && ($view == 'note' || $view == 'noterevisions')) {
            if (strpos($query['id'], ':') === false) {
                $query['id'] = PFrepoMakeSlug($query['id'], '#__pf_repo_notes');
            }

            $segments[] = $view;
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
function PFrepoParseRoute($segments)
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

    // Handle Repository
    if ($vars['view'] == 'repository') {
        $count2 = $count;
        if ($count >= 2) {
            if ($segments[$count - 2] == 'file' && intval($segments[$count - 2]) == 0) {
                $vars['view'] = $segments[$count - 2];
                $count2 = $count - 2;
            }
            if ($segments[$count - 2] == 'filerevisions' && intval($segments[$count - 2]) == 0) {
                $vars['view'] = $segments[$count - 2];
                $count2 = $count - 2;
            }
            if ($segments[$count - 2] == 'note' && intval($segments[$count - 2]) == 0) {
                $vars['view'] = $segments[$count - 2];
                $count2 = $count - 2;
            }
            if ($segments[$count - 2] == 'noterevisions' && intval($segments[$count - 2]) == 0) {
                $vars['view'] = $segments[$count - 2];
                $count2 = $count - 2;
            }
        }
        if ($count2 >= 1) {
            $vars['filter_project'] = PFrepoParseSlug($segments[0]);
        }
        if ($count2 >= 2) {
            $i    = 1;
            $path = array();

            while($i < $count2)
            {
                if ($i == ($count2 - 1)) {
                    $vars['filter_parent_id'] = PFrepoParseSlug($segments[$i]);
                }
                else {
                    $path[] = PFrepoParseSlug($segments[$i]);
                }
                $i++;
            }
            $vars['path'] = implode('/', $path);
        }

        if ($vars['view'] == 'repository') {
            return $vars;
        }
    }


    // Handle File
    if ($vars['view'] == 'file' || $vars['view'] == 'filerevisions') {
        $vars['id'] = PFrepoParseSlug($segments[$count - 1]);

        return $vars;
    }


    // Handle Note
    if ($vars['view'] == 'note' || $vars['view'] == 'noterevisions') {
        $vars['id'] = PFrepoParseSlug($segments[$count - 1]);

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
function PFrepoParseSlug($segment)
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
function PFrepoMakeSlug($id, $table, $alt = 'all', $field = 'alias')
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