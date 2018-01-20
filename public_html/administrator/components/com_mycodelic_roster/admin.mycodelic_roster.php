<?php
defined('_JEXEC') or die;
JHtml::_('behavior.tabstate');
if (!JFactory::getUser()->authorise('core.manage', 'com_mycodelic_roster')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}
$controller = JControllerLegacy::getInstance('inventory');
$controller->execute(JFactory::getApplication()->input->get('task', 'dislay'));
$controller->redirect();
?>