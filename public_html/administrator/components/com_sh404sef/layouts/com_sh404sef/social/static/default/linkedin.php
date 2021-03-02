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

$url = $this->getAsAbsoluteUrl(
	'url'
);

$buttonData = $this->getInArray(
	'buttons',
	'linkedin'
);

$staticText = wbArrayGet(
	$buttonData,
	'static_text'
);
$altText    = empty($staticText) ? 'LinkedIn' : $staticText;

$title = $this->get('pageInfo')->pageTitle;

$href = 'https://www.linkedin.com/shareArticle?url=' . urlencode($url) . '&title=' . urlencode($title);
?>

<li class="wbl-social-button wbl-social-linkedin">
    <a class="wbl-social-link<?php echo empty($staticText) ? '' : ' wbl-social-has-text'; ?>"
       id="wbl-button_linkedin_share_1"
       href="<?php echo $href; ?>"
		<?php if (empty($staticText)): ?>
            aria-label="<?php echo \ShlSystem_Strings::escapeAttr($altText); ?>"
		<?php endif; ?>
       target="_blank"
       rel="noopener noreferrer"
    >
        <svg class="wbl-social-icon" viewBox="0 0 31 31">
            <path
                    d="M10.576 7.985c.865 0 1.568.703 1.568 1.568 0 .866-.703 1.57-1.568 1.57-.867 0-1.568-.704-1.568-1.57 0-.865.7-1.568 1.568-1.568zm-1.353 4.327h2.706v8.704H9.222v-8.704zm4.403 0h2.595v1.19h.038c.36-.685 1.244-1.407 2.56-1.407 2.737 0 3.243 1.803 3.243 4.147v4.774h-2.7v-4.232c0-1.01-.02-2.308-1.407-2.308-1.408 0-1.623 1.1-1.623 2.235v4.306h-2.704v-8.704"/>
        </svg>
		<?php if (!empty($staticText)): ?>
            <span class="wbl-social-static-text"><?php echo $this->escape($staticText); ?></span>
		<?php endif; ?>
    </a>
</li>
