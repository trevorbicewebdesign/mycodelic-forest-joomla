<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_banners
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.formvalidator');
JHtml::_('behavior.keepalive');
JHtml::_('formbehavior.chosen', 'select');



?>
<style>
.input-class {
	width: 100%;
}
</style>
<form action="<?php echo JRoute::_('index.php?option=com_campbudget&view=receipt&layout=edit&id=' . (int) $this->receipt->id); ?>" method="post" name="adminForm" id="receipt-form" class="form-validate">
	<div class="form-horizontal">
		<?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'details')); ?>

		<?php echo JHtml::_('bootstrap.addTab', 'myTab', 'details', 'Details', true); ?>

		<?php foreach ($this->form->getFieldset() as $field): ?>
			<div class="control-group">
				<div class="control-label"><?php echo JText::_($field->label); ?></div>
				<div class="controls"><?php echo $field->input; ?></div>
			</div>
		<?php endforeach;?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th width="1%"></th>
					<th>Name</th>
					<th width="5%">Quantity</th>
					<th width="1%">Amount</th>
					<th width="5%">Tax</th>
					<th width="1%">Subtotal</th>
					<th width="10%">Type</th>
					<th width="1%"></th>
					<th width="1%"></th>
					<th width="1%"></th>
				</tr>
			</thead>
			<tbody id="invoice-items">
				<?php 
		
				if( count($this->rows)>0) :
				foreach($this->rows as $index=>$row) : 
					unset($this->row);
					$this->row = $row;
					echo $this->loadTemplate('item');
					$this->count++;
				endforeach;
				else:
					echo $this->loadTemplate('item');
				endif;
									
				?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="2"><a href="javascript:void(0);" class="addRow">Add Row</a></td>
					<td colspan="3"><a href="javascript:void(0);" class="calculateTotal" ><i class="fa fa-calculator fa-2x"></i></a><?php echo $this->form->getControlGroup('total'); ?></td>
					<td colspan="3"></td>
				</tr>
			</tfoot>
		</table>
		<?php echo JHtml::_('bootstrap.endTab'); ?>

		<?php echo JHtml::_('bootstrap.endTabSet'); ?>
	</div>

	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
</form>

<script>
Joomla.submitbutton = function(task)
{
	if (task == "receipt.cancel" || document.formvalidator.isValid(document.getElementById("receipt-form")))
	{
		Joomla.submitform(task, document.getElementById("receipt-form"));
	}
};	
jQuery( document ).ready(function( $ ) {
	// Code that uses jQuery's $ can follow here.
	$('#invoice-items').rowManipulator({});
});
</script>
