<?php
defined('_JEXEC') or die;
class campbudgetTableBudget extends JTable {
	public function __construct(&$_db)	{
		$this->checked_out_time = $_db->getNullDate();
		parent::__construct('#__campbudget_budgets', 'id', $_db);


		

		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_campbudget.budget'));
	}
}
