<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author      Yannick Gaultier
 * @copyright   (c) Yannick Gaultier - Weeblr llc - 2020
 * @package     sh404SEF
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version     4.21.0.4206
 * @date		2020-06-26
 */

defined('JPATH_BASE') or die;

/**
 * Displays a text as part of a regular Joomla JForm layout, but wraps
 * it into a shlegend-label, so that its css can be overriden
 */
?>
<div class="control-group">
	<div class="shlegend-label">
		<div class="control-label">
		<?php echo $displayData->label; ?>
		</div>
	</div>
</div>
