<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.modellist');

class campbudgetModelItems extends JModelList {
	public function __construct($config = array())
	{
		if (empty($config['filter_fields'])) {
			$config['filter_fields'] = array(
				'id', 			'a.id',
				'cid', 			'a.cid', 'client_name',
				'name', 			'a.name',
				'alias', 			'a.alias',
				'state', 			'a.state',
				'ordering', 		'a.ordering',
				'language', 		'a.language',
				'category', 		'a.category', 'category',
				'checked_out', 	'a.checked_out',
				'checked_out_time', 'a.checked_out_time',
				'created', 		'a.created',
				'impmade', 		'a.impmade',
				'imptotal', 		'a.imptotal',
				'clicks', 		'a.clicks',
				'publish_up', 		'a.publish_up',
				'publish_down', 	'a.publish_down',
				'state', 'sticky', 	'a.sticky',
			);
		}

		parent::__construct($config);
	}

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

	/*
	public function getBudget() {
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
				'  budget.* '
			)
		);
		$query->from($db->quoteName('#__campbudget_budgets').' AS budget');
		
		$query->where("budget.id 	=	'".$budgetid."' ");
		
		$db->setQuery($query);
		
		// Load the results as a list of stdClass objects (see later for more options on retrieving data).
		$item =  $db->loadAssoc();
		return $item;
	}
	*/
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
		$query->from($db->quoteName('#__campbudget_items').' AS u');
		
		
		
		return $query;
	}
	public function getListQuery()
	{
		// Initialise variables.
		$db		= $this->getDbo();
		$query	= $db->getQuery(true);
		
		

		$jinput = JFactory::getApplication()->input;
		$budgetid = $jinput->get('budget');



		// Select the required fields from the table.v
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
				'  i.* '

			)
		);
		$query->from('#__campbudget_items AS i');
		
		$query->select($db->quoteName('c.title', 'category_title'))
			->join('LEFT', $db->quoteName('#__categories', 'c') . ' ON c.id = i.category');
			
		$query->where($db->quoteName('i.budgetid') . ' = ' . (int) $budgetid);
		
		// Filter by client.
		$category = $this->getState('filter.category');

		if (is_numeric($category))
		{
			$query->where($db->quoteName('i.category') . ' = ' . (int) $category);
		}		

		return $query;
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
		echo $category;
		

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
