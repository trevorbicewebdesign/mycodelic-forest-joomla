<?php
/**
* @package RSForm! Pro
* @copyright (C) 2007-2019 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

defined('_JEXEC') or die('Restricted access');

class RsformViewRestorescreen extends JViewLegacy
{
	public function display($tpl = null)
	{
        if (!JFactory::getUser()->authorise('backuprestore.manage', 'com_rsform'))
        {
            throw new Exception(JText::_('COM_RSFORM_NOT_AUTHORISED_TO_USE_THIS_SECTION'));
        }

		$this->addToolbar();

		$this->form	= $this->get('Form');

		if (!$this->get('isWritable'))
		{
		    JFactory::getApplication()->enqueueMessage(JText::sprintf('RSFP_BACKUP_RESTORE_CANNOT_CONTINUE_WRITABLE_PERMISSIONS', '<strong>'.$this->escape($this->get('TempDir')).'</strong>'), 'warning');
		}
		
		parent::display($tpl);
	}
	
	protected function addToolBar()
	{
		// set title
		JToolbarHelper::title('RSForm! Pro', 'rsform');
		
		require_once JPATH_COMPONENT.'/helpers/toolbar.php';
		RSFormProToolbarHelper::addToolbar('restorescreen');

		JToolbarHelper::custom('restore.start', 'unarchive', 'unarchive', JText::_('RSFP_RESTORE'), false);
	}
}