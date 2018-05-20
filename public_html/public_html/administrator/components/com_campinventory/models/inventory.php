<?php
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

/**
 * Methods supporting a list of banner records.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_banners
 * @since		1.6
 */
class campinventoryModelInventory extends JModelList
{
	/**
	 * Constructor.
	 *
	 * @param	array	An optional associative array of configuration settings.
	 * @see		JController
	 * @since	1.6
	 */
	public function __construct($config = array())
	{
		if (empty($config['filter_fields'])) {
			$config['filter_fields'] = array(
				'id', 'a.id',
				'cid', 'a.cid', 'client_name',
				'name', 'a.name',
				'alias', 'a.alias',
				'state', 'a.state',
				'ordering', 'a.ordering',
				'language', 'a.language',
				'catid', 'a.catid', 'category_title',
				'checked_out', 'a.checked_out',
				'checked_out_time', 'a.checked_out_time',
				'created', 'a.created',
				'impmade', 'a.impmade',
				'imptotal', 'a.imptotal',
				'clicks', 'a.clicks',
				'publish_up', 'a.publish_up',
				'publish_down', 'a.publish_down',
				'state', 'sticky', 'a.sticky',
			);
		}

		parent::__construct($config);
	}

	/**
	 * Method to get the maximum ordering value for each category.
	 *
	 * @since	1.6
	 */
	function &getCategoryOrders()
	{
		if (!isset($this->cache['categoryorders'])) {
			$db		= $this->getDbo();
			$query	= $db->getQuery(true);
			$query->select('MAX(ordering) as '.$db->quoteName('max').', catid');
			$query->select('catid');
			$query->from('#__banners');
			$query->group('catid');
			$db->setQuery($query);
			$this->cache['categoryorders'] = $db->loadAssocList('catid', 0);
		}
		return $this->cache['categoryorders'];
	}

	/**
	 * Build an SQL query to load the list data.
	 *
	 * @return	JDatabaseQuery
	 * @since	1.6
	 */
	public function getTable($type = 'User', $prefix = 'TestmodeTable', $config = array()) {
		return JTable::getInstance($type, $prefix, $config);
	}
	function disableUser($data) {
		$db =& JFactory::getDBO();
		$query = $this->getListQuery();
		$db->setQuery( $query );
		$items = $db->loadObjectList();

		$cids 	= JRequest::getVar('cid', array(0), 'post', 'array');

		foreach($cids as $key=>$cid) {
			unset($row);
			unset($data);
			$index	= ($cid-1);
			$row 	= $this->getTable("user");
			if( $items[$index]->id > 0 ) {
				$row->load( $items[$index]->id );
				$row->id	= $items[$index]->id;
			}
			else {
				$row->load( );
			}
			$row->userid		= $items[$index]->userid; 
			$row->published	= 0; 
			if ($row->store())	{
			}
		}
	}
	function enableUser($data) {
		$db =& JFactory::getDBO();
		$query = $this->getListQuery();
		$db->setQuery( $query );
		$items = $db->loadObjectList();

		$cids 	= JRequest::getVar('cid', array(0), 'post', 'array');

		foreach($cids as $key=>$cid) {
			unset($row);
			unset($data);
			$index	= ($cid-1);
			$row 	= $this->getTable("user");
			if( $items[$index]->id > 0 ) {
				$row->load( $items[$index]->id );
				$row->id	= $items[$index]->id;
			}
			else {
				$row->load( );
			}
			$row->userid		= $items[$index]->userid; 
			$row->published	= 1; 

			if ($row->store())	{
			}
		}
	}
	public function getItemQuery() {
		$db		= $this->getDbo();
		$query	= $db->getQuery(true);

		// Select the required fields from the table.
		$query->select(
			$this->getState(
				'list.select',
				//'a.id AS id, a.name AS name, a.alias AS alias,'.
				//'a.checked_out AS checked_out,'.
				//'a.checked_out_time AS checked_out_time, a.catid AS catid,' .
				//'a.clicks AS clicks, a.metakey AS metakey, a.sticky AS sticky,'.
				//'a.impmade AS impmade, a.imptotal AS imptotal,' .
				//'a.state AS state, a.ordering AS ordering,'.
				//'a.purchase_type as purchase_type,'.
				'  u.* '
			)
		);
		$query->from($db->quoteName('#__campinventory_users').' AS u');
		
		$query->select('u.last_login ')
			->join('LEFT', '#__users AS users ON u.userid = users.id');
		
		return $query;
	}
	public function getListQuery()
	{
		// Initialise variables.
		$db		= $this->getDbo();
		$query	= $db->getQuery(true);

		// Select the required fields from the table.
		$query->select(
			$this->getState(
				'list.select',
				//'a.id AS id, a.name AS name, a.alias AS alias,'.
				//'a.checked_out AS checked_out,'.
				//'a.checked_out_time AS checked_out_time, a.catid AS catid,' .
				//'a.clicks AS clicks, a.metakey AS metakey, a.sticky AS sticky,'.
				//'a.impmade AS impmade, a.imptotal AS imptotal,' .
				//'a.state AS state, a.ordering AS ordering,'.
				//'a.purchase_type as purchase_type,'.
				' i.* '.','.
				' CASE '." 	WHEN i.condition = 0 THEN 'Broken' ".
				" 			WHEN i.condition = 1 THEN 'Poor' ".
				" 			WHEN i.condition = 2 THEN 'Fair' ".
				" 			WHEN i.condition = 3 THEN 'Good' ".
				" 			WHEN i.condition = 4 THEN 'Excellent' ".
				" 			WHEN i.condition = 5 THEN 'New / Mint' ".
				" END AS condition_name"				
			)
		);
		$query->from('#__campinventory_items AS i');
		
		$query->select($db->quoteName('c.title', 'category_title'))
			->join('LEFT', $db->quoteName('#__categories', 'c') . ' ON c.id = i.category');
		
		// Filter by client.
		$category = $this->getState('filter.category');

		if (is_numeric($category))
		{
			$query->where($db->quoteName('i.category') . ' = ' . (int) $category);
		}		
		// echo $query;
		return $query;
	}
	public static function getWeight($type=null) {
		$db		= $this->getDbo();
		$query	= $db->getQuery(true);
		
		$jinput = JFactory::getApplication()->input;
		$budgetid = $jinput->get('budget');
		
			
		$query->select(
			$this->getState(
				'list.select',
				//'a.id AS id, a.name AS name, a.alias AS alias,'.
				//'a.checked_out AS checked_out,'.
				//'a.checked_out_time AS checked_out_time, a.catid AS catid,' .
				//'a.clicks AS clicks, a.metakey AS metakey, a.sticky AS sticky,'.
				//'a.impmade AS impmade, a.imptotal AS imptotal,' .
				//'a.state AS state, a.ordering AS ordering,'.
				//'a.purchase_type as purchase_type,'.
				'  SUM(budget.quantity * budget.weight) '
			)
		);
		$query->from($db->quoteName('#__campinventory_items').' AS budget');
		
		if( !empty($type)) {
			$query->where("budget.id 	=	'".$type."' ");
		}
		$db->setQuery( $query );
		$result = $db->loadResult();
		
		return $result;
		
	}
	/**
	 * Method to get a store id based on model configuration state.
	 *
	 * This is necessary because the model is used by the component and
	 * different modules that might need different sets of data or different
	 * ordering requirements.
	 *
	 * @param	string		$id	A prefix for the store id.
	 * @return	string		A store id.
	 * @since	1.6
	 */
	protected function getStoreId($id = '')
	{
		// Compile the store id.
		$id	.= ':'.$this->getState('filter.search');
		$id	.= ':'.$this->getState('filter.access');
		$id	.= ':'.$this->getState('filter.state');
		$id	.= ':'.$this->getState('filter.category');
		$id .= ':'.$this->getState('filter.language');

		return parent::getStoreId($id);
	}

	/**
	 * Method to auto-populate the model state.
	 *
	 * Note. Calling getState in this method will result in recursion.
	 *
	 * @since	1.6
	 */
	protected function populateState($ordering = null, $direction = null)
	{
		// Initialise variables.
		$app = JFactory::getApplication('administrator');

		// Load the filter state.
		$search = $this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		$this->setState('filter.search', $search);

		$state = $this->getUserStateFromRequest($this->context.'.filter.state', 'filter_state', '', 'string');
		$this->setState('filter.state', $state);

		$category = $this->getUserStateFromRequest($this->context.'.filter.category', 'filter_category', '');
		$this->setState('filter.category', $category);

		$clientId = $this->getUserStateFromRequest($this->context.'.filter.client_id', 'filter_client_id', '');
		$this->setState('filter.client_id', $clientId);

		$language = $this->getUserStateFromRequest($this->context.'.filter.language', 'filter_language', '');
		$this->setState('filter.language', $language);

		// Load the parameters.
		$params = JComponentHelper::getParams('com_banners');
		$this->setState('params', $params);

		// List state information.
		parent::populateState('a.name', 'asc');
	}
}
