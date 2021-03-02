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
	'twitter'
);

$viaAccount = wbArrayGet(
	$buttonData,
	'viaAccount'
);

$staticText = wbArrayGet(
	$buttonData,
	'static_text'
);
$altText    = empty($staticText) ? 'Twitter' : $staticText;

$title = $this->get('pageInfo')->pageTitle;

$href = 'https://twitter.com/share?url=' . urlencode($url) . '&text=' . urlencode($title);
if (!empty($viaAccount))
{
	$href .= '&via=' . urlencode($viaAccount);
}
?>
<li class="wbl-social-button wbl-social-twitter">
    <a class="wbl-social-link<?php echo empty($staticText) ? '' : ' wbl-social-has-text'; ?>"
       id="wbl-button_twitter_tweet_share_1"
       href="<?php echo $href; ?>"
		<?php if (empty($staticText)): ?>
            aria-label="<?php echo \ShlSystem_Strings::escapeAttr($altText); ?>"
		<?php endif; ?>
       target="_blank"
       rel="noopener noreferrer"
    >
        <svg class="wbl-social-icon" viewBox="-2 -2 32 32">
            <path
                    d="M21.3 10.5v.5c0 4.7-3.5 10.1-9.9 10.1-2 0-3.8-.6-5.3-1.6.3 0 .6.1.8.1 1.6 0 3.1-.6 4.3-1.5-1.5 0-2.8-1-3.3-2.4.2 0 .4.1.7.1l.9-.1c-1.6-.3-2.8-1.8-2.8-3.5.5.3 1 .4 1.6.4-.9-.6-1.6-1.7-1.6-2.9 0-.6.2-1.3.5-1.8 1.7 2.1 4.3 3.6 7.2 3.7-.1-.3-.1-.5-.1-.8 0-2 1.6-3.5 3.5-3.5 1 0 1.9.4 2.5 1.1.8-.1 1.5-.4 2.2-.8-.3.8-.8 1.5-1.5 1.9.7-.1 1.4-.3 2-.5-.4.4-1 1-1.7 1.5z"/>
        </svg>
		<?php if (!empty($staticText)): ?>
            <span class="wbl-social-static-text"><?php echo $this->escape($staticText); ?></span>
		<?php endif; ?>
    </a>
</li>
