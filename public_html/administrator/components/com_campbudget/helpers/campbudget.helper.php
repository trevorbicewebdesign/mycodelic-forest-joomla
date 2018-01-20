<?php
defined('_JEXEC') or die('Restricted access');

class campbudgetHelper extends JHelperContent{
	public static function addSubmenu($vName)	{
		JHtmlSidebar::addEntry(
			JText::_('COM_CAMPBUDGET_SUBMENU_BUDGETS'),
			'index.php?option=com_campbudget&view=budgets',
			$vName == 'budgets'
		);
		JHtmlSidebar::addEntry(
			JText::_('COM_HELLOWORLD_SUBMENU_CATEGORIES'),
			'index.php?option=com_categories&view=categories&extension=com_campbudget',
			$vName == 'categories'
		);


	}
}

?>