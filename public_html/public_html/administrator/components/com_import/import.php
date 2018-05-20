<?php
defined('_JEXEC') or die('Restricted access');

$user = & JFactory::getUser();
$controllerName = JRequest::getCmd( 'controller', 'default' );



switch($controllerName){
	case 'default':
		require_once( JPATH_COMPONENT.DS.'controllers'.DS.'default'.'.php' );
		$controllerName = 'importControllerDefault';
	break;
	default:
		require_once( JPATH_COMPONENT.DS.'controllers'.DS.'default'.'.php' );
		$controllerName = 'importControllerDefault';
	break;
}

$menuArray['quizzes']								= 'index.php?option=com_socialchow&controller=default';


$controller	= new $controllerName( );
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();
?>