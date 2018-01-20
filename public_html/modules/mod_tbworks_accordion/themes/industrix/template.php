<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
$document =& JFactory::getDocument();
$document->addStyleSheet(JURI::root(true).DS."modules".DS."mod_tbworks_accordion".DS."themes".DS."industrix".DS."font-awesome".DS."css".DS."font-awesome.min.css");
?>
<div class="industrix">
	<div id="<?php echo $accordion_id ?>" class="tbworks-accordion">
	
		<dl>
		<?php for ($i=0; $i < $items; $i++) : ?>
	
			<?php
			$listitem = $lists[$i];
			$item_class = "item" . ($i + 1);
			if ($i == 0) $item_class .= " first";
			if ($i == $items - 1) $item_class .= " last";
			
			//print_r($listitem);
			?>
			<dt class="toggler <?php echo $item_class; ?>"><?php echo $listitem->title ?>
				<span class="indicator"> </span>
			</dt>
			<dd class="content <?php echo $item_class; ?>">
				<?php modTBWorksAccordionHelper::renderItem($listitem, $params, $access); ?>
			</dd>
				
		<?php endfor; ?>
		</dl>

	</div>
</div>