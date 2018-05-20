<?php
$document =& JFactory::getDocument();


// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$list	= modMobileMenuHelper::getList($params);
$app	= JFactory::getApplication();
$menu	= $app->getMenu();
$active	= $menu->getActive();
$active_id = isset($active) ? $active->id : $menu->getDefault()->id;
$path	= isset($active) ? $active->tree : array();
$showAll	= $params->get('showAllChildren');


$theme           = $params->get('theme', 'default');
$style           = $params->get('style', 'default');
$catid		     = $params->get('catid');
$datatype        = $params->get('datatype');
$layout          = $params->get('layout', 'vertical');
$open            = $params->get('open', 'first');
$multiple_open   = $params->get('multiple_open', 0) ? 'true' : 'false';
$animation_speed = $params->get('animation_speed');

$module_base     = JURI::base() . 'modules/mod_tbworks_mobilemenu/';


$document =& JFactory::getDocument();
// $document->addScript(		$module_base.'assets'.DS.'accordion.js');
$document->addStyleSheet(	$module_base.'assets'.DS.'style.css');


require JModuleHelper::getLayoutPath('mod_tbworks_mobilemenu', $params->get('layout', 'default'));
?>
