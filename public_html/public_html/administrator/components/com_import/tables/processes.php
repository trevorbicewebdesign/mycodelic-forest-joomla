<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
// Include library dependencies
jimport('joomla.filter.input');
class Tableprocesses extends JTable {
	var $id 						= null;
	var $title 						= null;
	var $sql 						= null;
	var $code		 				= null;
	
	function __construct(& $db) {
		parent::__construct('#__import_processes', 'id', $db);
	}
	function check()
	{
		return true;
	}
}
?>