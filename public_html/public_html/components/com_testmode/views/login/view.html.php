<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport( 'joomla.application.component.view');
class testmodeViewlogin extends JViewLegacy{
	function display( $tpl = null)	{
		$app 	= JFactory::getApplication();
		$doc 			= JFactory::getDocument();
		$menu   			= JSite::getMenu();
		$params			= $menu->getParams(null);
		$plugin			= &JPluginHelper::getPlugin('system', 'testmode');
		$pluginParams		= &JComponentHelper::getParams('com_testmode');
		$config     		= &JFactory::getConfig();

		$base_path		= "/components/com_testmode/";
		$params->def( 'logo_src', 					$base_path.'assets/images/logo.png' );
		$params->def( 'testmode_message', 				$pluginParams->get( 'testmode_message', $testmode_message ) );
		$params->def( 'testmode_error', 				$pluginParams->get( '', $_SESSION['testmode_error'] ) );
		$params->def( 'sitename', 					$config->get('sitename') );

		$this->assignRef('params', 		$params);	
		
		$client_name					= "San Diego Small Business Marketing Services";
		$client_url					= "http://www.sdmarketingservices.com";
		
		$this->assignRef('base_path', 	$base_path);
		$this->assignRef('client_name', 	$client_name);
		$this->assignRef('client_url', 	$client_url);
		
		parent::display($tpl);

		die();


	}

}

