<?php

defined('_JEXEC') or die('Restricted access');

class campinventoryHelper {
	var $_campinventory_enabled;
	var $_campinventory_screen_door;
	var $_campinventory_passkey;
	var $_campinventory_message;
	var $_cookie_campinventory;
	var $_cookie_length;
	var $_testsite;

	public static function com_campinventory() {
		$this->setVars();
		die("com_campinventory");
	}

	public static function setVars() {	
		$plugin		= & JPluginHelper::getPlugin('system', 'campinventory');
		$pluginParams	= & JComponentHelper::getParams('com_campinventory');

		$this->setTestsite();
		$this->setCookie();
		
	}
	public static function addSubmenu($vName)	{
		JHtmlSidebar::addEntry(
			JText::_('COM_TESTMODE_SUBMENU_USERS'),
			'index.php?option=com_campinventory&view=users',
			$vName == 'users'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_TESTMODE_SUBMENU_LOGS'),
			'index.php?option=com_campinventory&view=logs',
			$vName == 'logs'
		);
	}
	public static function setCookie() {
		die("setCookie");
		$mainframe = JFactory::getApplication();
		$cparams 	= JComponentHelper::getParams('com_campinventory');
		$passkey	= JRequest::getCmd( "passkey" );
		$session 	= JFactory::getSession();
		$inputCookie= JFactory::getApplication()->input->cookie;
		
		//echo "passkey = ".$passkey."<br/>";
		//echo "passkey = ".$cparams->get("passkey")."<br/>";
		//$session->set('mymessage', 'here is some message text');

		//echo $passkey;
		
		$live_site = JURI::root();
		$live_site = preg_replace("#http://#", "", $live_site);
		$live_site = preg_replace("#/(.*)$#", "", $live_site);

		// This is the cookie start time
		//$expiration_s = 0;
		// This is the cookie end time
		$expiration_e = 0;
		//// If the cookie length is specified, fille our cookie controlling variables
		if($cparams->get("cookie_length")) {
			$expiration_s = $cparams->get("cookie_length");
			$expiration_e = 0;
		}
		if( !empty($passkey) && $cparams->get("screen_door") == 1) {
			if($passkey == $cparams->get("passkey")){
				setcookie("campinventory", $cparams->get("passkey"), $expiration_e, "/", $live_site); 
				$this->_testsite = 0;
				return true;
			}
			else if($passkey == "unset"){
				setcookie("campinventory", "unset", $expiration_e, "/", $live_site); 	
				$this->_testsite = 1;
			}	
		}
		else if($passkey == "unset"){
			setcookie("campinventory", "unset", $expiration_e, "/", $live_site); 	
			$this->_testsite = 1;
		}
		return false;
	}

	public static function setTestsite() {
		$mainframe = JFactory::getApplication();
		$cparams 	= JComponentHelper::getParams('com_campinventory');
		$passkey	= JRequest::getCmd( "passkey" );
		$session 	=& JFactory::getSession();
		//$cookie		= $_COOKIE
		
		if($cparams->get("enabled")==1) {
			if($passkey == $cparams->get("passkey") && $cparams->get("screen_door")==1){
				$mainframe->setUserState( "com_campinventory.testsite", 0 );	
				$this->_testsite = 0;
			}
			else if($passkey == $cparams->get("passkey")){
			}
			// User hasn't specified a passkey
			else {
				// echo "session = ".$session->get( 'campinventory')."<br/>";
				//die("1234qwer");
				if($_COOKIE['campinventory'] == $cparams->get("passkey") && empty($passkey) ) {	
					$mainframe->setUserState( "com_campinventory.testsite", 0 );	
					$this->_testsite = 0;
				}
				else {
					$mainframe->setUserState( "com_campinventory.testsite", 1 );	
					$this->_testsite = 1;
				}
			}
		}
		// If the plugin isn't enabled
		else {
			$mainframe->setUserState( "com_campinventory.testsite", 1 );	
			$this->_testsite = 1;		
		}
	}
}

?>