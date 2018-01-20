<?php
defined('_JEXEC') or die;

class Mycodelic_rosterController extends JControllerLegacy {
	public function display($cachable = false, $urlparams = false)	{
		
		// AedmanHelper::updateReset();
		$view   = $this->input->get('view', 	'roster');
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
