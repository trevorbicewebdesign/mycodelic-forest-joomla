<?php
defined('_JEXEC') or die;
class Mycodelic_rosterTableRoster extends JTable {
	public function __construct(&$_db)	{
		$this->checked_out_time = $_db->getNullDate();
		parent::__construct('#__mycodelic_roster_list', 'id', $_db);

		

		JTableObserverContenthistory::createObserver($this, array('typeAlias' => 'com_mycodelic_roster.roster'));
	}
}
