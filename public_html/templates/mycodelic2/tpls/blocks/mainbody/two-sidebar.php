<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 3 columns, content in center: sidebar1 - content - sidebar2
 */
?>

<div id="t3-mainbody" class="container t3-mainbody two-sidebar">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12 col-md-8  col-md-push-2">
		<div class="th-box-wrapper">
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<?php if ($this->countModules('content-top')) : ?>
			<div class="tbw-content-top">
			<jdoc:include type="modules" name="<?php $this->_p('content-top') ?>" style="T3Xhtml" />
			</div>
			<?php endif; ?>
			<jdoc:include type="component" />
			<?php if ($this->countModules('content-bottom')) : ?>
			<div class="tbw-content-bottom">
			<jdoc:include type="modules" name="<?php $this->_p('content-bottom') ?>" style="T3Xhtml" />
			</div>
			<?php endif; ?>
		</div>
		</div>
		<!-- //MAIN CONTENT -->

		<!-- SIDEBAR 1 -->
		<div id="sidebar-container-1" class="  col-xs-6  col-md-2  col-md-pull-8  <?php $this->_c($vars['sidebar']) ?>">
			<div class="t3-sidebar t3-sidebar-left  mCustomScrollbar">
				<div class="th-box-wrapper">
					<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar1']) ?>" style="T3Xhtml" />
				</div>
			</div>
		</div>
		
		<!-- //SIDEBAR 1 -->
	
		<!-- SIDEBAR 2 -->
		<div id="sidebar-container-2" class="  col-xs-6  col-md-2 <?php $this->_c($vars['sidebar2']) ?>">
			<div class="t3-sidebar t3-sidebar-right  mCustomScrollbar">
			
				<div class="th-box-wrapper">
					<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar2']) ?>" style="T3Xhtml" />
				</div>
			</div>
		</div>
		<!-- //SIDEBAR 2 -->
	
	</div>
</div> 