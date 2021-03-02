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

$buttonData = $this->getInArray(
	'buttons',
	'facebookshare'
);

$staticText = wbArrayGet(
	$buttonData,
	'static_text'
);
$altText    = empty($staticText) ? 'Facebook' : $staticText;

$href = "https://facebook.com/sharer.php?u=" . urlencode(
		$this->getAsAbsoluteUrl(
			'url'
		)
	);
?>
<li class="wbl-social-button wbl-social-facebook">
    <a class="wbl-social-link<?php echo empty($staticText) ? '' : ' wbl-social-has-text'; ?>"
       id="wbl-button_facebook_share_1"
       href="<?php echo $href; ?>"
		<?php if (empty($staticText)): ?>
            aria-label="<?php echo \ShlSystem_Strings::escapeAttr($altText); ?>"
		<?php endif; ?>
       target="_blank"
       rel="noopener noreferrer"
    >
        <svg class="wbl-social-icon" viewBox="-2 -2 32 32">
            <path d="M17.9 14h-3v8H12v-8h-2v-2.9h2V8.7C12 6.8 13.1 5 16 5c1.2 0 2 .1 2 .1v3h-1.8c-1 0-1.2.5-1.2 1.3v1.8h3l-.1 2.8z"></path>
        </svg>

		<?php if (!empty($staticText)): ?>
            <span class="wbl-social-static-text"><?php echo $this->escape($staticText); ?></span>
		<?php endif; ?>
    </a>
</li>
