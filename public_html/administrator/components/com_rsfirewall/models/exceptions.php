<?php
/**
 * @package    RSFirewall!
 * @copyright  (c) 2009 - 2020 RSJoomla!
 * @link       https://www.rsjoomla.com
 * @license    GNU General Public License http://www.gnu.org/licenses/gpl-3.0.en.html
 */

defined('_JEXEC') or die('Restricted access');

class RsfirewallModelExceptions extends JModelList
{
	public function __construct($config = array())
	{
		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
				'date', 'match', 'reason', 'type', 'published'
			);
		}

		parent::__construct($config);
	}
	
	protected function getListQuery()
	{
		$db 	= $this->getDbo();
		$query 	= $db->getQuery(true);
		
		// get filtering states
		$search = $this->getState('filter.search');
		$type 	= $this->getState('filter.type');
		$state 	= $this->getState('filter.state');
		
		$query->select('*')->from('#__rsfirewall_exceptions');
		// search
		if ($search != '')
		{
			$search = $db->q('%'.str_replace(' ', '%', $db->escape($search, true)).'%', false);
			$query->where('('.$db->qn('match').' LIKE '.$search.' OR '.$db->qn('reason').' LIKE '.$search.')');
		}
		// type
		if ($type != '')
		{
			$query->where($db->qn('type').'='.$db->q($type));
		}
		// published/unpublished
		if ($state != '')
		{
			$query->where($db->qn('published').'='.$db->q($state));
		}
		// order by
		$query->order($db->qn($this->getState('list.ordering', 'date')).' '.$db->escape($this->getState('list.direction', 'desc')));
		
		return $query;
	}
	
	protected function populateState($ordering = null, $direction = null)
	{
		$this->setState('filter.search', 	$this->getUserStateFromRequest($this->context.'.filter.search', 'filter_search'));
		$this->setState('filter.type', 		$this->getUserStateFromRequest($this->context.'.filter.type', 	'filter_type'));
		$this->setState('filter.state', 	$this->getUserStateFromRequest($this->context.'.filter.state', 	'filter_state'));
		
		// List state information.
		parent::populateState('date', 'desc');
	}
}