<?php
defined('_JEXEC') or die('Restricted access');

$db =& JFactory::getDBO();

$row 		= $this->result;
$checked 	= JHTML::_('grid.id',   $i, $row->id );

$link 		= JRoute::_( 'index.php?option=com_import&controller=steps&task=edit&cid[]='. $row->id );

$join_tables 	= unserialize($row->join_tables);
?>

<tr class="" data-id="<?php echo $row->id; ?>">
	<td align="center" style="border:4px solid #<?php echo $row->color; ?> !important;"><?php echo $checked; ?></td>
	<td align="left" style="border:4px solid #<?php echo $row->color; ?> !important;"><a href="<?php echo $link; ?>"><?php echo $row->title; ?></a><br/>
	
		<input type="hidden" 	name="step[id][<?php echo $row->id; ?>][]" 		value="<?php echo $row->id; ?>" />
		<input type="type" 		name="step[color][<?php echo $row->id; ?>][]" 	value="<?php echo $row->color; ?>" /><br/>
		
		<select class="inputbox" name="step[type][<?php echo $row->id; ?>][]">
			<option>--Select A Type--</option>
			<?php foreach($this->stepTypes as $key=>$type) :?>
			<option <?php if($row->type==$type): ?>selected<?php endif; ?>><?php echo $type; ?></option>
			<?php endforeach; ?>
		</select>
		<br/>
		<?php if($row->type == "SELECT") :?>
			 <?php echo $this->loadTemplate('item_select'); ?>
		<?php elseif($row->type == "INSERT") :?>
			 <?php echo $this->loadTemplate('item_insert'); ?>
		<?php endif; ?>
		<?php 

		?></td>
	<td align="center" style="border:4px solid #<?php echo $row->color; ?> !important;"><a href="<?php echo $link; ?>"><?php echo $row->published; ?></a></td>
</tr>
