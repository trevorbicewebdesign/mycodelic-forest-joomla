<?php
defined('_JEXEC') or die;
class TestmodeTableLogs extends JTable {
	public function __construct(&$_db)	{
		$this->checked_out_time = $_db->getNullDate();
		parent::__construct('#__campinventory_logs', 'id', $_db);

		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_campinventory.logs'));
	}
}
