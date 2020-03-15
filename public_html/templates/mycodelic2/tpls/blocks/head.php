<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<!-- META FOR IOS & HANDHELD -->
<?php if ($this->getParam('responsive', 1)): ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>
<?php endif ?>
<meta name="HandheldFriendly" content="true"/>
<meta name="apple-mobile-web-app-capable" content="YES"/>
<!-- //META FOR IOS & HANDHELD -->
<meta property="og:title" 		content="<?php echo $page_title; ?>"/>
<meta property="og:description" 	content="<?php echo $description; ?>"/>
<?php
// SYSTEM CSS
$this->addStyleSheet(JURI::base(true) . '/templates/system/css/system.css');

?>

<?php
// T3 BASE HEAD
$this->addHead();
?>

<?php
// CUSTOM CSS
if (is_file(T3_TEMPLATE_PATH . '/css/custom.css')) {
	$this->addStyleSheet(T3_TEMPLATE_URL . '/css/custom.css');
}
?>

<!-- Le HTML5 shim and media query for IE8 support -->
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script type="text/javascript" src="<?php echo T3_URL ?>/js/respond.min.js"></script>
<![endif]-->
<?php
//$this->addScript(		T3_TEMPLATE_URL . '/js/custom-functions.js');
$this->addStyleSheet(	T3_TEMPLATE_URL . '/css/typography.css'); 
?>
<script type="text/javascript">
jQuery(document).ready(function($){
	$(".t3-sidebar").stick_in_parent({
		  parent:				'#t3-mainbody'
		, inner_scrolling:		false
		, offset_top:			0
	});
	initializeFixedSidebarHeight();
	$('.ilightbox').iLightBox();
});
jQuery(document).ready(function($){
    if(jQuery("#slideshow") && jQuery("#parallax_logo_1")){
        var slideshowHeight = jQuery("#slideshow").outerHeight(true);
        var parallaxMarginTop = (slideshowHeight-100)/2;
        jQuery("#parallax_logo_1").height(slideshowHeight);
        jQuery("#logo-parallax").css("margin-top", parallaxMarginTop);
    }
    jQuery(window).resize(function($) {
        if(jQuery("#slideshow") && jQuery("#parallax_logo_1")){
            var slideshowHeight = jQuery("#slideshow").outerHeight(true);
            var parallaxMarginTop = (slideshowHeight-100)/2;
            jQuery("#parallax_logo_1").height(slideshowHeight);
            jQuery("#logo-parallax").css("margin-top", parallaxMarginTop);
        }
    });
});
jQuery( window ).load(function() {
    if(jQuery("#slideshow") && jQuery("#parallax_logo_1")){
        var slideshowHeight = jQuery("#slideshow").outerHeight(true);
        var parallaxMarginTop = (slideshowHeight-100)/2;
        jQuery("#parallax_logo_1").height(slideshowHeight);
        jQuery("#logo-parallax").css("margin-top", parallaxMarginTop);
    }
});
    
    
function initializeFixedSidebarHeight() {
	
	jQuery(document).ready(function() {
		if(jQuery("#sidebar-container-1")) {
		var sidebar1 		= jQuery("#sidebar-container-1").height();
		}
		if(jQuery("#sidebar-container-2")) {	
		var sidebar2 		= jQuery("#sidebar-container-2").height();
		}
		var contentarea 	= jQuery("#t3-content").outerHeight(true);
		if(sidebar1 < contentarea) {
			if(jQuery("#sidebar-container-1")) {
				jQuery("#sidebar-container-1").height(contentarea);	
			}
			if(jQuery("#sidebar-container-2")) {	
				jQuery("#sidebar-container-2").height(contentarea);	
			}
		}
       
	});
	jQuery(document).resize(function() {
		if(jQuery("#sidebar-container-1")) {
		sidebar1 		= jQuery("#sidebar-container-1").height();
		}
		if(jQuery("#sidebar-container-2")) {	
		sidebar2 		= jQuery("#sidebar-container-2").height();
		}
		contentarea 	= jQuery("#t3-content").outerHeight(true);
		if(sidebar1 < contentarea) {
			if(jQuery("#sidebar-container-1")) {
				jQuery("#sidebar-container-1").height(contentarea);	
			}
			if(jQuery("#sidebar-container-2")) {	
				jQuery("#sidebar-container-2").height(contentarea);	
			}	
		}
	});
	jQuery(window).scroll(function() {
		if(jQuery("#sidebar-container-1")) {
		sidebar1 		= jQuery("#sidebar-container-1").height();
		}
		if(jQuery("#sidebar-container-2")) {	
		sidebar2 		= jQuery("#sidebar-container-2").height();
		}
		contentarea 	= jQuery("#t3-content").outerHeight(true);
		if(sidebar1 < contentarea) {
			if(jQuery("#sidebar-container-1")) {
				jQuery("#sidebar-container-1").height(contentarea);	
			}
			if(jQuery("#sidebar-container-2")) {	
				jQuery("#sidebar-container-2").height(contentarea);	
			}	
		}
	});
}

</script>

<!-- You can add Google Analytics here or use T3 Injection feature -->

