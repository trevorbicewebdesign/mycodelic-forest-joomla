<?php
defined('_JEXEC') or die;
class TestmodeTableUsers extends JTable {
	public function __construct(&$_db)	{
		$this->checked_out_time = $_db->getNullDate();
		parent::__construct('#__campinventory_users', 'id', $_db);

		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_campinventory.users'));
	}
}
