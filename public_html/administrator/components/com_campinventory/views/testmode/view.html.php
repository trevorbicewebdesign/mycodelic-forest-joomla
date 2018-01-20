<?php
// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');
class campinventoryViewcampinventory extends JViewLegacy {
	protected $form;
	protected $item;
	protected $state;

	/**
	 * Display the view
	 */
	public function display($tpl = null)	{
				// Initialiase variables.
		$this->form		= $this->get('Form');
		$this->item		= $this->get('Item');
		$this->state		= $this->get('State');
		echo "1";
		require_once(JPATH_COMPONENT_ADMINISTRATOR . '/helpers/campinventory.helper.php');
		$this->helper = new campinventoryHelper;
		echo "2";
		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		echo "3";
		//campinventoryHelper::addSubmenu('users');

		$this->addToolbar();
		//$this->sidebar = JHtmlSidebar::render();
		
		parent::display($tpl);
	}

	protected function addToolbar()	{

		$user		= JFactory::getUser();
		$userId		= $user->get('id');
//		$isNew		= ($this->item->id == 0);
		//$checkedOut	= !($this->item->checked_out == 0 || $this->item->checked_out == $userId);
		// Since we don't track these assets at the item level, use the category id.


		JToolBarHelper::title("Testmode Preferences", 'banners.png');


		JToolBarHelper::preferences('com_campinventory');
		JToolBarHelper::divider();

	}
}
