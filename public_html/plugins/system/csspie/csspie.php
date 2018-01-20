<?php
/* TREVOR BICE WEBDESIGN - webdesign.trevorbice.com */
defined('JPATH_BASE') or die;

class plgSystemCsspie extends JPlugin

{
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onAfterInitialise()	{
		$doc 			= JFactory::getDocument();	
		$loadCsspie = "
jQuery(document).ready(function($) {
	alert('1');
	if (window.PIE) {
		
		$('.rounded').each(function() {
			PIE.attach(this);
		});
	}
});
		";
		// Only add it if we detecet IE6 - IE8
		if(preg_match('/(?i)msie [1-8]/',$_SERVER['HTTP_USER_AGENT'])) {	
			$doc->addScript(JURI::root(true) . '/plugins/system/csspie/assets/js/PIE-2.0/PIE_IE678.js');
		}
	}
}
?>