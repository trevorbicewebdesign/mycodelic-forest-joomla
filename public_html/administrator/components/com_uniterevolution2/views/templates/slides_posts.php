	<div class="wrap settings_wrap">			<div class="title_line">			<div id="icon-options-general" class="icon32"></div>					<div class="view_title"><?php _uge("Edit Slides",REVSLIDER_TEXTDOMAIN)?>: <?php echo $slider->getTitle()?></div>						</div>			<div class="vert_sap"></div>		<?php _uge("The slides are posts that taken from multiple sources.",REVSLIDER_TEXTDOMAIN)?> &nbsp;				<?php if($showSortBy == true): ?> 			<?php _uge("Sort by",REVSLIDER_TEXTDOMAIN)?>: <?php echo $selectSortBy?> &nbsp; <span class="hor_sap"></span>		<?php endif?>				<?php echo $linkNewPost?>		<span id="slides_top_loader" class="slides_posts_loader" style="display:none;"><?php _uge("Updating Sorting...",REVSLIDER_TEXTDOMAIN)?></span>				<div class="vert_sap"></div>		<div class="sliders_list_container">			<?php require self::getPathTemplate("slides_list_posts");?>		</div>		<div class="vert_sap_medium"></div>		<div class="list_slides_bottom">			<?php echo $linkNewPost?>			<a class="button-primary revyellow" href='<?php echo self::getViewUrl(RevSliderAdmin::VIEW_SLIDERS);?>' ><i class="revicon-cancel"></i><?php _uge("Close",REVSLIDER_TEXTDOMAIN)?></a>			<a href="<?php echo $linksSliderSettings?>" class="button-primary revgreen"><i class="revicon-cog"></i><?php _uge("Slider Settings",REVSLIDER_TEXTDOMAIN)?></a>		</div>			</div>		<script type="text/javascript">		var g_messageDeleteSlide = "<?php _uge("Warning! Removing this entry will cause the original wordpress post to be deleted.",REVSLIDER_TEXTDOMAIN)?>";		var g_messageChangeImage = "<?php _uge("Select Slide Image",REVSLIDER_TEXTDOMAIN)?>";				jQuery(document).ready(function() {	    	if(!g_revSliderAdmin)	    		g_revSliderAdmin = new RevSliderAdmin();					    	g_revSliderAdmin.initSlidesListViewPosts("<?php echo $sliderID?>");					});			</script>