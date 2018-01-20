<?php
/* TREVOR BICE WEBDESIGN - webdesign.trevorbice.com */
defined('JPATH_BASE') or die;

class plgSystemPingdomTracking extends JPlugin

{
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onAfterInitialise()	{
		//die($trackingid);
		
	}
	function onBeforeCompileHead()	{
		$doc 		= JFactory::getDocument();
		$mainframe 	= JFactory::getApplication();
		$rumid		= $this->params->get('rumid');	
		if($mainframe->isSite()) {	
			$loadAnalytics = "
			var _prum = [['id', '".$rumid."'],
						 ['mark', 'firstbyte', (new Date()).getTime()]];
			(function() {
				var s = document.getElementsByTagName('script')[0]
				  , p = document.createElement('script');
				p.async = 'async';
				p.src = '//rum-static.pingdom.net/prum.min.js';
				s.parentNode.insertBefore(p, s);
			})();				
			<!-- Website Active -->
			";
			$doc->addScriptDeclaration($loadAnalytics);
		}
	}
}
?>