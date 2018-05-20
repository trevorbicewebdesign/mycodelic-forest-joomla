<?php
// Check to ensure this file is included in Joomla!
defined( '_JEXEC' ) or die( 'Restricted access' );

jimport('joomla.application.component.model');
class TestmodeModelDefault extends JModel {
	var $_id = null;
	var $_data = null;
	function __construct() {
		parent::__construct();

		$id = JRequest::getVar('id', 0, '', 'int');
		$this->setId($id);
	}
	function setId($id) {
		// Set weblink id and wipe data
		$this->_id		= $id;
		$this->_data	= null;
	}
	function &getData()	{
		// Load the weblink data
		if ($this->_loadData()) {
			//do nothing
		}

		return $this->_data;
	}
	function store($data) {
		$user		= JFactory::getUser();
		$username	= $user->get('username');

		// Bind the form fields to the user table
		if (!$user->bind($data)) {
			$this->setError($this->_db->getErrorMsg());
			return false;
		}

		// Store the web link table to the database
		if (!$user->save()) {
			$this->setError( $user->getError() );
			return false;
		}

		$session =& JFactory::getSession();
		$session->set('user', $user);

		// check if username has been changed
		if ( $username != $user->get('username') )
		{
			$table = $this->getTable('session', 'JTable');
			$table->load($session->getId());
			$table->username = $user->get('username');
			$table->store();

		}

		return true;
	}
	function _loadData()	{
		// Lets load the content if it doesn't already exist
		if (empty($this->_data))
		{
			$this->_data =& JFactory::getUser();
			return (boolean) $this->_data;
		}
		return true;
	}
}
?>
