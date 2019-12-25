<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2019
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.17.0.3932
 * @date		2019-09-30
 */

/**
 * Input:
 *
 * $displayData['tracking_code']
 */
// Security check to ensure this file is being included by a parent file.
if (!defined('_JEXEC')) die('Direct Access to this location is not allowed.');

?>
<!-- Google Tag Manager snippet -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=<?php echo $displayData['tracking_code']; ?>"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
