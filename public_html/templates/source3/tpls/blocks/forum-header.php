<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// get params
$sitename  = $this->params->get('sitename');
$logotype  = $this->params->get('logotype');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', 'templates/' . T3_TEMPLATE . '/images/logo.png') : '';

if (!$sitename) {
	$sitename = JFactory::getConfig()->get('sitename');
}

?>

<!-- MAIN NAVIGATION -->

<header class="wrap">
	<div class="th-header-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-lg-push-3 col-md-12 col-sm-12  hidden-xs">
					<div class="navbar navbar-default t3-mainnav"> 
						
						<button  data-effect="off-canvas-effect-7" data-nav="#t3-off-canvas" data-pos="left" type="button" class="btn btn-default off-canvas-toggle navbar-toggle">
						  <i class="fa fa-bars"></i>
						</button>
						
						<!-- OFF-CANVAS -->
						<div class="hidden-md hidden-lg">
							<?php if ($this->getParam('addon_offcanvas_enable')) : ?>
							<?php $this->loadBlock ('off-canvas') ?>
							<?php endif ?>
						</div>
						
						<!-- //OFF-CANVAS --> 
						
						<!-- NAVBAR HEADER -->
						<div class="navbar-header">
							<?php if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
							<?php $this->addScript(T3_URL.'/js/nav-collapse.js'); ?>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse"> <i class="fa fa-bars"></i> </button>
							<?php endif ?>
						</div>
						<!-- //NAVBAR HEADER --> 
						
						<!-- NAVBAR MAIN -->
						<?php if ($this->getParam('navigation_collapse_enable')) : ?>
						<nav class="t3-navbar-collapse navbar-collapse collapse"></nav>
						<?php endif ?>
						<nav class="t3-navbar navbar-collapse collapse">
							<jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />
						</nav>
						<!-- //NAVBAR MAIN --> 
						<script type="text/javascript">new menuFixer('.t3-navbar ul.nav.level0');</script> 
					</div>
				</div>
				<div class="col-lg-3 col-lg-pull-9 col-md-12 col-sm-12">
					<!-- LOGO -->
					
					<h2>The Mycodelic Forest</h2>
					
					<!-- //LOGO -->	
				</div>
			</div>
		</div>
	</div>
	<div class="container"> </div>
</header>
<!-- //MAIN NAVIGATION -->

<?php $this->loadBlock ('masthead') ?>
