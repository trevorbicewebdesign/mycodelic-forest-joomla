<?php
/**
 * @package      pkg_projectfork
 * @subpackage   com_pfforum
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


class PFforumHelper
{
    /**
     * The component name
     *
     * @var    string
     */
    public static $extension = 'com_pfforum';

    /**
     * Indicates whether this component uses a project asset or not
     *
     * @var    boolean
     */
    public static $project_asset = true;


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
        $forms = array('topic', 'reply');

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
        }
    }


    /**
     * Gets a list of actions that can be performed on a topic.
     *
     * @param     integer    $id         The item id
     * @param     integer    $project    The project id
     *
     * @return    jobject
     */
    public static function getActions($id = 0)
    {
        $user   = JFactory::getUser();
        $result = new JObject;

        if (empty($id)) {
            $pid   = PFApplicationHelper::getActiveProjectId();
            $asset = (empty($pid) ? self::$extension : 'com_pfforum.project.' . $pid);
        }
        else {
            $asset = 'com_pfforum.topic.' . (int) $id;
        }

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


    /**
     * Gets a list of actions that can be performed on a reply.
     *
     * @param     integer    $id         The item id
     * @param     integer    $topic      The topic id
     *
     * @return    jobject
     */
    public static function getReplyActions($id = 0, $topic = 0)
    {
        $user   = JFactory::getUser();
        $result = new JObject;

        if (!empty($id)) {
            $asset = 'com_pfforum.reply.' . (int) $id;
        }
        elseif(!empty($topic)) {
            $asset = 'com_pfforum.topic.' . (int) $topic;
        }
        else {
            $pid   = PFApplicationHelper::getActiveProjectId();
            $asset = (empty($pid) ? self::$extension : 'com_pfforum.project.' . $pid);
        }

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
