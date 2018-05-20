<?php defined('_JEXEC') or die('Direct Access to this location is not allowed.');
         
	function findImages($catid){
	/*Find all images for a certain category */
	$query = "SELECT * FROM jos_joomgallery ";
	$query .= 'WHERE catid='.$catid . ' ';
	$query .= 'AND published = 1 ';
	$query .= 'order by ordering';

	$db =& JFactory::getDBO();
	$db->setQuery( $query );
	$image_holder = $db->loadObjectList();
	
	for($i=0;$i<count($image_holder);$i++){
		$image[$i] = new stdClass;
		$image[$i]->id = $image_holder[$i]->id;
		$image[$i]->imgtitle = $image_holder[$i]->imgtitle;
		$image[$i]->imgtext = $image_holder[$i]->imgtext;
		$image[$i]->imgfilename = $image_holder[$i]->imgfilename;
		$image[$i]->imgfilename = $image_holder[$i]->imgfilename;
		$image[$i]->imgthumbname = $image_holder[$i]->imgthumbname;
		$image[$i]->ordering = $image_holder[$i]->ordering;
	}
	
	
	
	
	return $image;
	//print_r($image);
	
	
	
	
}	 
		//Get all images for this category
		$all_images = findImages($this->images[0]->catid);

		//Find the position of the first image to be displayed on this page
		$start = $this->images[0]->ordering;
		//find the position of the last image to be displayed on this page
		$finish = $this->images[count($this->images)-1]->ordering;
		$holder = $this->images[0]->thumb_src;
		$catpath = $this->images[0]->catpath;
		$holder = "/images/joomgallery/details/". $catpath . "/";
		?>
        <div style="display:none;">
        <?php
		for($i=0;$i<$start-1;$i++){
			
			
			?>
            <a rel="boxplus-gallery0" id="<?php echo $all_images[$i]->id; ?>" title="<?php echo $all_images[$i]->imgtitle;echo $categories[0]->description; ?>" href="<?php echo $holder . $all_images[$i]->imgfilename;?>" ><img src="<?php echo $holder . $all_images[$i]->imgfilename;?>" alt="<?php echo $all_images[$i]->imgtitle;?>" /> </a>
		<?php	
			
		} ?></div>
        <?php

		
		
		
      if($this->_config->get('jg_anchors')): ?>
  <a name="category"></a>
<?php endif;
      if($this->params->get('show_pagination_img_top')):
        echo $this->loadTemplate('imgpagination');
      endif;
      if($this->_config->get('jg_coolirislink')): ?>
  <a id="jg_cooliris" href="javascript:PicLensLite.start({feedUrl:'<?php echo JRoute::_('index.php?view=category&amp;catid='.$this->category->cid.'&amp;page='.$this->page.'&amp;format=raw', true); ?>',maxScale:0});">
    <?php echo JText::_('COM_JOOMGALLERY_CATEGORY_COOLIRISLINK_TEXT'); ?></a>
<?php endif; ?>
<?php if($this->params->get('show_all_in_popup')):
        echo $this->popup['before'];
      endif;

      $count_pics = count($this->images);
      $column     = $this->_config->get('jg_colnumb');
      $num_rows   = ceil($count_pics / $column);
      $index      = 0;
      $this->i    = 0;
      for($row_count = 0; $row_count < $num_rows; $row_count++): ?>
  <div class="jg_row sectiontableentry<?php $this->i++; echo ($this->i%2)+1; ?>">
<?php   
		$catid = JRequest::getVar('catid');
		$id = JRequest::getVar('id');
		$db =& JFactory::getDBO();
		$query  = "SELECT a.catid FROM jos_joomgallery AS a ";
		$query .= "WHERE a.id = '".$id."' ";
		$db->setQuery( $query );
		$res 	= $db->query();
		$rows = $db->loadObjectList();
		if(!$catid) {
			$catid = $rows[0]->catid;
		}
		
		$query  = "SELECT a.name, a.cid, a.description, a.parent_id FROM jos_joomgallery_catg AS a ";
		$query .= "WHERE a.cid = '".$catid."' ";
		$db->setQuery( $query );
		$res 	= $db->query();
		$categories = $db->loadObjectList(); 
		
		
		$big_path = "/images/joomgallery/details/";
		
		
		for($col_count = 0; ($col_count < $column) && ($index < $count_pics); $col_count++):
          $row = $this->images[$index]; 	

		  		//for every image before the start of the output create a hidden img to add to boxplus BEFORE the regular output of images
//DAVID DVORAK MOD TO MAKE BOXPLUS WORK  ** NOTE THE ECHO PREG_REPLACE IN THE A TAG FOR EACH IMAGE ** 11-16-2012
//DAVID DVORAK MOD TO MAKE BOXPLUS WORK ** Got rid of preg_replace because that was a stupid way to do things :) *** 1-8-2013
		  ?>
          
          
    <div class="jg_element_cat">
      <div class="jg_imgalign_catimgs">
        <a title="<?php echo preg_replace('#"#', '&quot;',  $row->imgtext); ?>" id="<?php echo $row_count; ?>" <?php echo $row->atagtitle; ?> href="<?php  echo $big_path . $row->catpath . "/" . $row->imgfilename; ?>" class="jg_catelem_photo jg_catelem_photo_align ilightbox">
          <img class="addborder" src="<?php echo $row->thumb_src; ?>" class="jg_photo" <?php echo $row->imgwh; ?> alt="<?php echo $row->imgtitle; ?>" /></a>
      </div>
<?php if($row->show_elems): ?>
      <div class="jg_catelem_txt">
        <ul>
<?php     if($this->_config->get('jg_showtitle') || $this->_config->get('jg_showpicasnew')): ?>
          <li>
          
<?php       if($this->_config->get('jg_showtitle')): ?>
            <b><?php echo $row->imgtitle; ?></b>
<?php       endif;
            if($this->_config->get('jg_showpicasnew')): ?>
            <?php echo $row->isnew; ?>
<?php       endif; ?>
          </li>
<?php     endif;
          if($this->_config->get('jg_showauthor')): ?>
          <li>
            <?php echo JText::sprintf('COM_JOOMGALLERY_COMMON_AUTHOR_VAR', $row->authorowner);?>
          </li>
<?php     endif;
          if($this->_config->get('jg_showhits')): ?>
          <li>
            <?php echo JText::sprintf('COM_JOOMGALLERY_COMMON_HITS_VAR', $row->hits); ?>
          </li>
<?php     endif;
          if($this->_config->get('jg_showcatrate')): ?>
          <li>
            <?php echo JHTML::_('joomgallery.rating', $row, false, 'jg_starrating_cat'); ?>
          </li>
<?php     endif;
          if($this->_config->get('jg_showcatcom')): ?>
          <li>
            <?php echo JText::sprintf('COM_JOOMGALLERY_COMMON_COMMENTS_VAR', $row->comments); ?>
          </li>
<?php     endif;
          if($row->imgtext && $this->_config->get('jg_showcatdescription')): ?>
          <li>
            <?php echo JHTML::_('joomgallery.text', JText::sprintf('COM_JOOMGALLERY_COMMON_DESCRIPTION_VAR', $row->imgtext)); ?>
          </li>
<?php     endif; ?>
          <?php echo $row->event->afterDisplayThumb; ?>
<?php     if($this->params->get('show_download_icon') || $this->params->get('show_favourites_icon') || $this->params->get('show_report_icon') || $row->show_edit_icon || $row->show_delete_icon || $row->event->icons): ?>
          <li>
<?php       if($this->params->get('show_download_icon') == 1): ?>
            <a href="<?php echo JRoute::_('index.php?task=download&id='.$row->id); ?>"<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_DOWNLOAD_TIPTEXT', 'COM_JOOMGALLERY_COMMON_DOWNLOAD_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'download.png', 'COM_JOOMGALLERY_COMMON_DOWNLOAD_TIPCAPTION'); ?></a>
<?php       endif;
            if($this->params->get('show_download_icon') == -1): ?>
            <span<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_DOWNLOAD_LOGIN_TIPTEXT', 'COM_JOOMGALLERY_COMMON_DOWNLOAD_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'download_gr.png', 'COM_JOOMGALLERY_COMMON_DOWNLOAD_TIPCAPTION'); ?>
            </span>
<?php       endif;
            if($this->params->get('show_favourites_icon') == 1): ?>
            <a href="<?php echo JRoute::_('index.php?task=favourites.addimage&id='.$row->id.'&catid='.$row->catid); ?>"<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_FAVOURITES_ADD_IMAGE_TIPTEXT', 'COM_JOOMGALLERY_COMMON_FAVOURITES_ADD_IMAGE_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'star.png', 'COM_JOOMGALLERY_COMMON_FAVOURITES_ADD_IMAGE_TIPCAPTION'); ?></a>
<?php       endif;
            if($this->params->get('show_favourites_icon') == 2): ?>
            <a href="<?php echo JRoute::_('index.php?task=favourites.addimage&id='.$row->id.'&catid='.$row->catid); ?>"<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_DOWNLOADZIP_ADD_IMAGE_TIPTEXT', 'COM_JOOMGALLERY_COMMON_DOWNLOADZIP_ADD_IMAGE_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'basket_put.png', 'COM_JOOMGALLERY_COMMON_DOWNLOADZIP_ADD_IMAGE_TIPCAPTION'); ?></a>
<?php       endif;
            if($this->params->get('show_favourites_icon') == -1): ?>
            <span<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_FAVOURITES_ADD_IMAGE_NOT_ALLOWED_TIPTEXT', 'COM_JOOMGALLERY_COMMON_FAVOURITES_ADD_IMAGE_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'star_gr.png', 'COM_JOOMGALLERY_COMMON_FAVOURITES_ADD_IMAGE_TIPCAPTION'); ?>
            </span>
<?php       endif;
            if($this->params->get('show_favourites_icon') == -2): ?>
            <span<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_DOWNLOADZIP_ADD_IMAGE_NOT_ALLOWED_TIPTEXT', 'COM_JOOMGALLERY_COMMON_DOWNLOADZIP_ADD_IMAGE_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'basket_put_gr.png', 'COM_JOOMGALLERY_COMMON_DOWNLOADZIP_ADD_IMAGE_TIPCAPTION'); ?>
            </span>
<?php       endif;
            if($this->params->get('show_report_icon') == 1): ?>
            <a href="<?php echo JRoute::_('index.php?view=report&id='.$row->id.'&catid='.$row->catid.'&tmpl=component'); ?>" class="modal<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_REPORT_IMAGE_TIPTEXT', 'COM_JOOMGALLERY_COMMON_REPORT_IMAGE_TIPCAPTION'); ?>" rel="{handler:'iframe'}"><!--, size:{x:200,y:100}-->
              <?php echo JHTML::_('joomgallery.icon', 'exclamation.png', 'COM_JOOMGALLERY_COMMON_REPORT_IMAGE_TIPCAPTION'); ?></a>
      <?php endif;
            if($this->params->get('show_report_icon') == -1): ?>
            <span<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_REPORT_IMAGE_NOT_ALLOWED_TIPTEXT', 'COM_JOOMGALLERY_COMMON_REPORT_IMAGE_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'exclamation_gr.png', 'COM_JOOMGALLERY_COMMON_REPORT_IMAGE_TIPCAPTION'); ?>
            </span>
<?php       endif;
            if($row->show_edit_icon): ?>
            <a href="<?php echo JRoute::_('index.php?view=edit&id='.$row->id.$this->redirect); ?>"<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_EDIT_IMAGE_TIPTEXT', 'COM_JOOMGALLERY_COMMON_EDIT_IMAGE_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'edit.png', 'COM_JOOMGALLERY_COMMON_EDIT_IMAGE_TIPCAPTION'); ?></a>
<?php       endif;
            if($row->show_delete_icon): ?>
            <a href="javascript:if(confirm('<?php echo JText::_('COM_JOOMGALLERY_COMMON_ALERT_SURE_DELETE_SELECTED_ITEM', true); ?>')){ location.href='<?php echo JRoute::_('index.php?task=image.delete&id='.$row->id.$this->redirect, false);?>';}"<?php echo JHTML::_('joomgallery.tip', 'COM_JOOMGALLERY_COMMON_DELETE_IMAGE_TIPTEXT', 'COM_JOOMGALLERY_COMMON_DELETE_IMAGE_TIPCAPTION', true); ?>>
              <?php echo JHTML::_('joomgallery.icon', 'edit_trash.png', 'COM_JOOMGALLERY_COMMON_DELETE_IMAGE_TIPCAPTION'); ?></a>
<?php       endif; ?>
            <?php echo $row->event->icons; ?>
          </li>
<?php     endif; ?>
        </ul>
      </div>
<?php endif; ?>
    </div>
<?php     $index++;
        endfor;  ?>	
    
        
   
        
        
    <div class="jg_clearboth"></div>
  </div>
<?php endfor; ?>
        <div style="display:none;">
        <?php
		//for every image before the start of the output create a hidden img to add to boxplus BEFORE the regular output of images
		for($i=$finish;$i<count($all_images);$i++){;
			?>
            <a rel="boxplus-gallery0" id="<?php echo $all_images[$i]->id; ?>" title="<?php echo $all_images[$i]->imgtitle; ?>" href="<?php echo $holder . $all_images[$i]->imgfilename;?>" ><img src="<?php echo $holder . $all_images[$i]->imgfilename;?>" alt="<?php echo $all_images[$i]->imgtitle;?>" /> </a>
		<?php	
			
		} ?></div>	    







<?php
      if($this->params->get('show_all_in_popup')):
        echo $this->popup['after'];
      endif;
      if($this->_config->get('jg_showcathead')): ?>
  <div class="sectiontableheader">
    &nbsp;
  </div>
<?php endif;
      if($this->params->get('show_pagination_img_bottom')):
        echo $this->loadTemplate('imgpagination');
      endif;