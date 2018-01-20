<?php
/**
 * @package		Joomla.Administrator
 * @subpackage	com_users
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Load the tooltip behavior.
JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('behavior.modal');

/*
$canDo = UsersHelper::getActions();
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
$loggeduser = JFactory::getUser();
*/


?>

<form action="<?php echo JRoute::_('index.php?option=com_campinventory&view=inventory');?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	<h3>Total Weight: <?php echo $this->helper->getTotalWeight(); ?></h3>
	<?php echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>
	
	<table class="adminlist table table-striped" cellpadding="5">
		<thead>
			<tr>
				<th width="1%" align="left">
					<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Short Description', 		'i.short_desc', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Category', 			'i.category', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Quantity', 			'i.quantity', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Condition', 			'i.condition', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Length', 				'i.length', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Width', 				'i.width', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Height', 				'i.height', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Weight', 				'i.weight', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Total Weight', 			'i.weight', 		$listDirn, $listOrder); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$j = 1;
			$total = 0;
			foreach( $this->items as $key=>$item) : 
			
			
			$link = JRoute::_('index.php?option=com_campinventory&task=item.edit&id=' . (int) $item->id);
			
			$total += ($item->weight*$item->quantity);
			?>
				<tr>
					<td><?php echo JHtml::_('grid.id', $i, $j); ?></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->short_desc; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo $item->category_title; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo $item->quantity; ?></a></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->condition_name; ?></a></td>
					<td><?php echo $item->length; ?></td>
					<td><?php echo $item->width; ?></td>
					<td><?php echo $item->height; ?></td>
					<td><?php echo $item->weight; ?></td>
					<td><?php echo $item->weight*$item->quantity; ?></td>
				</tr>			
			<?php $j++;endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $total; ?><br/>
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
	</table>

	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
	</div>
</form>
