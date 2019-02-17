<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<?php if ($this->countModules('page_title')) : ?>
<!-- PAGE TITLE -->

<div class="tbw-page_title <?php $this->_c('page_title')?>">
	<div class="container">
		<div class="tbw-box">
			<jdoc:include type="modules" name="<?php $this->_p('page_title') ?>" style="Xhtml" />
		</div>
	</div>
</div>

<?php endif ?>



