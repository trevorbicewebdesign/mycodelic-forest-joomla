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
	$this->addCss('layouts/reccomended-template');
	?>
	
</head>
<body id="home-template">

<div class="content-wrapper">
<div class="content-wrapper2">

<div id="tbw-pagetop" class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->
<div class="pagetop-wrapper">
	<div class="pagetop-wrapper2" >
	<?php $this->loadBlock('home-header') ?>	
	<?php $this->loadBlock('slideshow') ?>
	</div>
	<div class="mountains">
		<img src="/templates/source3/images/mt.png" width="1500" height="143" >
	</div>
</div>
</div>

<div class="pagemiddle-wrapper">
<div id="tbw-pagemiddle" class="t3-wrapper">
	<div class="container">
		<?php $this->loadBlock('maintop') ?>
		<?php $this->loadBlock('home-mainbody') ?>
		<?php $this->loadBlock('mainbottom') ?>
	</div>
</div>
<div id="tbw-pagebottom" class="t3-wrapper">
	<footer id="t3-footer" class="container t3-footer">
		<?php $this->loadBlock('footer') ?>
	</footer>
</div>
</div>

</div>
</div>

</body>
</body>
</html>