<?php
/**
* @package      pkg_projectfork
* @subpackage   com_pfrepo
*
* @author       Tobias Kuhn (eaxs)
* @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
* @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
**/

defined('_JEXEC') or die();


jimport('projectfork.controller.form.json');
jimport('joomla.filesystem.file');


/**
 * Projectfork File Form JSON Controller
 *
 */
class PFrepoControllerFile extends PFControllerFormJson
{
    /**
     * Method to save a record.
     *
     * @param     string     $key       The name of the primary key of the URL variable.
     * @param     string     $urlVar    The name of the URL variable if different from the primary key (sometimes required to avoid router collisions).
     *
     * @return    boolean               True if successful, false otherwise.
     */
    public function save($key = 'id', $urlVar = null)
    {
        $rdata = array();
        $rdata['success']  = true;
        $rdata['messages'] = array();
        $rdata['data']     = array();
        $rdata['file']     = '';

        $files_data = JRequest::getVar('qqfile', null, 'files');
        $get_data   = JRequest::getVar('qqfile', null, 'get');
        $dir        = JRequest::getUInt('filter_parent_id', JRequest::getUInt('dir_id'));
        $project    = JRequest::getUInt('filter_project', PFApplicationHelper::getActiveProjectId());
        $method     = null;

        // Determine the upload method
        if ($files_data) {
            $method = 'form';
            $file   = $files_data;
        }
        elseif ($get_data) {
            $method = 'xhr';
            $file   = array('name' => $get_data, 'tmp_name' => $get_data, 'error' => 0);
        }
        else {
            $rdata['success'] = false;
            $rdata['messages'][] = JText::_('COM_PROJECTFORK_WARNING_FILE_UPLOAD_ERROR_4');

            $this->sendResponse($rdata);
        }

        // Access check.
        if (!$this->allowSave($d = array())) {
            $rdata['success'] = false;
            $rdata['messages'][] = JText::_('JLIB_APPLICATION_ERROR_SAVE_NOT_PERMITTED');

            $this->sendResponse($rdata);
        }

        // Check for upload error
        if ($file['error']) {
            $error = PFrepoHelper::getFileErrorMsg($file['error'], $file['name']);

            $rdata['success'] = false;
            $rdata['messages'][] = $error;

            $this->sendResponse($rdata);
        }

        // Find file with the same name in the same dir
        $db    = JFactory::getDbo();
        $query = $db->getQuery(true);
        $name  = JFile::makeSafe($file['name']);

        $query->select('id')
              ->from('#__pf_repo_files')
              ->where('dir_id = ' . (int) $dir)
              ->where('file_name = ' . $db->quote($name));

        $db->setQuery($query, 0, 1);
        $parent_id = (int) $db->loadResult();

        $model  = $this->getModel();
        $result = $model->upload($file, $dir, ($method == 'xhr' ? true : false), $parent_id);

        if (!$result) {
            $rdata['success'] = false;
            $rdata['messages'][] = $model->getError();

            $this->sendResponse($rdata);
        }

        // Prepare data for saving
        $data = array();
        $data['project_id'] = $project;
        $data['dir_id']     = $dir;
        $data['file']       = $result;
        $data['title']      = $result['name'];

        if ($parent_id) {
            $data['id'] = $parent_id;
        }

        if (!$model->save($data)) {
            $rdata['success'] = false;
            $rdata['messages'][] = $model->getError();

            $this->sendResponse($rdata);
        }

        $this->sendResponse($rdata);
    }


    /**
     * Method to check if you can add a new record.
     *
     * @param     array      $data    An array of input data.
     *
     * @return    boolean
     */
    protected function allowAdd($data = array())
    {
        $user    = JFactory::getUser();
        $project = JArrayHelper::getValue($data, 'project_id', JRequest::getInt('filter_project'), 'int');
        $dir_id  = JArrayHelper::getValue($data, 'dir_id', JRequest::getInt('filter_parent_id'), 'int');

        // Check general access
        if (!$user->authorise('core.create', 'com_pfrepo')) {
            $this->setError(JText::_('COM_PROJECTFORK_WARNING_CREATE_FILE_DENIED'));
            return false;
        }

        // Validate directory access
        $model = $this->getModel('Directory', 'PFrepoModel');
        $item  = $model->getItem($dir_id);

        if ($item == false || empty($item->id) || $dir_id <= 1) {
            $this->setError(JText::_('COM_PROJECTFORK_WARNING_DIRECTORY_NOT_FOUND'));
            return false;
        }

        $access = PFrepoHelper::getActions('directory', $item->id);

        if (!$user->authorise('core.admin')) {
            if (!in_array($item->access, $user->getAuthorisedViewLevels())) {
                $this->setError(JText::_('COM_PROJECTFORK_WARNING_DIRECTORY_ACCESS_DENIED'));
                return false;
            }
            elseif (!$access->get('core.create')) {
                $this->setError(JText::_('COM_PROJECTFORK_WARNING_DIRECTORY_CREATE_FILE_DENIED'));
                return false;
            }
        }

        return true;
    }
}
