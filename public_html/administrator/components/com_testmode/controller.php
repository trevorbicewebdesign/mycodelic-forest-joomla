<?php
// No direct access

defined('_JEXEC') or die;

jimport('joomla.application.component.controller');
class TestModeController extends JControllerLegacy {
	public function display($cachable = false, $urlparams = false) 	{
		$app 	= JFactory::getApplication();
		$view	= $app->input->getCmd('view', 	'users');
		$layout 	= $app->input->getCmd('layout', 	'default');
		$id		= $app->input->getCmd('id');
	
		
		parent::display();
		//die("1234qwer");
		return $this;
	}
}
