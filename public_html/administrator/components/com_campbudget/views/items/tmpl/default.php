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
$budget_total = 0;
foreach($this->items as $key=>$item) {
	$budget_total += ($item->estimated_cost * $item->quantity);
}
$estimated_campers 		= 20;
$confirmed_campers 		= 9;
$camp_dues 			= number_format($budget_total/$estimated_campers, 2);
$confirmed_camp_dues 	= number_format($budget_total/$confirmed_campers, 2);

$jinput = JFactory::getApplication()->input;
$budget     = $jinput->getInt('budget');
?>
<form action="<?php echo JRoute::_('index.php?option=com_campbudget&view=items&budget='.$budget);?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	
	<div class="span6">
	<h2><?php echo $this->budget['name']; ?></h2>
	<p><?php echo $this->budget['short_desc']; ?></p>
	</div>
	<div class="span6" style="text-align:right;">
			<h2>Budget Total: <?php echo $budget_total; ?></h1>
			<h5>Estimated Campers: <?php echo $estimated_campers; ?></h2>
			<h5>Estimated Camp Dues: <?php echo $camp_dues; ?></h2>
			<h5>Confirmed Campers: <?php echo $confirmed_campers; ?></h2>
			<h2>Confirmed Camp Dues: <?php echo $confirmed_camp_dues; ?></h2>
		</div>
	<?php
	// Search tools bar
	// echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this));
	?>
	<div class="form-horizontal">
	<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>
	<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', 'Details', true); ?>
		<div class="span12">
	<?php echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>
	<table class="adminlist table table-striped" cellpadding="5">
		<thead>
			<tr>
				<th width="1%" align="left">
					<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Name', 				'i.name', 			$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Category', 			'i.catid', 			$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Estimated Cost', 		'i.estimated_cost', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Quantity', 				'i.quantity', 			$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Link', 				'i.link', 			$listDirn, $listOrder); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$j = 1;
			$total = 0;
			$subtotal = 0;
			foreach( $this->items as $key=>$item) : 
			
			
			$link = JRoute::_('index.php?option=com_campbudget&task=item.edit&id=' . (int) $item->id);
			
			$total += ($item->weight*$item->quantity);
			
			if($item->core) {
			?>
				<tr>
					<td><?php echo JHtml::_('grid.id', $i, $j); ?></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->name; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo $item->category_title; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo ($item->estimated_cost * $item->quantity);
					$subtotal = $subtotal + ($item->estimated_cost * $item->quantity); ?></a></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->quantity; ?></a></td>	
					<td><a href="<?php echo $item->link; ?>">Product Url</a></td>
				</tr>			
			<?php $j++;
			}
			endforeach; ?>
			
			
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
	<h2><?php echo $subtotal;?></h2>
	</div>
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'items', 'Items', true); ?>
	
	<div class="span12">
	<?php echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>
	<table class="adminlist table table-striped" cellpadding="5">
		<thead>
			<tr>
				<th width="1%" align="left">
					<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Name', 				'i.name', 			$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Category', 			'i.catid', 			$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Estimated Cost', 		'i.estimated_cost', 	$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Quantity', 				'i.quantity', 			$listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Link', 				'i.link', 			$listDirn, $listOrder); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$j = 1;
			$total = 0;
			$subtotal = 0;
			foreach( $this->items as $key=>$item) : 
			
			
			$link = JRoute::_('index.php?option=com_campbudget&task=item.edit&id=' . (int) $item->id);
			
			$total += ($item->weight*$item->quantity);
			
			
			?>
				<tr>
					<td><?php echo JHtml::_('grid.id', $i, $j); ?></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->name; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo $item->category_title; ?></a></td>	
					<td><a href="<?php echo $link; ?>"><?php echo ($item->estimated_cost * $item->quantity);
					$subtotal = $subtotal + ($item->estimated_cost * $item->quantity); ?></a></td>
					<td><a href="<?php echo $link; ?>"><?php echo $item->quantity; ?></a></td>	
					<td><a href="<?php echo $item->link; ?>">Product Url</a></td>
				</tr>			
			<?php $j++;
					
			endforeach; ?>
			
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
	<h2><?php echo $subtotal;?></h2>
	</div>
	
	<?php echo JHtml::_('bootstrap.endTab'); ?>
	<?php echo JHtml::_('bootstrap.endTabSet'); ?>
	<div>
	</div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
	</div>
</form>
