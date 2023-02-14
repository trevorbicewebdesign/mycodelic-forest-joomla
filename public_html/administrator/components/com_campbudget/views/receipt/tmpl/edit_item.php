<?php
defined('_JEXEC') or die;
$row = $this->row;
?>
<tr>
	<td><i class="icon-move"></i><input type="hidden" class="input-class" name="id" value="<?php echo $row->id; ?>"/></td>
	<td><input type="text" class="input-class input-name" name="name" value="<?php echo $row->name; ?>"/></td>
	<td><input type="text" class="input-class input-quantity" name="quantity" value="<?php echo $row->quantity; ?>" /></td>
	<td><input type="text" class="input-class input-amount" name="amount" value="<?php echo $row->amount; ?>" /></td>
	<td><input type="text" class="input-class input-tax" name="tax" value="<?php echo $row->tax; ?>" /></td>
	<td><input type="text" class="input-class input-subtotal" name="subtotal" value="<?php echo $row->subtotal; ?>" /></td>
	<td><input type="text" class="input-class input-type rate formatCurrency" name="type" value="<?php echo $row->type; ?>"/></td>
	<td><a href="javascript:void(0);" class="moveUp"><i class="icon-chevron-up"></i></a></td>
	<td><a href="javascript:void(0);" class="moveDown"><i class="icon-chevron-down"></i></a></td>
	<td><a href="javascript:void(0);" class="removeItem"><i class="fa fa-times"></i></a></td>
</tr>