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

class Mycodelic_rosterModelYear extends JModelList
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

	
	public function getUserQuery() {
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
		$query->from($db->quoteName('#__mycodelic_roster_usermap').' AS u');
		
		$query->select('comprofiler.* ')
			->join('LEFT', '#__comprofiler AS comprofiler ON comprofiler.user_id = u.userid');
		return $query;
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
		$query->from($db->quoteName('#__mycodelic_roster_usermap').' AS u');
		
		$query->select('comprofiler.* ')
			->join('LEFT', '#__comprofiler AS comprofiler ON comprofiler.user_id = u.userid');
		
		$query->select('users.name, users.email ')
			->join('LEFT', '#__users AS users ON users.id = u.userid');
			
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
		$id	.= ':'.$this->getState('filter.category_id');
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

		$categoryId = $this->getUserStateFromRequest($this->context.'.filter.category_id', 'filter_category_id', '');
		$this->setState('filter.category_id', $categoryId);

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
