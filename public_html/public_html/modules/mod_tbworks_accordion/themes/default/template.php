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
<script type="text/javascript">
/*
	window.addEvent('domready', function(){
		var slider = $$('.toggler');
		var i = 0;
		var j = 0;
		var content_slider = $$('.tbworks-accordion .content');
		var openSlider = '<?php if( $open=='first') { echo "open";}else{echo "closed";} ?>';
		if(openSlider=='open') {
			slider[0].addClass('active');
		}
		
		for(i=0;i<slider.length;i++) {
			slider[i].addEvent('click', function() {	
				var allclosed = 0;
				
				if(this.hasClass('active')) {
					this.removeClass('active');
				}
				else {
					this.addClass('active');	
				}
				
				for(j=0;j<slider.length;j++){
					if(this!=slider[j]) {
						slider[j].removeClass('active');
					}
				}
				
			});
		}
		$$('.tbworks-accordion .shadow')[$$('.tbworks-accordion .shadow').length-1].setStyle("min-height", "20px");
	});
	*/
</script>
<div id="debug">
	<div id="visible"></div><br/>
    <div id="animated"></div>
</div>
<div class="default">
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