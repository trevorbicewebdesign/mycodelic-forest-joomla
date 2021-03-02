<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      4.21.0.4206
 *
 * 2020-06-26
 */
// no direct access
defined('_JEXEC') || die;

$buttonsTypes = $this->get('types', array());
if (empty($buttonsTypes))
{
	return;
}

$theme                      = $this->get('theme');
$style                      = $this->get('style');
$size                       = $this->get('size', 'normal');
$hideDesktopButtonInitially = $this->get('useEnhancedUx', true) || $this->get('useShareApi', true);
?>

<!-- sh404SEF: static social sharing buttons -->
<div
        class="sh404sef-social-buttons wbl-social-buttons wbl-social-<?php echo $theme; ?> wbl-social-<?php echo $style; ?> wbl-social-<?php echo $size; ?>">
    <ul class="wbl-social-desktop <?php echo $hideDesktopButtonInitially ? 'wbl-social-hide' : ''; ?>">
		<?php
		foreach ($buttonsTypes as $buttonsType)
		{
			echo ShlMvcLayout_Helper::render(
				'com_sh404sef.social.static.default.' . $buttonsType,
				$displayData,
				sh404SEF_LAYOUTS
			);
		}
		?>
    </ul>
    <ul class="wbl-social-mobile wbl-social-hide">
		<?php
		echo ShlMvcLayout_Helper::render(
			'com_sh404sef.social.static.default.mobile',
			$displayData,
			sh404SEF_LAYOUTS
		);
		?>
    </ul>
</div>
<!-- sh404SEF: static social sharing buttons -->

