<?php
/**
* @package RSForm! Pro
* @copyright (C) 2007-2019 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

defined('_JEXEC') or die('Restricted access');

class RsformModelRestore extends JModelLegacy
{
	protected function getExtension($filename) {
		$parts = explode('.', $filename);
		return strtolower(array_pop($parts));
	}
	
	public function restore($file) {
		// Check if we're uploading a file.
		if ($file['error'] == UPLOAD_ERR_NO_FILE) {
			throw new Exception(JText::_('RSFP_RESTORE_NO_FILE_SELECTED'));
		}
		
		// Check if the upload didn't succeed.
		if ($file['error'] != UPLOAD_ERR_OK) {
			switch ($file['error'])
			{
				default:
					$msg = 'RSFP_UPLOAD_ERROR';
				break;
				
				case UPLOAD_ERR_INI_SIZE:
					$msg = 'RSFP_UPLOAD_ERROR_INI_SIZE';
				break;
				
				case UPLOAD_ERR_FORM_SIZE:
					$msg = 'RSFP_UPLOAD_ERROR_FORM_SIZE';
				break;
				
				case UPLOAD_ERR_PARTIAL:
					$msg = 'RSFP_UPLOAD_ERROR_PARTIAL';
				break;
				
				case UPLOAD_ERR_NO_TMP_DIR:
					$msg = 'RSFP_UPLOAD_ERROR_NO_TMP_DIR';
				break;
				
				case UPLOAD_ERR_CANT_WRITE:
					$msg = 'RSFP_UPLOAD_ERROR_CANT_WRITE';
				break;
				
				case UPLOAD_ERR_EXTENSION:
					$msg = 'RSFP_UPLOAD_ERROR_PHP_EXTENSION';
				break;
			}
			
			throw new Exception(JText::sprintf($msg, $file['name']));
		}
		
		$extension = $this->getExtension($file['name']);
		
		// Check if the extension is correct
		if (!in_array($extension, array('zip', 'tgz', 'gz', 'tar')))
		{
			throw new Exception(JText::sprintf('RSFP_RESTORE_NOT_VALID_EXTENSION', $extension));
		}
		
		if ($extension == 'zip')
		{
			throw new Exception(JText::_('COM_RSFORM_LEGACY_BACKUPS_CAN_NO_LONGER_BE_RESTORED'));
		}

		require_once JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/restore/restore.php';

		$restore = new RSFormProRestore();
		$restore->upload($file);

		return $restore->getKey();
	}
	
	public function decompress() {
		require_once JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/restore/restore.php';
		$options = array(
			'key' => $this->getKey()
		);
		
		$restore = new RSFormProRestore($options);
		$restore->decompress();
	}
	
	public function getInfo() {
		require_once JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/restore/restore.php';
		$options = array(
			'key' => $this->getKey()
		);
		
		$restore = new RSFormProRestore($options);
		return $restore->getInfo();
	}
	
	public function parseForm() {
		require_once JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/restore/restore.php';
		$input = JFactory::getApplication()->input;
		
		$options = array(
			'key' 		=> $this->getKey(),
			'keepId'	=> $this->getKeepId(),
			'form' 		=> $input->getCmd('form')
		);
		
		$restore = new RSFormProRestore($options);
		$formId = $restore->parseForm();
		
		return (object) array(
			'form' 			=> $input->getCmd('form'),
			'formId'		=> $formId
		);
	}
	
	public function parseSubmissions() {
		require_once JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/restore/restore.php';
		$input = JFactory::getApplication()->input;
		
		$currentFile = $input->getCmd('file');
		$options = array(
			'key' 		=> $this->getKey(),
			'form' 		=> $input->getCmd('form'),
			'formId' 	=> $input->getCmd('formId'),
			'file' 		=> $currentFile,
		);
		
		$restore = new RSFormProRestore($options);
		$restore->parseSubmissions();
		
		$return  = new StdClass();
		$return->form 		 = $input->getCmd('form');
		$return->nextFile 	 = $restore->checkNextFile(($currentFile + 1));
		return $return;
	}
	
	public function overwriteForms() {
		require_once JPATH_ADMINISTRATOR.'/components/com_rsform/helpers/restore/restore.php';
		$input = JFactory::getApplication()->input;
		
		$options = array(
			'key' 		=> $this->getKey(),
			'overwrite' => $this->getOverwrite()
		);
		
		$restore = new RSFormProRestore($options);
		$restore->overwriteForms();
	}
	
	public function deleteTemporaryFiles() {
		// set the path to delete
		$path = JFactory::getApplication()->get('tmp_path') . '/rsform_backup_'.$this->getKey();
		
		if (!JFolder::delete($path)) {
			throw new Exception(sprintf('Could not remove temporary folder: "%s"!', $path));
		}
	}
	
	public function getKey() {
		return JFactory::getApplication()->input->getCmd('key');
	}
	
	public function getOverwrite() {
		// Get overwrite from the jform data
		$data = JFactory::getApplication()->input->get('jform', array(), 'array');
		if (isset($data['overwrite'])) {
			return (int) $data['overwrite'];
		}
		
		// Get the overwrite from the normal form data
		$overwrite = JFactory::getApplication()->input->getInt('overwrite', 0);
		
		return $overwrite;
	}
	
	public function getKeepId() {
		// Get overwrite from the jform data
		$data = JFactory::getApplication()->input->get('jform', array(), 'array');
		if (isset($data['keepid'])) {
			return (int) $data['keepid'];
		}
		
		// Get the overwrite from the normal form data
		$keepId = JFactory::getApplication()->input->getInt('keepid', 0);
		
		return $keepId;
	}
}