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

?>

<div class="control-group">
	<?php if (!$displayData->hidden): ?>
		<div class="control-label">
			<?php echo $displayData->label; ?>
		</div>
	<?php endif; ?>
	<div class="controls">
		<?php
		echo $displayData->input;
		$element = $displayData->element;
		if (!empty($element['additionaltext'])): ?>
			<span class = "sh404sef-additionaltext"><?php echo (string) $element['additionaltext']; ?></span>
		<?php
		endif;?>
	</div>
</div>
