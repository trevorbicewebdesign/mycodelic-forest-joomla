<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 * @date        2020-06-26
 */

use Weeblr\Wblib\V_SH4_4206\Mvc\LayoutHelper;

// Security check to ensure this file is being included by a parent file.
defined('_JEXEC') || die()

?>

<!-- start analytics panel markup -->
<div class="sh404sef-analytics wbl-theme-default">

	<?php if (!empty($this->sidebar)) : ?>
        <section role="navigation" id="sh404sef-sidebar-container" class="sh404sef-sidebar-container">
			<?php echo $this->sidebar; ?>
        </section>
	<?php endif; ?>

    <section id="sh404sef-dashboard-container" class="sh404sef-dashboard-container">
		<?php echo LayoutHelper::render(
			'com_sh404sef.analytics.main',
			$this->data,
			SH404SEF_LAYOUTS_PATH
		);
		?>
    </section>
</div>
<div class="sh404sef-footer-container">
	<?php echo $this->footerText; ?>
</div>
</div>
<!-- end analytics panel markup -->

