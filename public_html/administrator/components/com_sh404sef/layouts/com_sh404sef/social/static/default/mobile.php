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

$staticText = JText::_('PLG_SH404SEFCORE_SH404SEFSOCIAL_STATIC_BUTTON_TEXT_SHARE_MOBILE_API');

$altText = empty($staticText) ? 'Share to...' : $staticText;

$title = $this->get('pageInfo')->pageTitle;

?>
<li class="wbl-social-button wbl-social-share-api">
    <a class="wbl-social-link <?php echo empty($staticText) ? '' : ' wbl-social-has-text'; ?>"
       id="wbl-button_mobile_share_1"
       href="#wbl_social_mobile_share_api"
		<?php if (empty($staticText)): ?>
            aria-label="<?php echo \ShlSystem_Strings::escapeAttr($altText); ?>"
		<?php endif; ?>
    >
        <svg viewBox="0 -4 36 36" width="24" height="24">
            <path fill="none" d="M0 0h24v24H0V0z"/>
            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92-1.31-2.92-2.92-2.92z"/>
        </svg>
		<?php if (!empty($staticText)): ?>
            <span class="wbl-social-static-text"><?php echo $this->escape($staticText); ?></span>
		<?php endif; ?>
    </a>
</li>
