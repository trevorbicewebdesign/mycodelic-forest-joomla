<?php
defined('_JEXEC') or die('Restricted access');
$db =& JFactory::getDBO();

$row 		= $this->result;
?>
<strong>INSERT INTO </strong>
<select class="inputbox" name="step[insert_table][<?php echo $row->id; ?>][]">
	<option>--Select A Database Table--</option>
	<?php foreach($this->databaseTables as $key=>$table) :?>
	<option <?php if($row->insert_table==$table): ?>selected<?php endif; ?>><?php echo $table; ?></option>
	<?php endforeach; ?>
</select>
<br/>
<?php 
if( !empty($row->insert_table) ) {
	
	$query  = "SHOW COLUMNS FROM ".$row->insert_table." FROM db96690_tjsjoom3 ";
	$db->setQuery( $query );
	$database_tables = $db->loadObjectList();

	$insert_table_values = unserialize($row->insert_table_values);
	foreach($database_tables as $key=>$val) :?>
		<span style="width:200px;float:left;">
		<span style="width:100%;"><?php echo $val->Field; ?></span><br/>
		<input value='<?php echo $insert_table_values[$val->Field]; ?>' name='step[insert_table_values][<?php echo $row->id; ?>][<?php echo $val->Field; ?>]' />
		</span>
	<?php endforeach;
	
	$query  = "SHOW TABLE STATUS FROM `db96690_tjsjoom3` LIKE '".$row->insert_table."' ;";
	$db->setQuery( $query );
	$tablestatus = $db->loadObjectList();
	
}
?>
<div class="clearfix"></div><br/>
<div class="sample-insert" style="width:100%;">
<?php
foreach($insert_table_values AS $key=>$val) {
	if( preg_match("#{auto}#", $val) ) {
		$this->autoArray["element".$row->id.".".$key] = $tablestatus[0]->Auto_increment;
		unset($insert_table_values[$key]);	
	}
}

$query  = "INSERT INTO ".$row->insert_table." ";	
$fields_array = 
$query .= '(' . implode(', ', array_keys($insert_table_values)) . ') ';
$query .= 'VALUES (\'' . implode('\', \'', $insert_table_values) . '\') ';
//print_r($this->selection);
foreach($this->selection[0]  as $op_vals=>$value) {
	$find = "{".$op_vals."}";
	$replace = $value;
	$query = str_replace($find, $replace, $query);
}
$find = "{auto}";
$replace = $tablestatus[0]->Auto_increment;
$query = str_replace($find, $replace, $query);

foreach($this->autoArray as $find=>$replace) {
	$query = str_replace("{".$find."}", $replace, $query);	
}		

echo $query."<br/>";

?>
</div>