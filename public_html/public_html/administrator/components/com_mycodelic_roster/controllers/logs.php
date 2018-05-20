<?php
// No direct access
defined('_JEXEC') or die;
jimport('joomla.application.component.controllerform');

class campinventoryControllerlogs extends JControllerForm{
	protected $context = 'logs';
	public function getModel($name = 'Logs', $prefix = 'TestmodeModel', $config = array('ignore_request' => true)) {
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}
