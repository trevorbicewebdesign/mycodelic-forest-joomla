<?php

// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.model');
class harmonizeModelDefault extends JModelLegacy {
	var $_query;
	var $_data;
	var $_total			= null;
	var $_pagination	= null;
	/**
	 * Constructor that retrieves the ID from the request
	 *
	 * @access	public
	 * @return	void
	 */
	function _buildQuery() {
		$mainframe 	=& JFactory::getApplication();
		$db 		=& JFactory::getDBO();
		$filter				= JRequest::getVar('invoice_filter');
		
		$sortColumn			= $mainframe->getUserStateFromRequest('com_harmonize.default.sortColumn','filter_order','q.id');
		$sortOrder			= $mainframe->getUserStateFromRequest('com_harmonize.default.sortOrder','filter_order_Dir','desc');
		
		$mainframe->setUserState('com_harmonize.default.sortColumn',$sortColumn);
		$mainframe->setUserState('com_harmonize.default.sortOrder',$sortOrder);

		// echo "-->".$client_id;
		//$where = "";
		//$where.= 'q.client_id = '.$client_id;
		$this->_query  = "SELECT 
								 q.* 
						";
		$this->_query .= "FROM #__import_processes AS q ";
		$this->_query .= "ORDER BY q.id $sortOrder";
		// echo "-->".$this->_query."<br/>";		
	}
	public function getTable($type = 'quotes', $prefix = 'Table', $config = array())	{
		return JTable::getInstance($type, $prefix, $config);
	}
	function gettemplatelayout($id) {
			$path=JPATH_SITE.DS."administrator".DS."components".DS."com_harmonize".DS."controllers".DS.'default.php';
			require_once($path);
			return $template=ccInvoicesControllerInvoices::gettemplatelayout($id);
	}
	function __construct() {
		parent::__construct();
		$this->_buildQuery();
		$mainframe =& JFactory::getApplication();
		// Get pagination request variables
		$limit = $mainframe->getUserStateFromRequest(		'com_import.default.limit', 'limit', $mainframe->getCfg('list_limit'), 'int');
		$limitstart = $mainframe->getUserStateFromRequest(	'com_import.default.limitstart', 'limitstart', 0, 'int');
		$status= $mainframe->getUserStateFromRequest(		'com_import.default.status1', 'status1', 0, 'int');
		// In case limit has been changed, adjust it
		$limitstart = ($limit != 0 ? (floor($limitstart / $limit) * $limit) : 0);
		$this->setState('com_import.default.status1', $status);
		$this->setState('com_import.default.limit', $limit);
		$this->setState('com_import.default.limitstart', $limitstart);
	}
	function getData() {
		if (empty($this->_data))
			$this->_data=$this->_getList($this->_query,$this->getState('com_import.default.limitstart'), $this->getState('com_import.default.limit'));
		return $this->_data;
	}
	function getTotal()
	{
		if (empty($this->_total))
			$this->_total = $this->_getListCount($this->_query);
		return $this->_total;
	}
	function getPagination() 	{
		if (empty($this->_pagination))  {
			jimport('joomla.html.pagination');
			$this->_pagination = new JPagination($this->getTotal(), $this->getState('com_import.default.limitstart'), $this->getState('com_import.default.limit'));
		}
		return $this->_pagination;
	}
	function getQuiz() {
		$cid = JRequest::getVar('cid');
		if(is_array($cid)) $cid = intval($cid[0]);
		$row	= & JTable::getInstance('processes','Table');

		$row->load($cid);
		return $row;
	}
	function getSteps() {
		$cid = JRequest::getVar('cid');
		if(is_array($cid)) $cid = intval($cid[0]);
		$db =& JFactory::getDBO();
		$query  = "SELECT steps.* FROM #__import_steps AS steps ";
		$query .= "WHERE steps.process_id = '".$cid."' ";
		$query .= "ORDER BY steps.`order` DESC ";
		echo $query;
		$db->setQuery( $query );
		$db->query();
		$rows = $db->loadObjectList();
		
		return $rows;
	}
    function setId($id)	{
		// Set id and wipe data
		$this->_id		= $id;
		$this->_data	= null;
	}

    function store() {
		$db			= & JFactory::getDBO();
        	$id			= JRequest::getInt( 'id');
		
		
				
		$row 		= & $this->getTable();
		
		
		// Bind the form fields
		$post	= JRequest::get( 'post',JREQUEST_ALLOWRAW );

		$i = 0;
		foreach($post['step']['id'] as $key=>$step) {
				$steps[$i]->id							= $key;
				$steps[$i]->select_table					= $post['step']['select_table'][$key][0];
				$steps[$i]->insert_table					= $post['step']['insert_table'][$key][0];
				$steps[$i]->insert_table_values			= serialize($post['step']['insert_table_values'][$key]);
				$steps[$i]->type						= $post['step']['type'][$key][0];
				$steps[$i]->color						= $post['step']['color'][$key][0];
				$steps[$i]->selection					= $post['step']['selection'][$key][0];
				if( empty($steps[$i]->color) ) {
					$steps[$i]->color =  sprintf("%02X%02X%02X", mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
				}
				
				$steps[$i]->join_tables['join']			= $post['step']['join'][$key];
				$steps[$i]->join_tables['join_on']			= $post['step']['join_on'][$key];
				$steps[$i]->join_tables['join_on_primary']	= $post['step']['join_on_primary'][$key];
				
				$steps[$i]->join_tables = serialize($steps[$i]->join_tables);
				
				// print_r($steps[$i]);
				// echo "<br/>";
				
				$steps[$i]->sql						= $post['step']['sql'][$key];
				$steps[$i]->code						= $post['step']['code'][$key];
				$i++;
		}
		
		
		
		foreach($steps as $key=>$step) {
			//print_r($creds);
			$query  = "REPLACE INTO #__import_steps ( ";
			foreach($step as $index=>$val) {
				$query .= "`".$index."`, ";
			}
			$query = substr($query, 0, -2);
			$query .= " ) ";
			$query .= "VALUES ( ";
			foreach($step as $index=>$val) {
				$query .= "'".$val."', ";
			}
			$query = substr($query, 0, -2);
			$query .= " ) ";
			$db->setQuery( $query );
			$result = $db->loadResult();
			//echo $steps[$key]->insert_table_values;
			//echo $query;
			
			//print_r($steps);
			
		
		}
		//die();
		//print_r($query);
		//die();
		/*
		// Make sure data is valid
		if (!$row->check()) {
			$this->setError($row->getError());
			return 0;
		}
		
		// Store it
		if (!$row->store()) {
			$this->setError($row->getError());
			return 0;
		}
		*/
		return $row->id;
	}
	function delete() {
		$cids = JRequest::getVar( 'cid', array(0), 'post', 'array' );
		$row =& $this->getTable();
		JTable::addIncludePath(JPATH_ADMINISTRATOR.DS.'components'.DS.'com_ccinvoices'.DS.'tables');
		$contctrow =& JTable::getInstance('quotes', 'Table');
		if (count( $cids ))
		{
			foreach($cids as $cid)
			{
				if (!$row->delete( $cid ))
				{
					return false;
				}
			}
		}
		return true;
	}
	function contactinvoice($clientid) {
      	$db 	=& JFactory::getDBO();
		$query	= "SELECT * FROM #__ccinvoices_contacts WHERE  id='$clientid'";
        $db->setQuery($query);
        $contactinvoice = $db->loadObject();
        return $contactinvoice;
	}
	function invoicenumbercheck() {
   		$db 	=& JFactory::getDBO();
		$query	= "SELECT max(number) FROM #__ccinvoices_invoices where reset_inv = ''";
        $db->setQuery($query);
        $invoicenumbercheck = $db->loadResult();
        return $invoicenumbercheck;
	}
	function getLastItemId() {
		$db 	=& JFactory::getDBO();
		$query	= "SELECT item_id FROM #__ccinvoices_items order by id desc";
        $db->setQuery($query);
        $row = $db->loadObject();
        if(count($row))
        	return $row->item_id;
	}
}
?>