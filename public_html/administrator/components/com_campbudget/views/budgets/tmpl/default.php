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

require_once(JPATH_COMPONENT_ADMINISTRATOR . '/helpers/campbudget.php');
$this->helper = new campbudgetHelper;
$this->helper->getCategories();
?>

<form action="<?php echo JRoute::_('index.php?option=com_campbudget&view=budgets');?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	<table class="adminlist  table table-striped">
		<thead>
			<tr>
				<th width="1%" align="left">
					<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Short Description', 		'i.short_desc', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Year', 				'i.quantity', 		$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Condition', 			'i.condition', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Budget Total', 			'i.condition', 	$listDirn, $listOrder); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$j = 1;
			$total = 0;
			foreach( $this->items as $key=>$item) : 
			
			
			$link = JRoute::_('index.php?option=com_campbudget&view=items&budget=' . (int) $item->id);
			
			$total += ($item->weight*$item->quantity);
			?>
				<tr>
					<td><?php echo JHtml::_('grid.id', $i, $j); ?></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->name; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo $item->burn_year; ?></a></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->budget_total; ?></a></td>
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
