<?php
/**
* YOOaccordion Joomla! Module
*
* @author    yootheme.com
* @copyright Copyright (C) 2007 YOOtheme Ltd. & Co. KG. All rights reserved.
* @license	 GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div class="watermark">
	<div id="<?php echo $accordion_id ?>" class="tbworks-accordion">
	
		<dl>
		<?php for ($i=0; $i < $items; $i++) : ?>
	
			<?php
			$listitem = $lists[$i];
			$item_class = "item" . ($i + 1);
			if ($i == 0) $item_class .= " first";
			if ($i == $items - 1) $item_class .= " last";
			?>
			<dt class="toggler <?php echo $item_class; ?>"><div>
				<?php echo $listitem->title ?></div>
			</dt>
            <div class="shadow"><div class="trans">
			<dd class="content <?php echo $item_class; ?>">
				<?php modTBWorksAccordionHelper::renderItem($listitem, $params, $access); ?>
			</dd>
            </div></div>
				
		<?php endfor; ?>
		</dl>

	</div>
</div>