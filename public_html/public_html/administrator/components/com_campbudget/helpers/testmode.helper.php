<?php
defined('_JEXEC') or die('Restricted access');

class campbudgetHelper extends JHelperContent{
	var $_campbudget_enabled;
	var $_campbudget_screen_door;
	var $_campbudget_passkey;
	var $_campbudget_message;
	var $_cookie_campbudget;
	var $_cookie_length;
	
	public function com_campbudget() {
		$this->setVars();
	}
	public function setVars() {	
		$plugin		= & JPluginHelper::getPlugin('system', 'campbudget');
		$pluginParams	= & JComponentHelper::getParams('com_campbudget');

		$this->setTestsite();
		$this->setCookie();
		
	}
	public static function addSubmenu($vName)	{
		JHtmlSidebar::addEntry(
			JText::_('COM_TESTMODE_SUBMENU_USERS'),
			'index.php?option=com_campbudget&view=users',
			$vName == 'users'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_TESTMODE_SUBMENU_LOGS'),
			'index.php?option=com_campbudget&view=logs',
			$vName == 'logs'
		);
	}
	public function setCookie() {
		$mainframe = JFactory::getApplication();
		$cparams 	= JComponentHelper::getParams('com_campbudget');
		$jinput = JFactory::getApplication()->input;
		$passkey	= $jinput->get('passkey');
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
				setcookie("campbudget", $cparams->get("passkey"), $expiration_e, "/", $live_site); 
				$this->_testsite = 0;
				return true;
			}
			else if($passkey == "unset"){
				setcookie("campbudget", "unset", $expiration_e, "/", $live_site); 	
				$this->_testsite = 1;
			}	
		}
		else if($passkey == "unset"){
			setcookie("campbudget", "unset", $expiration_e, "/", $live_site); 	
			$this->_testsite = 1;
		}
		return false;
	}

	public function setTestsite() {
		$mainframe = JFactory::getApplication();
		$cparams 	= JComponentHelper::getParams('com_campbudget');
		$passkey	= JRequest::getCmd( "passkey" );
		$session 	=& JFactory::getSession();
		//$cookie		= $_COOKIE
		
		if($cparams->get("enabled")==1) {
			if($passkey == $cparams->get("passkey") && $cparams->get("screen_door")==1){
				$mainframe->setUserState( "com_campbudget.testsite", 0 );	
				$this->_testsite = 0;
			}
			else if($passkey == $cparams->get("passkey")){
			}
			// User hasn't specified a passkey
			else {
				// echo "session = ".$session->get( 'campbudget')."<br/>";
				//die("1234qwer");
				if($_COOKIE['campbudget'] == $cparams->get("passkey") && empty($passkey) ) {	
					$mainframe->setUserState( "com_campbudget.testsite", 0 );	
					$this->_testsite = 0;
				}
				else {
					$mainframe->setUserState( "com_campbudget.testsite", 1 );	
					$this->_testsite = 1;
				}
			}
		}
		// If the plugin isn't enabled
		else {
			$mainframe->setUserState( "com_campbudget.testsite", 1 );	
			$this->_testsite = 1;		
		}
	}
}

?>