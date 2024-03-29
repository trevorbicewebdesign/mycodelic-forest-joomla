<?php
defined('_JEXEC') or die;
// error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_WARNING);

date_default_timezone_set("America/Los_Angeles");

JHtml::_('behavior.tabstate');
if (!JFactory::getUser()->authorise('core.manage', 'com_mycodelic_roster')) {
	return JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
}

$controller = JControllerLegacy::getInstance('mycodelic_roster');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
?>