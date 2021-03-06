<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 2 columns: content - sidebar
 */
?>
<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12 col-sm-8  col-md-9">
		<div class="margin-right-wrapper">
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<?php if ($this->countModules('content-top')) : ?>
			<div class="tbw-content-bottom">
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

		<div class="t3-sidebar t3-sidebar-right col-xs-12 col-sm-4  col-md-3">
			<div class="row">

				<!-- MASSCOL 1 -->
				<?php if ($vars['mastcol']) : ?>
					<div class="t3-mastcol t3-mastcol-1 <?php $this->_c($vars['mastcol']) ?>">
						<jdoc:include type="modules" name="<?php $this->_p($vars['mastcol']) ?>" style="T3Xhtml" />
					</div>
				<?php endif ?>
				<!-- //MASSCOL 1 -->

				<!-- SIDEBAR RIGHT -->
				<?php if ($vars['sidebar']) : ?>
				<div class="t3-sidebar col-xs-12 col-sm-4  col-md-3 <?php $this->_c($vars['sidebar']) ?>">
					<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar']) ?>" style="T3Xhtml" />
				</div>
				<?php endif ?>
				<!-- //SIDEBAR RIGHT -->
				
			</div>
		</div>

	</div>
</div> 