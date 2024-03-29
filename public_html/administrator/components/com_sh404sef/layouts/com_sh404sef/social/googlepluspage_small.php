<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2018
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.15.1.3863
 * @date        2018-08-22
 */

/**
 * Input:
 *
 * $displayData['page']
 * $displayData['url']
 * $displayData['googlePlusPageSize']
 * $displayData['googlePlusCustomText']
 * $displayData['googlePlusCustomText2']
 *
 */
// Security check to ensure this file is being included by a parent file.
if (!defined('_JEXEC')) die('Direct Access to this location is not allowed.');

?>
<div style="display: inline-block;">
	<?php if (!empty($displayData['googlePlusCustomText'])) : ?>
		<span style="float: left; font: bold 13px/16px arial,sans-serif; margin-right: 4px;">
		<?php echo htmlspecialchars($displayData['googlePlusCustomText'], ENT_COMPAT, 'UTF-8'); ?>
		</span>
		<span style="float: left; font: 13px/16px arial,sans-serif; margin-right: 11px;">
		<?php echo htmlspecialchars($displayData['googlePlusCustomText2'], ENT_COMPAT, 'UTF-8'); ?>
		</span>
	<?php endif; ?>
	<div style="float: left;"><img src="https://ssl.gstatic.com/images/icons/gplus-16.png" width="16" height="16"
	                               style="border: 0;"/></div>
	<div style="clear: both"></div>
</div>
