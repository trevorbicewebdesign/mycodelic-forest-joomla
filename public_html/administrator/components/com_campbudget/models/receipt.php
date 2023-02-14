<?php
defined('_JEXEC') or die('Restricted access');

class campbudgetModelReceipt extends JModelAdmin
{
    public $typeAlias = 'com_campbudget.account';
    protected function canDelete($record)
    {

        if (!empty($record->id)) {
            if ($record->state != -2) {
                return;
            }

            $user = JFactory::getUser();

            if (!empty($record->catid)) {
                return $user->authorise('core.delete', 'com_campbudget.category.' . (int) $record->catid);
            } else {
                return $user->authorise('core.delete', 'com_campbudget');
            }
        }
    }

    /**
     * Method to test whether a record can be deleted.
     *
     * @param   object  $record  A record object.
     *
     * @return  boolean  True if allowed to change the state of the record.
     *                   Defaults to the permission set in the component.
     *
     * @since   1.6
     */
    protected function canEditState($record)
    {
        $user = JFactory::getUser();

        if (!empty($record->catid)) {
            return $user->authorise('core.edit.state', 'com_campbudget.category.' . (int) $record->catid);
        } else {
            return $user->authorise('core.edit.state', 'com_campbudget');
        }
    }

    /**
     * Returns a reference to the a Table object, always creating it.
     *
     * @param   string  $type    The table type to instantiate
     * @param   string  $prefix  A prefix for the table class name. Optional.
     * @param   array   $config  Configuration array for model. Optional.
     *
     * @return  JTable    A database object
     *
     * @since   1.6
     */
    public function getTable($type = 'Item', $prefix = 'campbudgetTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }

    public function getScript()
    {
        return 'administrator/components/com_aedman/models/forms/account.js';
    }
    /**
     * Method to get the record form.
     *
     * @param   array    $data      Data for the form.
     * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
     *
     * @return  mixed    A JForm object on success, false on failure
     *
     * @since   1.6
     */
    public function getForm($data = array(), $loadData = true)
    {

        // Get the form.
        $form = $this->loadForm('com_campbudget.receipt', 'receipt', array('control' => 'jform', 'load_data' => $loadData));

        if (empty($form)) {
            return false;
        }

        return $form;
    }

    /**
     * Method to get the data that should be injected in the form.
     *
     * @return  mixed  The data for the form.
     *
     * @since   1.6
     */
    protected function loadFormData()
    {

        // Check the session for previously entered form data.
        $data = JFactory::getApplication()->getUserState('com_campbudget.edit.receipt.data', array());

        if (empty($data)) {
            $data = $this->getItem();
        }
        $this->preprocessData('com_campbudget.receipt', $data);

        return $data;
    }

    /**
     * Prepare and sanitise the table prior to saving.
     *
     * @param   JTable  $table  A JTable object.
     *
     * @return  void
     *
     * @since   1.6
     */
    protected function prepareTable($table)
    {
        $table->name = htmlspecialchars_decode($table->name, ENT_QUOTES);
    }

    public function getItem($id = null)
    {
        $jinput = JFactory::getApplication()->input;
        $id = $jinput->getInt('id');
        if ($id < 0) {
            $id = $jinput->getInt('receipt');
        }
        
        if (!is_array($this->item)) {
            $this->item = array();
        }
        $db = $this->getDbo();
        $query = $db->getQuery(true);

        $query->select(
            $this->getState(
                'list.select',
                '  r.* 					' .

                ''
            )
        );
        $query->from($db->quoteName('#__campbudget_receipts') . ' AS r');
        $query->where("r.id = '" . $id . "' ");
        // Reset the query using our newly populated query object.
        $db->setQuery($query);

        // Load the results as a list of stdClass objects (see later for more options on retrieving data).
        $receipt = $db->loadAssoc();
        return $receipt;
    }
    public function getRows($id = null)
    {
        $jinput = JFactory::getApplication()->input;
        $id = $jinput->getInt('id');
        if ($id < 0) {
            $id = $jinput->getInt('budget');
        }
        
        if (!is_array($this->item)) {
            $this->item = array();
        }
        $db = $this->getDbo();
        $query = $db->getQuery(true);

        $query->select(
            $this->getState(
                'list.select',
                '  r.* 					' .

                ''
            )
        );
        $query->from($db->quoteName('#__campbudget_receipt_items') . ' AS r');
        $query->where("r.receipt_id = '" . $id . "' ");
        // Reset the query using our newly populated query object.
        $db->setQuery($query);

        // Load the results as a list of stdClass objects (see later for more options on retrieving data).
        $items =  $db->loadObjectList();
        return $items;
    }
    public function delete()
    {

        $input = JFactory::getApplication()->input;
        $cids = JRequest::getVar('cid', array(0), 'post', 'array');
        $row = $this->getTable('budget');

        $action = "deleted";

        if (count($cids)) {
            foreach ($cids as $cid) {

                if (!$row->delete($cid)) {
                    $this->setError($row->getErrorMsg());
                    return false;
                }
            }
            return count($cids);
        }

        return false;
    }

    public function save($data=null)	{
		$model 	= $this->getModel();
		$data 	= $_POST['jform'];
		
		
		
		// Load the filter state.
		$app = JFactory::getApplication();

		$id = JRequest::getVar('id');
		
		$db = JFactory::getDBO();
		
        print_r($data);
        die();
		
		
		$data['id'] = $id;
			
		$jinput 	= JFactory::getApplication()->input;
		if (!$model->save($data)) {
			JError::raiseWarning(500, $model->getError());
		}
		else {
			if($id==0) {
				$db =  $model->get("_db");
				$id = $db->insertid();
				//echo $id."<br/>";
			}
			$this->setMessage(JText::plural('COM_BLACKSUN_TICKET_SAVED', $count));
		}
			
		if($jinput->get('task')=='apply') {
			if( !empty($_POST['return'])){
				$this->setRedirect('index.php?option=com_campbudget&view=receipt'.'&layout=edit&id='.$id.'&return='.$_POST['return'], JText::_('COM_BLACKSUN_INVOICE_SAVED'));
			}
			else {
				$this->setRedirect('index.php?option=com_campbudget&view=receipt'.'&layout=edit&id='.$id, JText::_('COM_BLACKSUN_INVOICE_SAVED'));
			}
		}
		else {
			if( !empty($_POST['return'])){
				$this->setRedirect( base64_decode($_POST['return']), JText::_('COM_BLACKSUN_INVOIsddCE_SAVED'));
			}
			else { 
				$this->setRedirect('index.php?option=com_campbudget&view=receipt',  JText::_('COM_BLACKSUN_INVOICE_SAVED'));
			}
		}
	}
}
