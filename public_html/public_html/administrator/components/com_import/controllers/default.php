<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
jimport( 'joomla.application.component.controller' );
class importControllerDefault extends JControllerLegacy {
    function __construct()    {
        if(JRequest::getCmd('view') == '') {
            JRequest::setVar('view', 'default');
        }
		$this->item_type = 'default';        
		parent::__construct();
    }
	function add(){
		$this->edit();
	}
	function edit()	{
		JRequest::setVar( 'view', 	'default');
		JRequest::setVar( 'layout', 	'processes'  );
		JRequest::setVar('hidemainmenu', 1);
		parent::display();
	}
	function apply()	{
		return $this->save();
	}
	function save()	{
		$post	= JRequest::get( 'post',JREQUEST_ALLOWRAW );
		$model 	= $this->getModel('default');
		
		if ($id = $model->store()) {
			$msg = JText::_( 'CC_ITEMS_SAVED_SUCC' );
		}
		else {
			$msg = JText::_( 'CC_ITEMS_SAVED_UNSUCC' );
		}
		
		if($post['task'] == 'apply') {
			$link 	= 'index.php?option=com_import&controller=default&task=edit&cid[]='. $id;
		}
		else if($post['task']=='save2new') {
			$link 	= 'index.php?option=com_import&controller=default&task=edit';
		}
		else if($post['task']=='save2copy') {
			$msg = JText::_( 'CC_CONTACT_SAVED_SUCC');
			$link 	= 'index.php?option=com_import&controller=default&task=edit&cid[]='. $id;
		}
		else {
			$link = 'index.php?option=com_import&controller=default';
		}
		$this->setRedirect($link, $msg);
	}
	function copy()	{
		// get the model
		JRequest::checkToken() or jexit( 'Invalid Token' );
		$cid	= JRequest::getVar( 'cid', null, 'post', 'array' );
		$db 	=& JFactory::getDBO();
		foreach($cid as $id) {
			$query = "SELECT * FROM #__ccinvoices_accounts WHERE id=".$id."";
			$db->setQuery( $query );
			$rows = $db->loadObject();
			$query = "INSERT INTO #__ccinvoices_accounts ( `item_id`,`item_quantity`, `item_name`, `item_description`, `item_price_excl_tax`,`item_tax_percentage`) VALUES (  ".$db->Quote($rows->item_id).",".$db->Quote($rows->item_quantity).", ".$db->Quote($rows->item_name).",".$db->Quote($rows->item_description).", ".$db->Quote($rows->item_price_excl_tax).", ".$db->Quote($rows->item_tax_percentage).")";
			$db->setQuery( $query );
			$db->query();
		}
		$msg 	= JText::_( 'CC_ITEMS_COPYED');
		$link 	= "index.php?option=com_ccinvoices&controller=accounts";
		$this->setRedirect($link, $msg);
	}
	function remove() {
		// get the model
		$model = $this->getModel('accounts');
		if($model->delete())
		{
			$msg = JText::_( 'CC_ITEMS_DELETED' );
			$this->setRedirect( 'index.php?option=com_ccinvoices&controller=accounts', $msg );
		}
		else
		{
			$msg = JText::_( 'ERROR_ITEMS_DELETED' );
			$this->setRedirect( 'index.php?option=com_ccinvoices&controller=accounts', $msg );
		}
	}
	function run(){
		JRequest::setVar( 'view', 	'default');
		JRequest::setVar( 'layout', 	'run'  );
		JRequest::setVar('hidemainmenu', 1);
		parent::display();
		
		//return;
		
		echo "RUNNING COMMANDS...";
		echo "<br/>";
		echo "GET SELECTION ";
		
		//print_r($select_steps);
		die();
		
		$post	= JRequest::get( 'post',JREQUEST_ALLOWRAW );
		$db =& JFactory::getDBO();
		
		
		
		$join_tables = unserialize($select_steps->join_tables);
		
		$query  = "SELECT ";
		if(!empty($select_steps->selection)) {
			$query .= $select_steps->selection." ";
		}
		else {
			$query .= "  ".$select_steps->select_table.".*";
			$i=0;
			while($i<3) {
				
				if( !empty($join_tables['join'][$i]) && !empty($join_tables['join_on'][$i]) && !empty($join_tables['join_on_primary'][$i]) ) {
					$query .= ", ".$join_tables['join'][$i].".*";				
				}
				$i++;
			}
		}
		$query .= "FROM ".$select_steps->select_table." AS ".$select_steps->select_table." ";   
		$i = 0;
		while($i<3) {
			if( !empty($join_tables['join'][$i]) && !empty($join_tables['join_on'][$i]) && !empty($join_tables['join_on_primary'][$i]) ) {
				$query .= "
LEFT JOIN ".$join_tables['join'][$i]." AS ".$join_tables['join'][$i]." ON ".$join_tables['join'][$i].".".$join_tables['join_on'][$i]." = ".$select_steps->select_table.".".$join_tables['join_on_primary'][$i]." ";  
			}
			$i++;
		}
		//$query .= "LIMIT 5 ";
		echo $query."<br/>";
		$db->setQuery( $query );
		$rows = $db->loadObjectList();
		
		
		
		$prepared_statement = "";
		foreach($insert_steps as $key=>$step) {	
			$insert_table_values = unserialize($step->insert_table_values);
			$query  = "SHOW TABLE STATUS FROM `db96690_tjsjoom3` LIKE '".$step->insert_table."' ;";
			$db->setQuery( $query );
			$tablestatus = $db->loadObjectList();
			$insert_steps[$key]->tablestatus 			= $tablestatus[0];
			$insert_steps[$key]->insert_table_values	= unserialize($step->insert_table_values);
			
			
				// 
			foreach($insert_table_values as $key2=>$val2) {
				$this->autoArray["element".$row->id.".".$key] = $tablestatus[0]->Auto_increment;
				if( preg_match("#{auto}#", $val2) ) {
					unset($insert_table_values[$key2]);	
				}
			}
			
			$the_item_que[$step->id] = "INSERT INTO ".$step->insert_table." ";	
			$the_item_que[$step->id] .= '(' . implode(', ', array_keys($insert_table_values)) . ') ';
			$the_item_que[$step->id] .= 'VALUES (\'' . implode('\', \'', $insert_table_values) . '\') ';
			//$prepared_statement .= "INSERT INTO ".$step->insert_table." ";	
			//$prepared_statement .= '(' . implode(', ', array_keys($insert_table_values)) . ') ';
			//$prepared_statement .= 'VALUES ("' . implode('", "', $insert_table_values) . '") ;
//';
		}
		$total = "";
		$i = 1;
		
		print_r($the_item_que);
		//echo $string_que."<br/>";
		// echo preg_replace("#\n#", "<br/>", $prepared_statement);
		$start_timestamp = microtime(true);
		$batch_size = 20000;
		foreach($rows as $index=>$row) {
			// echo $i."<br/>";
			// echo $string_que;
			unset($insertid);
			foreach($the_item_que as $key=>$queue) {
				
				
				
				$string_que = $queue;
				foreach($rows[$index]  as $op_vals=>$value) {
					$find = "{".$op_vals."}";
					$replace = addslashes($value);
					$string_que = str_replace($find, $replace, $string_que);
				}
				//if(is_array($insertid)) {
				foreach($insertid  as $op_vals=>$value) {
					$find = "{".$op_vals."}";
					$replace = addslashes($value);
					$string_que = str_replace($find, $replace, $string_que);
				}
				//}
				
				
				$db->setQuery( $string_que );
				$result = $db->loadResult();
				echo $string_que."
";
				
				$insertid["element".$key.".insertid"] = $db->insertid();
				//echo "-->".$key." ". $db->insertid()."<Br/>";
			}
			//echo "-->".$result;
			//echo "<hr/>";
			
			if($i>=$batch_size) {
				break;	
			}
			$i++;
		}
		
		
		
		$end_timestamp  = microtime(true);
		$length = $end_timestamp - $start_timestamp;
		echo "length was ".$length." miliseconds";
		echo "<br/>";
		echo "estimated execution time per item is ".($length / $batch_size)."ms <br/>";
		echo "total estimated execution time is ".((($length / $batch_size)* count($rows))/1000)."s <br/>";
		//echo "<br/>".$i."<br/>";
		//echo preg_replace("#\n#", "<br/>", $total);
		die();
		foreach($rows as $index=>$row) {
			
			
			
			// Need to convert all the steps into one step
			foreach($insert_steps as $key=>$step) {
				
				$insert_table_values = $step->insert_table_values;
				
				foreach($insert_table_values as $key=>$val) {
					if( preg_match("#{auto}#", $val) ) {
						$this->autoArray["element".$step->id.".".$key] = $step->tablestatus->Auto_increment;
						unset($insert_table_values[$key]);	
					}
				}
				
				$query  = "INSERT INTO ".$step->insert_table." ";	
				$query .= '(' . implode(', ', array_keys($insert_table_values)) . ') ';
				$query .= 'VALUES (\'' . implode('\', \'', $insert_table_values) . '\') ';
				//print_r($this->selection);
				foreach($rows[0]  as $op_vals=>$value) {
					$find = "{".$op_vals."}";
					$replace = addslashes($value);
					$query = str_replace($find, $replace, $query);
				
				}
				
				foreach($this->autoArray as $find=>$replace) {
					$query = str_replace("{".$find."}", $replace, $query);	
				}	
				echo $query.";";
				//$db->setQuery( $query );
				echo "<Br/>";
			}
		}
		
		
		die("RUNNING COMMANDS...");
	}
}
?>