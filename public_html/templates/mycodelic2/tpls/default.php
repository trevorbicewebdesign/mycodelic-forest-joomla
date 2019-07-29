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
<?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
if ($menu->getActive() == $menu->getDefault( 'en-GB' )) :
    $parallax = 1;
else:
    $parallax = 2;
endif;
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
	
<style>

#logo-parallax {
	position:			relative;
	margin-top:		20vh;
	max-width:		50vw;
	-webkit-filter: 	drop-shadow( -5px -5px 15px #000 ); 
            filter: 	drop-shadow( -5px -5px 15px #000 );	
}
#parallax_2 #logo-parallax {
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
                    <a id="parallax_logo_<?php echo $parallax; ?>" class="parallax_logo" href="/">
                        <div id="parallax_<?php echo $parallax; ?>" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="0">
                            <img id="logo-parallax" src="/templates/mycodelic/images/Mycodelic-Forest-logo_white.svg" style=""  data-stellar-ratio=".8" />
                        </div>
                    </a>
                </div>
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
				<footer class="container footer">
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