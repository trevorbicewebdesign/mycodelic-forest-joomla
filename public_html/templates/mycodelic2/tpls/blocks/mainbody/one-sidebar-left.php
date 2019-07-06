<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 2 columns: sidebar - content
 */
?>
<div id="t3-mainbody" class="container t3-mainbody sidebar-left">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12 col-sm-8 col-sm-push-4 col-md-9 col-md-push-3 col-lg-10 col-lg-push-2">
		<div class="margin-left-wrapper">
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

		<!-- SIDEBAR LEFT -->
		<div id="sidebar-container-1" class="  col-xs-12 col-sm-4 col-sm-pull-8 col-md-3 col-md-pull-9 col-lg-2 col-lg-pull-10 <?php $this->_c($vars['sidebar']) ?>">
			<div class="t3-sidebar t3-sidebar-left  mCustomScrollbar">
	
				<div class="th-box-wrapper">
					<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar']) ?>" style="T3Xhtml" />
				</div>
				
			</div>
		</div>
		<!-- //SIDEBAR LEFT -->

	</div>
</div> 