<?php
/* TREVOR BICE WEBDESIGN - webdesign.trevorbice.com */
defined('JPATH_BASE') or die;
class plgSystemSelectivizr extends JPlugin {
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onBeforeCompileHead()	{
		$doc 		= JFactory::getDocument();
		$mainframe 	= JFactory::getApplication();
		$doc->addCustomTag('
		<!--[if (gte IE 6)&(lte IE 8)]>
		  <script type="text/javascript" src="'.JURI::root(true).'plugins/system/selectivizr/assets/js/selectivizr.js"></script>
		<![endif]--> 
		');
	}
}
?>