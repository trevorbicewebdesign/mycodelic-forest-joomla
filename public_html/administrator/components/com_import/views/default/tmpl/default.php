<?php
defined('_JEXEC') or die('Restricted access');

?>
<form action="index.php" method="post" name="adminForm" >
<table class="adminlist" width="100%" border="0" >
<thead>
	<tr>
		<th width="1%" align="center">
			<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
		</th>
		<th nowrap="nowrap" align="center" >
			<?php echo JHTML::_('grid.sort', 	'Process Name', 	'q.title', 		@$this->lists['order_Dir'], @$this->lists['order'] ); ?>
		</th>
        <th width="10%" align="center">
			<?php echo JHTML::_('grid.sort',  	'Vetted', 		'q.vetted', 		@$this->lists['order_Dir'], @$this->lists['order'] ); ?>
		</th>
	</tr>
</thead>
<?php
$params = array('size'=>array('x'=>100, 'y'=>100));
JHTML::_('behavior.modal', 'a.modal', $params);
$k = 0;
for ($i=0, $n=count( $this->rows ); $i < $n; $i++) {
		$this->row = &$this->rows[$i];
	
	?>
	<?php echo $this->loadTemplate('item'); ?>
	
	<?php
	$k = 1 - $k;
}
?>
<tfoot>
	<tr>
		<td colspan="3">
			<?php echo $this->pagination->getListFooter(); ?>
		</td>
	</tr>
</tfoot>
</table>
<input type="hidden" name="option" 						value="com_importer" />
<input type="hidden" name="controller" 						value="default" />
<input type="hidden" name="task" 							value="" />
<input type="hidden" name="boxchecked" 						value="0" />
<input type="hidden" name="id" 							value="0" />
<input type="hidden" name="filter_order" 					value="<?php echo $this->lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" 				value="<?php echo $this->lists['order_Dir']; ?>" />
<input type="hidden" name="process_filter" 	id="process_filter" value="" />
<?php echo JHTML::_( 'form.token' ); ?>
</form>