<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controller');
class testmodeControllerlogin extends JControllerLegacy {
	function __construct( $config = array() ) {
		$app 	= JFactory::getApplication();
		if( $app->input->getCmd('view', '') == '') {
			$app->input->getCmd('view', 'login');
		}
		$this->item_type = 'login';
		parent::__construct( $config );
	}
	function display() {
		JRequest::setVar('view', 'login');
		parent::display();
	}
	function loginTestMode() {
		
		
		
		$mainframe		= & JFactory::getApplication(); 
		$uri 			= & JURI::getInstance();
		$live_site 		= & JURI::root();
		$db 				= & JFactory::getDBO();
		$config     		= &JFactory::getConfig();
		$cparams 			= JComponentHelper::getParams('com_testmode');
		
		$username 		= $mainframe->input->getCmd('testmode_username');
		$password 		= $mainframe->input->getCmd('testmode_password');
		//echo "-->".$username." ".$password."<br/>";
		//die();
		$logged 			= $mainframe->getUserStateFromRequest(  "com_testmode.logged", 'logged');
		
		$inputCookie= JFactory::getApplication()->input->cookie;
		
		$session 	= JFactory::getSession();
		
		
		// die($logged);
		
		//die("1234qwer");
		// print_r($config);
		$mosConfig_secret 	= $config->get('secret');

		$_SESSION['testmode_error'] = '';
		$live_site = JURI::root();
		$live_site = preg_replace("#http://#", "", $live_site);
		$live_site = preg_replace("#/(.*)$#", "", $live_site);
		//ob_start();
		//echo $live_site;
		//die();
		// This is the cookie start time
		$expiration_s = 1;
		// This is the cookie end time
		$expiration_e = -1;
		// If the cookie length is specified, fill our cookie controlling variables
		if($cparams->get('cookie_length')) {
			$expiration_s = $cparams->get('cookie_length');
			$expiration_e = 0;
		}
		// die($cparams->get('cookie_length'));
		
		jimport('joomla.user.authentication');
		$authenticate = JAuthentication::getInstance();
		$credentials = array('username' => $username, 'password' => $password);
		$response = $authenticate->authenticate($credentials, $options);
		
		
		//echo $response;
		//die();	
		
		if ($response->status === JAuthentication::STATUS_SUCCESS) {
			$mainframe->setUserState( "com_testmode.logged", "in" );

			setcookie("testmode", $cparams->get("passkey"), $expiration_e, "/", $live_site); 
			$mainframe->setUserState( "com_testmode.testsite", 0 );	
			
			if($_SESSION['testmode_return']) {
				$testsite 			= $mainframe->getUserStateFromRequest(  "com_testmode.testsite", 	'testsite');
				$_SESSION['testmode_return'] = preg_replace("#&passkey=unset#", "", $_SESSION['testmode_return']);
				// die($_SESSION['testmode_return']);
				// die("1234qwre 3");
				$mainframe->redirect($_SESSION['testmode_return']);
			}
			else {
				//die("1234qwer 2");
				die($_SESSION['testmode_return']);
				$mainframe->redirect("index.php");	
			}
		}
		else {
			//die("1234qwer");
			$_SESSION['testmode_error'] .= "Invalid username or password.";	
			$mainframe->setUserState( "com_testmode.logged", "out" );
			setcookie("testmode", "unset", $expiration_e, "/", $live_site); 
			$this->_testsite = 1;
			$session->set( 'testmode', $cparams->testmode_passkey );	
			$mainframe->setUserState( "com_testmode.testsite", 1 );	
			if($_SESSION['testmode_return']) {
				if(preg_match("#jlivechat#", $_SESSION['testmode_return'])) {
					$_SESSION['testmode_return'] = 'index.php';
				}
				// die("1234qwre 2");
				$mainframe->redirect($_SESSION['testmode_return']);	
			}
			else {
				// die("1234qwre 1");
				$mainframe->redirect("index.php");	
			}
		}	
	}
}
?>