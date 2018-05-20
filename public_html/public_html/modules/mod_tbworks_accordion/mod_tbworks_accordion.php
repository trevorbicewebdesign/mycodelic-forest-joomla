<?php
defined('_JEXEC') or die('Restricted access');

// count instances
if (!isset($GLOBALS['tbworks_accordion']['count'])) {
	$GLOBALS['tbworks_accordion']['count'] = 1;
} else {
	$GLOBALS['tbworks_accordion']['count']++;
}
// include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');
require_once (dirname(__FILE__).DS.'lists.php');
// disable edit ability icon
$access = new stdClass();
$access->canEdit	= 0;
$access->canEditOwn = 0;
$access->canPublish = 0;


$theme           = $params->get('theme', 'default');
$style           = $params->get('style', 'default');
$catid		     = $params->get('catid');
$datatype        = $params->get('datatype');
$layout          = $params->get('layout', 'vertical');
$open            = $params->get('open', 'first');
$multiple_open   = $params->get('multiple_open', 0) ? 'true' : 'false';
$animation_speed = $params->get('animation_speed');

include_once(dirname(__FILE__).DS."lists".DS.$datatype);
$class = "modTBWorksAccordion".ucfirst(preg_replace("#[.]php#", "", $datatype))."Lists";
$modTBWorksAccordionLists 	= new $class;
// Categories should be an array of categories to be passed to the query system
// $getLists = $class::$staticMethod($catid, $params);
$getLists = $modTBWorksAccordionLists->getLists($catid, $params);

$lists = $getLists;
$items = count($lists);

if (!$items) {
	return;
}

$module_base     = JURI::base() . 'modules/mod_tbworks_accordion/';

// css parameters
$accordion_id    = 'tbworks-accordion-' . $GLOBALS['tbworks_accordion']['count'];
// js parameters
$javascript      = "

new worksAccordion(
	$$('#$accordion_id .toggler'), 
	$$('#$accordion_id .content'), 
	{ 	
		open: '$open', 
		allowMultipleOpen: $multiple_open,
        duration: $animation_speed,
		transition: Fx.Transitions.Expo.easeOut
	}
);";

require(dirname(__FILE__).DS.'themes'.DS.$theme.DS.'template.php');

$document =& JFactory::getDocument();
$document->addScript(		$module_base.'assets'.DS.'accordion.js');
$document->addStyleSheet(	$module_base.'themes'.DS.$theme.DS.'style.css');
$document->addScriptDeclaration("
window.addEvent('domready', function(){ 
	$javascript 
});
");

?>