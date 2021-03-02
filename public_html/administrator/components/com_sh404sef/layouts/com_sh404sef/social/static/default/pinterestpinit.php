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
	'pinterest'
);

$imageSrc = wbArrayGet(
	$buttonData,
	'imageSrc'
);

$imageDesc = wbArrayGet(
	$buttonData,
	'imageDesc'
);

$staticText = wbArrayGet(
	$buttonData,
	'static_text'
);
$altText    = empty($staticText) ? 'Pinterest' : $staticText;

$href = 'https://pinterest.com/pin/create/button/?url=' . urlencode($url);
if (!empty($imagSrc))
{
	$href .= '&media=' . urlencode($imagSrc);
}
if (!empty($imageDesc))
{
	$href .= '&description=' . urlencode($imageDesc);
}
?>

<li class="wbl-social-button wbl-social-pinterest">
    <a class="wbl-social-link<?php echo empty($staticText) ? '' : ' wbl-social-has-text'; ?>"
       id="wbl-button_pinterest_share_1"
       href="<?php echo $href; ?>"
		<?php if (empty($staticText)): ?>
            aria-label="<?php echo \ShlSystem_Strings::escapeAttr($altText); ?>"
		<?php endif; ?>
       target="_blank"
       rel="noopener noreferrer"
    >
        <svg class="wbl-social-icon" viewBox="-8 -8 80 80">
            <path
                    d="M30.374,4.622c-13.586,0-20.437,9.74-20.437,17.864c0,4.918,1.862,9.293,5.855,10.922c0.655,0.27,1.242,0.01,1.432-0.715  c0.132-0.5,0.445-1.766,0.584-2.295c0.191-0.717,0.117-0.967-0.412-1.594c-1.151-1.357-1.888-3.115-1.888-5.607  c0-7.226,5.407-13.695,14.079-13.695c7.679,0,11.898,4.692,11.898,10.957c0,8.246-3.649,15.205-9.065,15.205  c-2.992,0-5.23-2.473-4.514-5.508c0.859-3.623,2.524-7.531,2.524-10.148c0-2.34-1.257-4.292-3.856-4.292  c-3.058,0-5.515,3.164-5.515,7.401c0,2.699,0.912,4.525,0.912,4.525s-3.129,13.26-3.678,15.582  c-1.092,4.625-0.164,10.293-0.085,10.865c0.046,0.34,0.482,0.422,0.68,0.166c0.281-0.369,3.925-4.865,5.162-9.359  c0.351-1.271,2.011-7.859,2.011-7.859c0.994,1.896,3.898,3.562,6.986,3.562c9.191,0,15.428-8.379,15.428-19.595  C48.476,12.521,41.292,4.622,30.374,4.622z"/>
        </svg>
		<?php if (!empty($staticText)): ?>
            <span class="wbl-social-static-text"><?php echo $this->escape($staticText); ?></span>
		<?php endif; ?>
    </a>
</li>
