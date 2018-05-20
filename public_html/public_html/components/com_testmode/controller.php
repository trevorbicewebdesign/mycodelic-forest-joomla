<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class TestmodeController extends JControllerLegacy {
	function display() {
		global $mainframe, $option;
		echo "testmode controller"; 
		$db		=& JFactory::getDBO();
		$user	=& JFactory::getUser();
		
		parent::display();	
	}	
}
?>