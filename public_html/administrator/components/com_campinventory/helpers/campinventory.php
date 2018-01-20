<?php
defined('_JEXEC') or die('Restricted access');

class campinventoryHelper extends JHelperContent{
	public static function addSubmenu($vName)	{
		JHtmlSidebar::addEntry(
			'Inventory',
			'index.php?option=com_campinventory&view=inventory',
			$vName == 'budgets'
		);
		JHtmlSidebar::addEntry(
			"Categories",
			'index.php?option=com_categories&view=categories&extension=com_campinventory',
			$vName == 'categories'
		);
	}
	public static function getQuality($value) {
		if($value==5){
			return "New / Mint";
		}
		else if($value==4){
			return "Excellent";
		}
		else if($value==3){
			return "Good";
		}
		else if($value==2){
			return "Fair";
		}
		else if($value==1){
			return "Poor";
		}
		else if($value==0){
			return "Broken";
		}
	}
	public static function getTotalWeight() {
		$db =& JFactory::getDBO();
		
		$query	= $db->getQuery(true);
		
		$query->select(' SUM(i.weight*i.quantity) ');
		$query->from($db->quoteName('#__campinventory_items').' AS i');
		

		$db->setQuery($query);
		
		$result = number_format($db->loadResult(), 2);

		return $result;
		
	}
}

?>