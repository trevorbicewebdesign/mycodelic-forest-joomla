<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */
defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
	  class='<jdoc:include type="pageclass" />'>

<head>
	<jdoc:include type="head" />
	<?php 
	$this->loadBlock('home-head') ;
	$this->addCss('layouts/home-template');
	?>
	

<link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Goblin+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Flavors" rel="stylesheet">
<style>
#parallax-1 {
	background-image: 	url(/templates/mycodelic/images/34106547_10155519758463372_2974331639221452800_o.jpg);
	background-size:	100% auto;
	
	min-height:		100vh;	
	background-attachment:fixed;
}
#parallax-2 {
	background-image: 	url(/templates/mycodelic/images/screen-shot-2013-08-26-at-1-06-50-am.png);
	background-size:	100% auto;
	
	height:			50vh;	
	background-attachment:fixed;
}
#logo-parallax {
	position:			relative;
	margin-top:		20vh;
	max-width:		50vw;
	-webkit-filter: 	drop-shadow( -5px -5px 15px #000 ); 
            filter: 	drop-shadow( -5px -5px 15px #000 );	
}
#parallax-2 #logo-parallax {
	position:			relative;
	margin-top:		10vh;
	max-width:		25vw;
	-webkit-filter: 	drop-shadow( -5px -5px 15px #000 ); 
            filter: 	drop-shadow( -5px -5px 15px #000 );
}
</style>

</head>
<body id="home-template">

<div class="content-wrapper">
	<div class="content-wrapper2">
		<div id="tbw-pagetop"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->
			<div class="pagetop-wrapper">
				<div class="pagetop-wrapper2" >
					<?php $this->loadBlock('top_drawer') ?>	
					<?php $this->loadBlock('slideshow') ?>
				</div>
				<?php $app = JFactory::getApplication();
				$menu = $app->getMenu();
				if ($menu->getActive() == $menu->getDefault( 'en-GB' )) :
					
				
				?>
				<a href="/">
				<div id="parallax-1" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					<img id="logo-parallax" src="/templates/mycodelic/images/Mycodelic-Forest-logo_white.svg" style=""  data-stellar-ratio=".8" />
				</div>
				</a>
				<?php else: ?>
				<a href="/">
				<div id="parallax-2" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
					<img id="logo-parallax" src="/templates/mycodelic/images/Mycodelic-Forest-logo_white.svg" style=""  data-stellar-ratio=".8" />
				</div>
				</a>
				<?php endif; ?>
			</div>
		</div>
		
		<div class="pagemiddle-wrapper">
			<div id="tbw-pagemiddle">
				<div class="container">
					<?php $this->loadBlock('maintop') ?>
					<?php $this->loadBlock('home-mainbody') ?>
					<?php $this->loadBlock('mainbottom') ?>
				</div>
			</div>
			<div id="tbw-pagebottom">
				<footer id="t3-footer" class="container t3-footer">
					<?php $this->loadBlock('footer') ?>
				</footer>
			</div>
		</div>
	</div>
</div>

<script src="/templates/mycodelic/js/jquery.stellar.js"></script>
<script> 

jQuery.stellar({
    horizontalScrolling: false,
    responsive: true
});
</script>

</body>
</html>