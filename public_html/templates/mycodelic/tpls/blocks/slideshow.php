<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php if ($this->countModules('slideshow')) : ?>
<div id="slideshow" class="mf-top_drawer <?php $this->_c('top_drawer')?>">
	<div class="container">
		<div class="th-box slideshow <?php $this->_c('slideshow')?>">
			<jdoc:include type="modules" name="<?php $this->_p('slideshow') ?>" style="raw" />
		</div>
	</div>
</div>
<?php endif ?>