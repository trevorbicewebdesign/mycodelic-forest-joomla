<?php
defined('_JEXEC') or die('Restricted access');

$editor 	= JFactory::getEditor();
?>
<script>
jQuery(document).ready(function($) {
	$('.adminlist tr.steps a').each(function(index, el){
		$(el).click(function() {
			$(this).parents('tr').data('id');
			return false;
		});
	});
});
</script>
<?php jimport( 'joomla.html.editor' ); 	?>

<div id="quiz">
	<form action="index.php" method="post" name="adminForm" >
		<table width="48%" style="float:left;">
			<tr>
				<td><input id="batch_size" value="<?php echo $this->batch_size; ?>"/></td>
			</tr>
			<tr>
				<td><textarea style="width:100%;height:100px;"></textarea></td>
			<tr>
		</table>
		<table width="100%" style="float:left;">
			<tr>
				<td><h2>Selection (<?php echo count($this->selected_rows); ?> rows selected)</h2></td>
			</tr>
			<tr>
				<td>
				<?php 
				echo preg_replace("#\n#", "<br/>",  $this->selection_query);
				?>
				</td>
			<tr>
			<tr>
				<td>
				<table border="0" cellspacing="0" cellpadding="0" width="100%"><tr>
				<?php 
				foreach($this->selected_rows[0] as $field=>$val) {
				echo "<td>".$val."</td>";
				}
				?>
				</tr></table>
				</td>
			<tr>
			<tr>
				<td>
				<h2>Insert Steps<br/>
				(<?php echo  $this->time_per_row; ?> miliseconds)<br/>
				(Estimated Total Time <?php echo  $this->est_time; ?> seconds)
				</td>
			</tr>
			<tr>
				<td>
				<?php 
				foreach($this->insert_query as $index=>$query) {
					echo "<strong>ID #".$index.")</strong> ".preg_replace("#\n#", "<br/>",  $query);
				}
				
				?>
				</td>
			<tr>
		</table>
		<input type="hidden" name="option" 						value="com_import" />
		<input type="hidden" name="controller" 						value="default" />
		<input type="hidden" name="task" 							value="" />
		<input type="hidden" name="boxchecked" 						value="0" />
		<input type="hidden" name="id" 							value="<?php $cid = JRequest::getVar('cid');if(is_array($cid)) $cid = intval($cid[0]);echo $cid; ?>" 	id="id" />
		<input type="hidden" name="filter_order" 					value="<?php echo $this->lists['order']; ?>" />
		<input type="hidden" name="filter_order_Dir" 				value="<?php echo $this->lists['order_Dir']; ?>" />
		<?php echo JHTML::_( 'form.token' ); ?>
	</form>
</div>
