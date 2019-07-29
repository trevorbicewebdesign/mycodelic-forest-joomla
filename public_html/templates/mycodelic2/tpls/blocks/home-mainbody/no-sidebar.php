<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 1 columns, content only
 */
?>

<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12">
		<div class="th-box-wrapper">
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
            
            <div class="tbw-content-top">
			<jdoc:include type="modules" name="<?php $this->_p('content-top') ?>" style="T3Xhtml" />
			</div>
			
			<jdoc:include type="component" />
			<?php if ($this->countModules('content-bottom')) : ?>
			<div class="tbw-content-bottom">
			<jdoc:include type="modules" name="<?php $this->_p('content-bottom') ?>" style="T3Xhtml" />
			</div>
			<?php endif; ?>
		</div>
		</div>
		<!-- //MAIN CONTENT -->

	</div>
</div> 