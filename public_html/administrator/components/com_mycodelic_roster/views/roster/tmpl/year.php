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

print_r($items);
?>

<form action="<?php echo JRoute::_('index.php?option=com_campinventory&view=inventory');?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	<h1>Burning Man 2017</h1>
	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%" align="left">
					<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'First Name', 				'i.year', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Last Name', 				'i.quantity', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Playa Name', 				'i.year', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Email', 					'i.quantity', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Phone', 					'i.quantity', 		$listDirn, $listOrder); ?>
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
					<td><a href="<?php echo $link; ?>"><?php echo $item->userid; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo $item->year; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo $item->cb_playaname; ?></a></td>

				</tr>			
			<?php $j++;endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="3">
					<?php echo $total; ?><br/>
					<?php // echo $this->pagination->getListFooter(); ?>
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
