<?php
defined('_JEXEC') or die;

class campbudgetControllerItem extends JControllerForm {
	
	protected $text_prefix = 'COM_campbudget_ITEM';
	
	public function getModel($name = 'Item', $prefix = 'campbudgetModel', $config = array('ignore_request' => true)) {
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
	
	public function cancel() {
		$post	= JRequest::get( 'post',JREQUEST_ALLOWRAW );
		if( !empty($post['return']) ) {
		$this->setRedirect( base64_decode($post['return']) );
		}
		else {
			$this->setRedirect( "index.php?option=com_campbudget&view=items" );
		}
	}
	/*
	public function store($data){
		$this->save($data);
	}
	*/
	public function save( $data )	{
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));
		$input 	= JFactory::getApplication()->input;
		$model 		= $this->getModel('item');
		$row 		= $model->getTable('item');
		$row->load( $input->get("id") );
		
		$post	= JRequest::get( 'post',JREQUEST_ALLOWRAW );
		
		
		foreach($row as $index=>$val) {
			//
			$row->$index = $post['jform'][$index];
			// echo $index." ".$val."<br/>";
			//echo $row->$index."<br/>";
		}
		
		
		if (!$row->bind($row) ) {
			$this->setError($row->getError());
			return 0;
		}
		
		// Make sure data is valid
		//print_r($row);
		if (!$row->check()) {
			$this->setError($row->getError());
			
			return false;
		}
		// Store it
		if (!$row->store()) {
			$this->setError($row->getError());
			
			return false;
		}

		
		
		if($input->get('task')=='apply') {
			if( !empty($_POST['return'])){
				$this->setRedirect('index.php?option=com_campbudget&view=item'.'&layout=edit&id='.$row->id.'&return='.$_POST['return'], JText::_('COM_CAMPBUDGET_ACCOUNT_SAVED'));
			}
			else {
				$this->setRedirect('index.php?option=com_campbudget&view=item'.'&layout=edit&id='.$row->id, JText::_('COM_CAMPBUDGET_ACCOUNT_SAVED'));
			}
		}
		else {
			if( !empty($_POST['return'])){
				$this->setRedirect( base64_decode($_POST['return']), JText::_('COM_CAMPBUDGET_ACCOUNT_SAVED'));
			}
			else {
				$this->setRedirect('index.php?option=com_campbudget&view=items&budget='.$row->budgetid, 'Budget Item Saved');
			}
		}
		
		return true;
	}
	
	public function delete()	{
		// Check for request forgeries.
		JSession::checkToken() or jexit(JText::_('JINVALID_TOKEN'));

		// Get the model.
		$model = $this->getModel();

		// Load the filter state.
		$app = JFactory::getApplication();

		//$type = $app->getUserState($this->context . '.filter.type');
		//$model->setState('filter.type', $type);

		//$begin = $app->getUserState($this->context . '.filter.begin');
		//$model->setState('filter.begin', $begin);

		//$end = $app->getUserState($this->context . '.filter.end');
		//$model->setState('filter.end', $end);


		// $model->setState('list.limit', 0);
		// 	$model->setState('list.start', 0);

		// Remove the items.
		if (!$model->delete()) {
			JError::raiseWarning(500, $model->getError());
		}
		else {
			//echo JText::sprintf( 'COM_campbudget_EXPENSE_DELETED',$count );
			$this->setMessage(JText::sprintf('COM_campbudget_ACCOUNT_DELETED', $count));
		}
		
		$this->setRedirect('index.php?option=com_campbudget&view=accounts');
	}

}

?>