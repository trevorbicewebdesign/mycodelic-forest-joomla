<?php
defined('_JEXEC') or die('Restricted access');
$db =& JFactory::getDBO();

$row 		= $this->result;
$join_tables 	= unserialize($row->join_tables);
?>
<strong>SELECT </strong><br/>
<textarea type="text" name="step[selection][<?php echo $row->id; ?>][]" 	style="width:98%;height:100px;overflow:auto;"><?php echo $row->selection; ?></textarea>
<strong>FROM</strong>
<select class="inputbox" name="step[select_table][<?php echo $row->id; ?>][]">
	<option value="">--Select A Database Table--</option>
	<?php foreach($this->databaseTables as $key=>$table) :?>
	<option <?php if($row->select_table==$table): ?>selected<?php endif; ?>><?php echo $table; ?></option>
	<?php endforeach; ?>
</select>
<br/>
<?php
		$i = 0;
		while($i<3) {
		?>
<strong>JOIN:</strong>
<select class="inputbox" name="step[join][<?php echo $row->id; ?>][]">
	<option value="">--Select A Database Table--</option>
	<?php foreach($this->databaseTables as $key=>$table) :?>
	<option <?php if($join_tables['join'][$i]==$table): ?>selected<?php endif; ?>><?php echo $table; ?></option>
	<?php endforeach; ?>
</select>
<strong>ON</strong>
<select class="inputbox" name="step[join_on][<?php echo $row->id; ?>][]">
	<option value="">--Select A Field --</option>
	<?php
			if( !empty($join_tables['join'][$i]) ) {
			$query  = "SHOW COLUMNS FROM ".$join_tables['join'][$i]." FROM db96690_tjsjoom3 ";
			$db->setQuery( $query );
			$database_tables = $db->loadObjectList();
			foreach($database_tables as $key=>$val) {
				if($join_tables['join_on'][$i] == $val->Field) {
					$selected = " selected ";
				}
				else {
					$selected = "";	
				}
				echo "<option value='".$val->Field."'' ".$selected.">".$join_tables['join'][$i].".".$val->Field."</option>";	
			}
			}
			?>
</select>
<strong>=</strong>
<select class="inputbox" name="step[join_on_primary][<?php echo $row->id; ?>][]">
	<option value="">--Select A Field --</option>
	<?php
			if( !empty($row->select_table) ) {
			$query  = "SHOW COLUMNS FROM ".$row->select_table." FROM db96690_tjsjoom3 ";
			$db->setQuery( $query );
			$database_tables = $db->loadObjectList();
			foreach($database_tables as $key=>$val) {
				if($join_tables['join_on_primary'][$i] == $val->Field) {
					$selected = " selected ";
				}
				else {
					$selected = "";	
				}
				echo "<option value='".$val->Field."'' ".$selected.">".$row->select_table.".".$val->Field."</option>";	
			}
			}
			?>
</select>
<br/>
<?php
		$i++;
		};
		?>
		<?php
		if( !empty( $row->select_table ) ) {
		
		$query  = "SELECT ";
		if(!empty($row->selection)) {
			$query .= $row->selection." ";
		}
		else {
			$query .= "  ".$row->select_table.".*";
			$i=0;
			while($i<3) {
				
				if( !empty($join_tables['join'][$i]) && !empty($join_tables['join_on'][$i]) && !empty($join_tables['join_on_primary'][$i]) ) {
					$query .= ", ".$join_tables['join'][$i].".*
";				
				}
				$i++;
			}
		}
		$query .= "FROM ".$row->select_table." AS ".$row->select_table." ";   
		$i = 0;
		while($i<3) {
			if( !empty($join_tables['join'][$i]) && !empty($join_tables['join_on'][$i]) && !empty($join_tables['join_on_primary'][$i]) ) {
				$query .= "
LEFT JOIN ".$join_tables['join'][$i]." AS ".$join_tables['join'][$i]." ON ".$join_tables['join'][$i].".".$join_tables['join_on'][$i]." = ".$row->select_table.".".$join_tables['join_on_primary'][$i]." ";  
			}
			$i++;
		}
		$query .= "LIMIT 5 ";
		echo $query."<br/>"; 
		
		$db->setQuery( $query );
		$query = preg_replace("#\r#", "<br/>", $query);
		$query = preg_replace("# #", "&nbsp;", $query);
		$query = preg_replace("#\t#", "&emsp;", $query);
		$db->query();
		
		$selection 		= $db->loadObjectList();
		$this->selection 	= $selection;
		$count 			= count( (array)$selection[0] );
		
		echo $this->loadTemplate('item_select_sample');
		
		
	   }
	   
	   ?>