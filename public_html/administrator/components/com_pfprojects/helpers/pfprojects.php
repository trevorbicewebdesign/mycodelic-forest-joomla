<?php
/**
 * @package      pkg_projectfork
 * @subpackage   com_pfprojects
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


jimport('projectfork.framework');


class PFprojectsHelper
{
    /**
     * The component name
     *
     * @var    string    
     */
    public static $extension = 'com_pfprojects';


    /**
     * Configure the Linkbar.
     *
     * @param     string    $view    The name of the active view.
     *
     * @return    void               
     */
    public static function addSubmenu($view)
    {
        $is_j3 = version_compare(JVERSION, '3.0.0', 'ge');
        $forms = array('project', 'category');

        if (in_array($view, $forms) && $is_j3) return;

        $components = PFApplicationHelper::getComponents();
        $option     = JFactory::getApplication()->input->get('option');
        $class      = ($is_j3 ? 'JHtmlSidebar' : 'JSubMenuHelper');

        foreach ($components AS $component)
        {
            if ($component->enabled == '0') continue;

            $title = JText::_($component->element);
            $parts = explode('-', $title, 2);

            if (count($parts) == 2) $title = trim($parts[1]);

            call_user_func(
                array($class, 'addEntry'),
                $title,
                'index.php?option=' . $component->element,
                ($option == $component->element)
            );

            if ($component->element == self::$extension && ($view == 'projects' || $view == 'categories')) {
                call_user_func(
                    array($class, 'addEntry'),
                    JText::_('COM_PROJECTFORK_SUBMENU_CATEGORIES'),
                    'index.php?option=com_categories&extension=' . $component->element,
                    ($view == 'categories')
                );
            }
        }
    }


    /**
     * Gets a list of actions that can be performed.
     *
     * @param     int       $id        The item id
     *
     * @return    object    $result    
     */
    public static function getActions($id = 0)
    {
        $user   = JFactory::getUser();
        $result = new JObject;
        $asset  = (empty($id) ? self::$extension : 'com_pfprojects.project.' . (int) $id);

        $actions = array(
            'core.admin', 'core.manage',
            'core.create', 'core.edit',
            'core.edit.own', 'core.edit.state',
            'core.delete'
        );

        foreach ($actions as $action)
        {
            $result->set($action, $user->authorise($action, $asset));
        }

        return $result;
    }
}
