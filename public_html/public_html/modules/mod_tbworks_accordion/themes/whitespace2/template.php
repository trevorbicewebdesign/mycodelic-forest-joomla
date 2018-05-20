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
<div id="debug">
	<div id="visible"></div><br/>
    <div id="animated"></div>
</div>
<div class="whitespace2">
	<div id="<?php echo $accordion_id ?>" class="tbworks-accordion">
	
		<dl>
		<?php for ($i=0; $i < $items; $i++) : ?>
	
			<?php
			$listitem = $lists[$i];
			$item_class = "item" . ($i + 1);
			if ($i == 0) $item_class .= " first";
			if ($i == $items - 1) $item_class .= " last";
			?>
			<dt class="toggler <?php echo $item_class; ?>">
				<?php echo $listitem->title ?>
			</dt>
			<dd class="content <?php echo $item_class; ?>">
				<?php modTBWorksAccordionHelper::renderItem($listitem, $params, $access); ?>
			</dd>
				
		<?php endfor; ?>
		</dl>

	</div>
</div>