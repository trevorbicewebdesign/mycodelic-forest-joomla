<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12 col-sm-8 col-sm-push-4 col-md-6 col-md-push-6">
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
		<!-- //MAIN CONTENT -->

		<div class="t3-sidebar col-xs-12 col-sm-4 col-sm-pull-8 col-md-6 col-md-pull-6">
			<div class="row">

				<!-- MASSCOL 1 -->
				<?php if ($vars['mastcol']) : ?>
					<div class="t3-mastcol t3-mastcol-1 <?php $this->_c($vars['mastcol']) ?>">
						<jdoc:include type="modules" name="<?php $this->_p($vars['mastcol']) ?>" style="T3Xhtml" />
					</div>
				<?php endif ?>
				<!-- //MASSCOL 1 -->

				<!-- SIDEBAR 1 -->
				<div class="t3-sidebar t3-sidebar-1 col-xs-6 col-sm-12 col-md-6 <?php $this->_c($vars['sidebar1']) ?>">
					<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar1']) ?>" style="T3Xhtml" />
				</div>
				<!-- //SIDEBAR 1 -->
			
				<!-- SIDEBAR 2 -->
				<div class="t3-sidebar t3-sidebar-2 col-xs-6 col-sm-12 col-md-6 <?php $this->_c($vars['sidebar2']) ?>">
					<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar2']) ?>" style="T3Xhtml" />
				</div>
				<!-- //SIDEBAR 2 -->

			</div>
		</div>

	</div>
</div> 