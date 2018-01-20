<?php
/**
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * View class for a list of users.
 *
 * @package		Joomla.Administrator
 * @subpackage	com_users
 * @since		1.6
 */

class campbudgetViewBudget extends JViewLegacy {
	protected $form;
	protected $item;
	protected $state;

	protected $canDo;
	public function display($tpl = null)	{
		// Initialiase variables.
		$this->form  = $this->get('Form');
		$this->item  = $this->get('Item');
		$this->state = $this->get('State');
		$this->canDo	= JHelperContent::getActions('com_campbudget');
		
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));

			return false;
		}
		
		
		$this->addToolbar();
		JHtml::_('jquery.framework');

		return parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolbar() {
		JFactory::getApplication()->input->set('hidemainmenu', true);

		$user		= JFactory::getUser();
		$isNew		= ($this->item->id == 0);
		$checkedOut	= !($this->item->checked_out == 0 || $this->item->checked_out == $user->get('id'));
		$canDo		= $this->canDo;

		JToolbarHelper::title(
			$isNew ? JText::_('Camp Budget New Item') : JText::_('Camp Budget Edit Item'),
			'bookmark banners-clients'
		);

		// If not checked out, can save the item.
		if (!$checkedOut && ($canDo->get('core.edit') || $canDo->get('core.create'))) {
			JToolbarHelper::apply('budget.apply');
			JToolbarHelper::save('budget.save');
		}

		if (!$checkedOut && $canDo->get('core.create')) {
			JToolbarHelper::save2new('budget.save2new');
		}
		// If an existing item, can save to a copy.
		if (!$isNew && $canDo->get('core.create')) {
			JToolbarHelper::save2copy('budget.save2copy');
		}
		//if (empty($this->item->id)) {
			JToolbarHelper::cancel('budget.cancel');
		//}
		

		JToolbarHelper::divider();
		
	}
}