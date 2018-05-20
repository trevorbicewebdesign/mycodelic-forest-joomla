<?php
defined('_JEXEC') or die('Restricted access');

$user = & JFactory::getUser();
$controllerName = JRequest::getCmd( 'controller', 'default' );

switch($controllerName){
	case 'default':
		require_once( JPATH_COMPONENT.DS.'controllers'.DS.'default'.'.php' );
		$controllerName = 'harmonizeControllerDefault';
	break;
	default:
		require_once( JPATH_COMPONENT.DS.'controllers'.DS.'default'.'.php' );
		$controllerName = 'harmonizeControllerDefault';
	break;
}
$controller	= new $controllerName( );
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();
?>