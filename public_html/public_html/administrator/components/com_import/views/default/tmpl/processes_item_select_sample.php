<?php
defined('_JEXEC') or die('Restricted access');
$db =& JFactory::getDBO();

$row 		= $this->result;
$selection 	= $this->selection;
?>

<div class="resultsBox" style="width:100%;display:block;position:relative;float:left;">
<table border="0" cellspacing="0" cellpadding="0" style="table-layout: fixed; width: 100%">


		<tr>
			<td>
			<div id="div2" style="border: thin solid black; width: 100%; height: 400px; overflow: auto;">
			<div style="width:3000px;">
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
					<?php
					foreach( $selection[0] as $fieldname=>$val) {
						// $op_val[$fieldname] = $val;
						if(!empty($fieldname)) {
							echo "<td align='left' style='overflow:hidden;'>";
							echo $fieldname; 
							echo "</td>";
						}
					} 
					?>
					</tr>
					<?php foreach($selection as $index => $val) {
						echo '	<tr>';
						// $cast_val = $val;
						//@print_r( (array)$val );
						foreach( $val as $index2=>$val2) {
							echo "<td align='left'>";
							echo (string)$val2; 
							echo "</td>";
						} 
						echo '	</tr>';
						
					} 
					?>
					</td>
				</tr>
			</table>
			</div>
			</div>
		</td>
	</tr>
</table></div>