<?php
defined('_JEXEC') or die('Restricted access');

class campbudgetHelper extends JHelperContent{
	public static function addSubmenu($vName)	{
		JHtmlSidebar::addEntry(
			'Budgets',
			'index.php?option=com_campbudget&view=budgets',
			$vName == 'budgets'
		);
		JHtmlSidebar::addEntry(
			"Categories",
			'index.php?option=com_categories&view=categories&extension=com_campbudget',
			$vName == 'categories'
		);
		JHtmlSidebar::addEntry(
			'Items',
			'index.php?option=com_campbudget&view=items',
			$vName == 'items'
		);
		JHtmlSidebar::addEntry(
			'Camp Dues',
			'index.php?option=com_campbudget&view=campdues',
			$vName == 'campdues'
		);
		


	}
	public static function getTotalWeight() {
		$db =& JFactory::getDBO();
		
		$query	= $db->getQuery(true);
		
		$query->select(' SUM(weight) ');
		$query->from($db->quoteName('#__campinventory_items').' AS budget');
		
		$query->where("budget.id 	=	'".$budgetid."' ");
		
		$db->setQuery($query);
		
		$rows = $db->loadObjectList();
		print_r($rows);
		
		
	}
}

?>