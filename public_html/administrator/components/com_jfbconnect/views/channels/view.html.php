<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

// Check to ensure this file is included in Joomla!
if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

jimport('joomla.application.component.view');
jimport('sourcecoast.adminHelper');

require_once(JPATH_ADMINISTRATOR . '/components/com_jfbconnect/includes/views.php');

class JFBConnectViewChannels extends JFBConnectAdminView
{
    function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->state = $this->get('State');

        $apModel = JModelLegacy::getInstance('Autopost', 'JFBConnectModel');
        $pagination = $apModel->getPagination();
        $this->assignRef('pagination', $pagination);

        if($this->getLayout() != 'activity')
        {
            JToolbarHelper::addNew('channel.add');
            JToolbarHelper::publish('channels.publish', 'JTOOLBAR_PUBLISH', true);

            //        JToolBarHelper::publishList();
            JToolBarHelper::unpublish('channels.unpublish', 'JTOOLBAR_UNPUBLISH', true);
            JToolbarHelper::deleteList('', 'channels.delete', 'JTOOLBAR_TRASH');
        }
        else
        {
            JToolbarHelper::deleteList(JText::_('COM_JFBCONNECT_CHANNEL_POSTACTIVITY_DELETE_CONFIRMATION'), 'channels.deletePost', 'JTOOLBAR_TRASH');
        }

        // Check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode("\n", $errors));

            return false;
        }

        $title = "JFBConnect: Social Channels";

        /*        if ($layout != 'display' && $layout != 'default')
                {
                    JToolBarHelper::custom('display', 'opengraph.png', 'index.php?option=com_jfbconnect&view=opengraph', 'Open Graph Home', false);
                    JToolBarHelper::divider();
                }*/

        JToolBarHelper::title($title, 'jfbconnect.png');

        SCAdminHelper::addAutotuneToolbarItem();

        parent::display($tpl);
    }

    function getActivity()
    {
        $apModel = JModelLegacy::getInstance('Autopost', 'JFBConnectModel');
        $this->posts = $apModel->getActivityList();
    }
}
