<?php
defined('_JEXEC') or die('Restricted access');

$app = JFactory::getApplication();
$controllerName = $app->input->getCmd('view', 'login');
require_once( JPATH_COMPONENT_ADMINISTRATOR.'/helpers/testmode.helper.php' );
JLoader::register( 'testmodeHelper',  JPATH_ADMINISTRATOR_COMPONENT.'/helpers/testmode.helper.php' );

require_once( JPATH_COMPONENT.'/controllers/'.$controllerName.'.php' );
$controllerName = 'testmodeController'.$controllerName;
// Create the controller
$controller = new $controllerName();
// Perform the Request task
$controller->execute(  $app->input->getCmd('task', '') );
// Redirect if set by the controller
$controller->redirect();
?>