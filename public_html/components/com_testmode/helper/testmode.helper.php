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
		$this->setCookie();
		if(@ !empty($_POST['testmode'])) {
			$this->loginTestMode();
		}
	}

	function setVars() {	
		$plugin			= & JPluginHelper::getPlugin('system', 'testmode');
		$pluginParams	= & JComponentHelper::getParams('com_testmode');
		
		// print_r($pluginParams);
		//die();
		
		$testmode_message = "The site you are trying to access is in test mode. Please provide credentials.";
		$testmode_cfg['enabled']          = $pluginParams->get( 'enabled', 	      			      	0 );
		$testmode_cfg['screen_door']      = $pluginParams->get( 'screen_door', 	                    0 );
		$testmode_cfg['passkey']          = $pluginParams->get( 'passkey', 		                'set' );
		$testmode_cfg['testmode_message'] = $pluginParams->get( 'testmode_message', $testmode_message );
		$testmode_cfg['cookie_length']    = $pluginParams->get( 'cookie_length',          	'+1 day' );
		
		// print_r($testmode_cfg);

		$this->_testmode_enabled = $testmode_cfg['enabled'];
		$this->_testmode_screen_door = $testmode_cfg['screen_door'];
		$this->_testmode_passkey = $testmode_cfg['passkey'];
		$this->_testmode_message = $testmode_cfg['testmode_message'];	
		$this->_cookie_length = $testmode_cfg['cookie_length'];
		$this->_cookie_length = strtotime($this->_cookie_length);	
		$this->_cookie_testmode = @$_COOKIE['testmode'];	
		
		
		$this->setCookie();
		$this->setTestsite();
	}



	function loginTestMode() {
		$mainframe			= & JFactory::getApplication(); 
		$uri 				= & JURI::getInstance();
		$live_site 			= & JURI::root();
		$db 				= & JFactory::getDBO();
		$config     		= &JFactory::getConfig();
		
		
		$mosConfig_secret 	= $config->getValue('secret');

		$_SESSION['testmode_error'] = '';
		ob_start();
		$live_site = preg_replace("#http://#", "", $live_site);
		$live_site = preg_replace("#/(.*)$#", "", $live_site);
		// This is the cookie start time
		$expiration_s = 1;
		// This is the cookie end time
		$expiration_e = -1;
		// If the cookie length is specified, fill our cookie controlling variables
		if($this->_cookie_length) {
			$expiration_s = $this->_cookie_length;
			$expiration_e = 0;
		}
		
		// print_r($this);
		// Check that the username has backend access, and a valid username
		$query = "SELECT password FROM #__users WHERE `username`='".@ $_REQUEST['testmode_username']."' ;";
		//echo $query;
		//die();
		

		$db->setQuery( $query );
		$password = $db->loadResult();
		
		if($password) {
			// Grab the username from the form submission
			$username 	= stripslashes( strval( $_REQUEST['testmode_username'] ) );
			// Grab the password from the form submission
			$passwd 	= stripslashes( strval( $_REQUEST['testmode_password'] ) );
			$harden = md5($mosConfig_secret.md5($_SERVER['HTTP_USER_AGENT']));
			// Need to get the salt and hash to check the passwords
			list($hash, $salt) = explode(':', $password);		
			
			//echo "passwd ".$passwd."<br/>";
			//echo "harden ".$harden."<br/>";
		
			//echo "salt ".$salt."<br/>";	
			
			$check_password = md5( $_POST['testmode_password'] . $salt );
			
			
			
			
			// die();

		
				
			// $check_password should match the $hash
			if($check_password == $hash) {
				// echo "hash ".$hash."<br/>";
				// echo "check_password ".$check_password."<br/>";	
				
				// Set the cookie to the value stored in the $this->_testmode_passkey,
				// and give it an expiration based on the cookie length
				setcookie("testmode", $this->_testmode_passkey, $expiration_s, "/", $live_site); 
				// Make sure we set our _testsite to be set, so that this happens instantly
				// without needin to wait for the cookie
				$this->_testsite = 0;
				//echo $live_site."<Br/>";
				//echo $expiration_s."<Br/>";
				//echo $this->_testmode_passkey;
				
				//die();
				// All done, move the user to the site frontpage (which is hopefully unlocked)
				if($_SESSION['testmode_return']) {
					/*
					if(preg_match("#jlivechat#", $_SESSION['testmode_return'])) {
						$_SESSION['testmode_return'] = 'index.php';
					}
					*/
					//echo $_SESSION['testmode_return'];
					// die("1");
					//echo $_COOKIE['testmode'];
					// echo $_SESSION['testmode_return']."<br/>";
					//die();
					//die();
					$mainframe->redirect($_SESSION['testmode_return']);
				}
				else {
					//die("2");
					//$mainframe->redirect("index.php");	
				}
			}
			else {
				$_SESSION['testmode_error'] .= "Invalid username or password.";	
				setcookie("testmode", "unset", $expiration_e, "/", $live_site); 
				$this->_testsite = 1;
				if($_SESSION['testmode_return']) {
					if(preg_match("#jlivechat#", $_SESSION['testmode_return'])) {
						$_SESSION['testmode_return'] = 'index.php';
					}
					// die("3");
					$mainframe->redirect($_SESSION['testmode_return']);	
				}
				else {
					// die("4");
					$mainframe->redirect("index.php");	
				}
			}	
		}
		else {	
			if($_REQUEST['testmode_username']=='' && $_REQUEST['testmode_password']==''){
				$_SESSION['testmode_error'] = "Please enter a username and password.";	
			}
			else if($_REQUEST['testmode_username']==''){
				$_SESSION['testmode_error'] = "Please enter a username.";	
			}
			else {
				$_SESSION['testmode_error']  = "Invalid username or password.<br/>";	
				// $_SESSION['testmode_error'] .= $_SESSION['testmode_return'];
			}
		}
	}

	function setCookie() {
		$live_site = JURI::root();
		$live_site = preg_replace("#http://#", "", $live_site);
		$live_site = preg_replace("#/(.*)$#", "", $live_site);
		ob_start();
		// This is the cookie start time
		$expiration_s = 0;
		// This is the cookie end time
		$expiration_e = 0;
		// If the cookie length is specified, fille our cookie controlling variables
		if($this->_cookie_length) {
			$expiration_s = $this->_cookie_length;
			$expiration_e = 0;
		}
		//echo "-->".($this->_cookie_length/60/60)."<br/>";
		//echo "-->".$expiration_s."<br/>";
		//echo "-->".$expiration_e."<br/>";
		// echo $_COOKIE['testmode'];
		// Check if the user is specifying the passkey, and wether the screen door mode is turned on
		if( !empty($_REQUEST["passkey"]) && $this->_testmode_screen_door == 1) {
			if(@$_REQUEST["passkey"] == $this->_testmode_passkey){
				setcookie("testmode", $this->_testmode_passkey, $expiration_s, "/", $live_site); 
				return true;
			}
			else if(@$_REQUEST["passkey"] == "unset"){
				setcookie("testmode", "unset", $expiration_e, "/", $live_site); 	
			}	
		}
		else if(@$_REQUEST["passkey"] == "unset"){
			setcookie("testmode", "unset", $expiration_e, "/", $live_site); 	
		}
		return false;
	}

	function setTestsite() {
		// First check to see if the plugin is enabled. 1 is on, 0 is off.
		
		if($this->_testmode_enabled==1) {
			// If the passkey in the URI variables matches the passkey in the class variable
			// $_testmode_passkey 
			// AND
			// The screen door is turned on
			
			if(@$_REQUEST["passkey"] == $this->_testmode_passkey && $this->_testmode_screen_door==1){
				$this->_testsite = 0;
			}
			// If the passkey in the URI variables matches the passkey in the class variable
			// $_testmode_passkey 
			// AND
			// The screen door is turned off
			else if(@$_REQUEST["passkey"] == $this->_testmode_passkey){
				$this->_testsite = 1;
			}
			// User hasn't specified a passkey
			else {
				// If the cookie value is set to the same thing as the passkey
				
				//echo $this->_testmode_enabled."<br/>";
				//echo $this->_testmode_screen_door."<br/>";
				//echo $_COOKIE['testmode']."<br/>";
				//echo $this->_testmode_passkey."<br/>";
				//die();
				
				if(@$_COOKIE['testmode'] == $this->_testmode_passkey && empty($_REQUEST["passkey"]) ) {		
					$this->_testsite = 0;
				}
				else {
					$this->_testsite = 1;
				}
			}
		}
		// If the plugin isn't enabled
		else {
			$this->_testsite = 1;

		}
	}
	function detectFrontEnd() {
	// Little function to check that we're trying to look at the front end
	// Might be a better way to do this, but this works.
		if(preg_match("#administrator/index.php#", $_SERVER['REQUEST_URI'])) {
			return false;
		}
		return true;
	}

	// This function will log whenver a user logs in with their credentials
	// This can be used to allow a pass that will only work for say 1 hour
	// This function will also be used by the passkey=password http var
	// Specific passkeys can be handed out, that don't require a Joomla account
	// but still have an expiration time
	function trackLogin() {
		$query  = "INSERT INTO #__testmode_log ";
		$query .= "";
	}

	// Function to check if a users passkey or viewing session has expired
	// If it is expired, we'll unset the cookie variables
	function passkeyExpired() {
	}


}

?>