<?php

defined('_JEXEC') or die('Restricted access');
	
class modTBWorksAccordionK2Lists extends modTBWorksAccordionLists {
	
	function getCategories() {
		global $mainframe;
		
		$db 	=& JFactory::getDBO();
		jimport('joomla.utilities.date');
		$date = new JDate();
		$now = $date->toSql();
		
		$db 	=& JFactory::getDBO();
		$query  = "SELECT a.name AS title, a.id FROM #__k2_categories AS a ";
		$query .= 'WHERE a.published = 1 ';
		//$query .= "AND a.extension = 'com_content' ";
		
		$db->setQuery($query);
		//echo $query."<br>";
		$rows = $db->loadObjectList();
		//print_r($rows);
		if ($order == 'rnd') shuffle($rows);
		if(!$items) {
			return $rows;
		} else {
			return array_slice($rows, 0, $items);
		}
	}
	function getLists($categories, $params) {
		global $mainframe;
		
		$db 	=& JFactory::getDBO();
		$user 	=& JFactory::getUser();

		// $contentConfig	= &JComponentHelper::getParams( 'com_content' );
		// $noauth			= !$contentConfig->get('shownoauth');

		$nullDate = $db->getNullDate();
		jimport('joomla.utilities.date');
		$date = new JDate();
		$now = $date->toSql();
		
		$order = $params->get('order');
		switch ($order) {
			case 'm_dsc':
				$ordering = 'a.modified DESC, a.created DESC';
				break;
			case 'h_dsc':
				$ordering = 'a.hits DESC, a.created DESC';
				break;				
			case 'c_dsc':
				$ordering = 'a.created DESC';
				break;
			case 'o_asc':
			default:
				$ordering = 'a.ordering';
				break;
		}
		// Query to determine article count
		$query = 'SELECT a.* '.
			' FROM #__k2_items AS a' .
			' INNER JOIN #__k2_categories AS cc ON cc.id = a.catid' .
			' WHERE a.published = 1 ' .
			// ($noauth ? ' AND a.access <= ' .(int) $aid. ' AND cc.access <= ' .(int) $aid : '').
			' AND (a.publish_up = "'.$nullDate.'" OR a.publish_up <= "'.$now.'" ) ' .
			' AND (a.publish_down = "'.$nullDate.'" OR a.publish_down >= "'.$now.'" )' .
			' AND (catid="';
			if(count($categories)>0) {
				$query .= implode('" OR catid="', $categories);
			}
		$query .= '") ';
		$query .= ' AND cc.published = 1' .
			' ORDER BY ' . $ordering;
		$db->setQuery($query);
		$rows = $db->loadObjectList();
		//print_r($rows);
		if($order == 'rnd') shuffle($rows);
		
		return $rows;
	}
}

?>