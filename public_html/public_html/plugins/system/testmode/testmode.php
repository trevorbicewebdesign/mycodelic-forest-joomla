<?php
defined('JPATH_BASE') or die;
 
class plgSystemTestmode extends JPlugin {

	function __construct(&$subject, $config){
		parent::__construct($subject, $config);
	}

	function onAfterRoute()	{
		$mainframe	= JFactory::getApplication();
		$cparams 		= JComponentHelper::getParams('com_testmode');
		$option		= JRequest::getCmd( "option" );
		$tmpl 		= JRequest::getCmd( "tmpl" );
        	$passkey		= JRequest::getCmd( "passkey" );
		$session		= &JFactory::getSession();
		
		
		
		require_once(JPATH_ADMINISTRATOR . '/components/com_testmode'.DS.'helpers'.DS.'testmode.helper.php' );
		JLoader::register('birthdaypromoHelper',  JPATH_ADMINISTRATOR_COMPONENT.DS.'helpers'.DS.'testmode.helper.php');
		
		$testmode = new testmodeHelper;
		$testmode->com_testmode();
		
		$logged 				= $mainframe->getUserStateFromRequest(  "com_testmode.logged", 		'logged');
		$testsite 			= $mainframe->getUserStateFromRequest(  "com_testmode.testsite", 	'testsite');
		
		if($mainframe->isSite()) {			
			if ( $testsite  == 1 && $cparams->get("enabled") == 1) {
				if( $option!='com_testmode' ) {
					$_SESSION['testmode_return'] = $_SERVER['REQUEST_URI'];
				
					$_SESSION['testmode_return'] = preg_replace("#&passkey=unset#", "", $_SESSION['testmode_return']);
					
					$mainframe->redirect("index.php?option=com_testmode");
				}
			}
			else if ( $testsite  == 0 ) {
				if( $option=='com_testmode' ) {
					if( !empty( $_SESSION['testmode_return'] ) ) {
						$mainframe->redirect( $_SESSION['testmode_return'] );
					}	
				}
			}
		}
	}
}