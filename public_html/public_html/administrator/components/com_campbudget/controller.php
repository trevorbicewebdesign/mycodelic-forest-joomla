<?php
defined('_JEXEC') or die;

class campbudgetController extends JControllerLegacy {
	public function display($cachable = false, $urlparams = false)	{
		
		// AedmanHelper::updateReset();
		$view   = $this->input->get('view', 	'budgets');
		$task   = $this->input->get('task');
		$layout = $this->input->get('layout', 	'default');
		$id     = $this->input->getInt('id');
				
		JFactory::getApplication()->input->set('view', $view);
		
		// echo $task;
		JFactory::getApplication()->input->set('task', $task);
		
		
		
		parent::display();

		return $this;
	}
}
