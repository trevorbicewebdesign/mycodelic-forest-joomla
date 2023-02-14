<?php
/**
 * @copyright    Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View class for a list of users.
 *
 * @package        Joomla.Administrator
 * @subpackage    com_users
 * @since        1.6
 */

class campbudgetViewReceipts extends JViewLegacy
{
    protected $items;
    protected $pagination;
    protected $state;

    /**
     * Display the view
     */
    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->state = $this->get('State');

        require_once JPATH_COMPONENT_ADMINISTRATOR . '/helpers/campbudget.php';
        $this->helper = new campbudgetHelper;

        // Check for errors.

        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));

            return false;
        }
        $model = $this->getModel();

        campbudgetHelper::addSubmenu('users');

        $this->addToolbar();
        $this->sidebar = JHtmlSidebar::render();

        parent::display($tpl);
    }

    /**
     * Add the page title and toolbar.
     *
     * @since    1.6
     */
    protected function addToolbar()
    {

        $user = JFactory::getUser();
        $userId = $user->get('id');
        $canDo = JHelperContent::getActions('com_banners', 'category', $this->state->get('filter.category_id'));
//        $isNew        = ($this->item->id == 0);
        //$checkedOut    = !($this->item->checked_out == 0 || $this->item->checked_out == $userId);
        // Since we don't track these assets at the item level, use the category id.

        JToolBarHelper::title("Camp Receipts", 'banners.png');

        JToolbarHelper::addNew('receipt.add');

        if ($canDo->get('core.edit'))
		{
			JToolbarHelper::editList('receipt.edit');
		}

        if ($canDo->get('core.edit.state'))
		{	
			JToolBarHelper::custom('receipts.import', 'extrahello.png', 'extrahello_f2.png', 'Import Receipts', false);
		}

        JToolBarHelper::preferences('com_campbudget');
        JToolBarHelper::divider();

    }
}
