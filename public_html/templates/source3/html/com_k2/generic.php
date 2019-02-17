<?php
/**
 * @version		$Id: generic.php 1492 2012-02-22 17:40:09Z joomlaworks@gmail.com $
 * @package		K2
 * @author		JoomlaWorks http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2012 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<!-- Start K2 Generic (search/date) Layout -->
<div id="k2Container" class="genericView<?php if($this->params->get('pageclass_sfx')) echo ' '.$this->params->get('pageclass_sfx'); ?>">

	<?php if($this->params->get('show_page_title')): ?>
	<!-- Page title -->
	<div class="componentheading<?php echo $this->params->get('pageclass_sfx')?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
	<?php endif; ?>

	<?php if($this->params->get('genericFeedIcon',1)): ?>
	<!-- RSS feed icon -->
	<div class="k2FeedIcon">
		<a href="<?php echo $this->feed; ?>" title="<?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?>">
			<span><?php echo JText::_('K2_SUBSCRIBE_TO_THIS_RSS_FEED'); ?></span>
		</a>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<?php if(count($this->items)): ?>
	<div class="genericItemList">
		<?php foreach($this->items as $item): ?>

		<!-- Start K2 Item Layout -->
		<div class="catItemView">

            <div class="genericItemHeader">		
				<?php if($item->params->get('genericItemTitle')): ?>
                <!-- Item title -->
                    <h2>
                    <?php if ($item->params->get('genericItemTitleLinked')): ?>
                        <a href="<?php echo $item->link; ?>">
                        <?php echo $item->title; ?>
                    </a>
                    <?php else: ?>
                    <?php echo $item->title; ?>
                    <?php endif; ?>
                    </h2>
                <?php endif; ?>
                
                <?php 
				$user 		= JFactory::getUser($item->created_by);
				$username 	= $user->get('name');
				if($item->params->get('catItemAuthor')): ?>
                <!-- Item Author -->
                <span class="catItemAuthor">
                    <?php echo K2HelperUtilities::writtenBy($item->author->profile->gender); ?> <?php echo $username; ?>
                </span>
                <br/>
                <?php endif; ?>
                
                <?php if($item->params->get('genericItemDateCreated')): ?>
                    <!-- Date created -->
                    <span class="genericItemDateCreated">
                        <?php echo JHTML::_('date', $item->created , JText::_('K2_DATE_FORMAT_LC2')); ?>
                    </span>
                <?php endif; ?>
            </div>

		  <div class="genericItemBody">
			  <?php if($item->params->get('genericItemImage') && !empty($item->imageGeneric)): ?>
			  <!-- Item Image -->
			  <div class="genericItemImageBlock">
				  <span class="genericItemImage">
				    <a href="<?php echo $item->link; ?>" title="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>">
				    	<img src="<?php echo $item->imageGeneric; ?>" alt="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>" style="width:<?php echo $item->params->get('itemImageGeneric'); ?>px; height:auto;" />
				    </a>
				  </span>
				  <div class="clr"></div>
			  </div>
			  <?php endif; ?>
			  
			  <?php if($item->params->get('genericItemIntroText')): ?>
			  <!-- Item introtext -->
			  <div class="genericItemIntroText">
			  	<?php echo $item->introtext; ?>
			  </div>
			  <?php endif; ?>

			  <div class="clr"></div>
		  </div>
		  
		  <div class="clr"></div>
		  
		  <?php if($item->params->get('genericItemExtraFields') && count($item->extra_fields)): ?>
		  <!-- Item extra fields -->  
		  <div class="genericItemExtraFields">
		  	<h4><?php echo JText::_('K2_ADDITIONAL_INFO'); ?></h4>
		  	<ul>
				<?php foreach ($item->extra_fields as $key=>$extraField): ?>
				<?php if($extraField->value): ?>
				<li class="<?php echo ($key%2) ? "odd" : "even"; ?> type<?php echo ucfirst($extraField->type); ?> group<?php echo $extraField->group; ?>">
					<span class="genericItemExtraFieldsLabel"><?php echo $extraField->name; ?></span>
					<span class="genericItemExtraFieldsValue"><?php echo $extraField->value; ?></span>		
				</li>
				<?php endif; ?>
				<?php endforeach; ?>
				</ul>
		    <div class="clr"></div>
		  </div>
		  <?php endif; ?>
		  
			<?php if($item->params->get('genericItemCategory')): ?>
            <table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="padding-right:15px;"><?php if(!empty($this->item->event->K2CommentsCounter)): ?>
                        <?php echo $this->item->event->K2CommentsCounter; ?>
                    <?php else: ?>
                        <a class="readon" href="<?php echo $this->item->link; ?>#itemCommentsAnchor">
                            Comment
                        </a>
                    <?php endif; ?></td>
                <td>
                    <a class="readon" href="<?php echo $this->item->link; ?>">
                        <?php echo JText::_('K2_READ_MORE'); ?>
                    </a>
                </td>
              </tr>
            </table>
 
			<?php endif; ?>

			<div class="clr"></div>
            <br/>
            <hr/>
            <br/>
		</div>
		<!-- End K2 Item Layout -->
		
		<?php endforeach; ?>
	</div>

	<!-- Pagination -->
	<?php if($this->pagination->getPagesLinks()): ?>
	<div class="k2Pagination">
		<?php echo $this->pagination->getPagesLinks(); ?>
		<div class="clr"></div>
		<?php echo $this->pagination->getPagesCounter(); ?>
	</div>
	<?php endif; ?>

	<?php endif; ?>
	
</div>
<!-- End K2 Generic (search/date) Layout -->
