<?php
defined('_JEXEC') or die;
class Mycodelic_rosterTableUsers extends JTable {
	public function __construct(&$_db)	{
		$this->checked_out_time = $_db->getNullDate();
		parent::__construct('#__mycodelic_roster_usermap', 'id', $_db);

		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_mycodelic_roster.users'));
	}
}
