<?php
/* TREVOR BICE WEBDESIGN - webdesign.trevorbice.com */
defined('JPATH_BASE') or die;
class plgSystemAnimo extends JPlugin {
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onBeforeCompileHead()	{
		$doc 		= JFactory::getDocument();
		$mainframe 	= JFactory::getApplication();
		
		$doc->addScript("http://code.jquery.com/jquery-2.0.3.min.js");
		$doc->addStyleSheet(JURI::base()."/plugins/system/animo/assets/css/animate+animo.css");
		$doc->addScript(JURI::base()."/plugins/system/animo/assets/js/animo.js");
		
	}
}
?>