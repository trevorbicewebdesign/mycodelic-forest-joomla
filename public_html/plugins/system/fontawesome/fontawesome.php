<?php
/* TREVOR BICE WEBDESIGN - webdesign.trevorbice.com */
defined('JPATH_BASE') or die;

class plgSystemFontawesome extends JPlugin

{
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onAfterInitialise()	{
		//die($trackingid);
		
	}
	function onBeforeCompileHead()	{
		$document =& JFactory::getDocument();
		$document->addStyleSheet(JURI::root(true).DS."plugins".DS."system".DS."fontawesome".DS."assets".DS."font-awesome".DS."css".DS."font-awesome.min.css");
	}
}
?>