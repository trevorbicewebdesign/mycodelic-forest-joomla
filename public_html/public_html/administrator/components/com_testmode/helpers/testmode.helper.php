<?php

defined('_JEXEC') or die('Restricted access');

class testmodeHelper {
	var $_testmode_enabled;
	var $_testmode_screen_door;
	var $_testmode_passkey;
	var $_testmode_message;
	var $_cookie_testmode;
	var $_cookie_length;
	var $_testsite;

	function com_testmode() {
		$this->setVars();
	}

	function setVars() {	
		$plugin			= & JPluginHelper::getPlugin('system', 'testmode');
		$pluginParams	= & JComponentHelper::getParams('com_testmode');

		$this->setTestsite();
		$this->setCookie();
		
	}

	function setCookie() {
		$mainframe = JFactory::getApplication();
		$cparams 	= JComponentHelper::getParams('com_testmode');
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
				setcookie("testmode", $cparams->get("passkey"), $expiration_e, "/", $live_site); 
				$this->_testsite = 0;
				return true;
			}
			else if($passkey == "unset"){
				setcookie("testmode", "unset", $expiration_e, "/", $live_site); 	
				$this->_testsite = 1;
			}	
		}
		else if($passkey == "unset"){
			setcookie("testmode", "unset", $expiration_e, "/", $live_site); 	
			$this->_testsite = 1;
		}
		return false;
	}

	function setTestsite() {
		$mainframe = JFactory::getApplication();
		$cparams 	= JComponentHelper::getParams('com_testmode');
		$passkey	= JRequest::getCmd( "passkey" );
		$session 	=& JFactory::getSession();
		//$cookie		= $_COOKIE
		
		if($cparams->get("enabled")==1) {
			if($passkey == $cparams->get("passkey") && $cparams->get("screen_door")==1){
				$mainframe->setUserState( "com_testmode.testsite", 0 );	
				$this->_testsite = 0;
			}
			else if($passkey == $cparams->get("passkey")){
			}
			// User hasn't specified a passkey
			else {
				// echo "session = ".$session->get( 'testmode')."<br/>";
				//die("1234qwer");
				if($_COOKIE['testmode'] == $cparams->get("passkey") && empty($passkey) ) {	
					$mainframe->setUserState( "com_testmode.testsite", 0 );	
					$this->_testsite = 0;
				}
				else {
					$mainframe->setUserState( "com_testmode.testsite", 1 );	
					$this->_testsite = 1;
				}
			}
		}
		// If the plugin isn't enabled
		else {
			$mainframe->setUserState( "com_testmode.testsite", 1 );	
			$this->_testsite = 1;		
		}
	}
}

?>