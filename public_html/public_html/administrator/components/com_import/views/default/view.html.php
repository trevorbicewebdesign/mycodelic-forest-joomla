<?php

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');
 
class importViewDefault extends JViewLegacy{
	protected $form;
	protected $item;
	protected $state;

	/**
	 * Display the view
	 */
	public function display($tpl = null)	{
		$db 			=& JFactory::getDBO();
		$model 		=& $this->getModel();
		$mainframe 	=& JFactory::getApplication();
		$doc 		=& JFactory::getDocument();
		$currentDb = $mainframe->getCfg('db');
		
		$doc->addStyleSheet(JURI::base() . "components/com_import/assets/css/admin.css");
		
		// Initialiase variables.
		$this->form		= $this->get('Form');
		$this->item		= $this->get('Item');
		$this->state	= $this->get('State');
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		JToolBarHelper::title(   'Import & Batch Helper', 'ccinvoices.png' );
		//JToolBarHelper::title(   JText::_( 'CC_Invoice' ), 'invoice' );
		if($this->_layout == 'processes' ) {
			// Set up Menu Items
			JToolbarHelper::apply();
			JToolbarHelper::save();
			JToolBarHelper::custom( 'save2new', 'save-new.png', 'new_f2.png', 'Save & New', false,  false );
			if($invoiceRow->id){
				JToolBarHelper::custom( 'save2copy', 'save-copy.png', 'copy_f2.png', 'Save as Copy', false,  false );
			}
			JToolbarHelper::cancel();
			// End Menu Items
			
			require_once JPATH_COMPONENT.'/helpers/helper.php';
			$importHelper = new importHelper;
			
			$stepTypes = $importHelper->showStepTypes();
			
			$this->assignRef('stepTypes', 		$stepTypes);
			
			
			
			
			$query  = "SHOW TABLES FROM `".$currentDb."` ";
			$db->setQuery( $query );
			$database_tables = $db->loadObjectList();
			foreach($database_tables as $key=>$val) {
				$fieldName = "Tables_in_".$currentDb;
				$databaseTables[$key] = $val->$fieldName;

			}
			
			$this->assignRef('databaseTables', 		$databaseTables);
			
			$doc->addScript("//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js");
			
			$process				= $this->get('process');
			$steps				= $this->get('steps');
			
			$this->assignRef('process', 		$process);
			$this->assignRef('steps', 		$steps);
			
		}
		else if( $this->_layout == 'run' ) {
			$process_id = JRequest::getVar( 'id');
			
			require_once JPATH_COMPONENT.'/helpers/mysql.php';
			$mysqlHelper = new databaseImporHelperMysql;
			
			$query  = "SELECT * FROM #__import_steps ";
			$query .= "WHERE 	process_id = 	'".$process_id."' ";
			$query .= "AND 	type = 		'SELECT' ";
			$db->setQuery( $query );
			$select_steps = $db->loadObjectList();
			$select_steps = $select_steps[0];
			
			$query  = "SELECT * FROM #__import_steps ";
			$query .= "WHERE 	process_id = 	'".$process_id."' ";
			$query .= "AND 	type = 		'INSERT' ";
			$query .= "ORDER BY id ASC ";
			echo $query."<br/>";
			$db->setQuery( $query );
			$insert_steps = $db->loadObjectList();
			
			$rows					= $this->get('data');
			$pagination				= $this->get('pagination');
			
			$selection_query			= $mysqlHelper->buildSelectionQuery($select_steps->select_table, $select_steps->selection, $select_steps->join_tables);
			$db->setQuery( $selection_query );
			$selected_rows = $db->loadObjectList();
			
			foreach( $insert_steps as $key=>$step ) {
				$insert_query[$step->id]		= $mysqlHelper->buildInsertQuery($step->insert_table, $step->insert_table_values);
				$test_insert_query[$step->id] = $mysqlHelper->buildInsertQuery($step->insert_table."_test", $step->insert_table_values);
				
			}
			foreach($insert_steps as $key=>$step) {
				$create_query  = "CREATE TABLE IF NOT EXISTS ".$step->insert_table."_test LIKE ".$step->insert_table." ";
				$db->setQuery( $create_query );
			}
			
			$i = 0;
			$start_time = microtime(true);
			foreach($selected_rows as $index=>$row) {
				
				unset($insertid);
				foreach($test_insert_query as $key=>$queue) {
					$string_que = $queue;
					
					
					foreach($selected_rows[$index]  as $op_vals=>$value) {
						$find = "{".$op_vals."}";
						$replace = addslashes($value);
						$string_que = str_replace($find, $replace, $string_que);
					}
					foreach($insertid  as $op_vals=>$value) {
						$find = "{".$op_vals."}";
						$replace = addslashes($value);
						$string_que = str_replace($find, $replace, $string_que);
					}
					$db->setQuery( $string_que );
					$result = $db->loadResult();
					$string_que."<br/>
";
					$insertid["element".$key.".insertid"] = $db->insertid();

				}
				
				if($i>100) {
					break;	
				}
				$i++;
			}
			$end_time = microtime(true);
			
			foreach($insert_steps as $key=>$step) {
				$delete_query  = "DROP TABLE IF EXISTS ".$step->insert_table."_test ";
				$db->setQuery( $delete_query );
			}
			
			$time_per_row 	= ( ($end_time - $start_time) / $i);
			$est_time		= ($time_per_row * count($selected_rows)/1000);
			
			$this->assignRef('start_time', 		$start_time);
			$this->assignRef('end_time', 			$end_time);
			$this->assignRef('time_per_row', 		$time_per_row);
			$this->assignRef('est_time', 			$est_time);
			
			$this->assignRef('insert_query', 		$insert_query);
			$this->assignRef('selection_query', 	$selection_query);
			$this->assignRef('selected_rows', 		$selected_rows);
			$this->assignRef('select_steps', 		$select_steps);
			$this->assignRef('insert_steps', 		$insert_steps);
			
			
			
			$this->assignRef('pagination', 		$pagination);
			$this->assignRef('rows', 			$rows);
		}
		else {
			
			$rows					= $this->get('data');
			$this->assignRef('rows', 			$rows);
		}
		$pagination				= $this->get('pagination');
		$this->assignRef('pagination', 		$pagination);

		parent::display($tpl);
	}
}
