<?php
/**
 * @package      pkg_projectfork
 * @subpackage   com_pftime
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


// Base this model on the backend version.
JLoader::register('PFtimeModelTime', JPATH_ADMINISTRATOR . '/components/com_pftime/models/time.php');


/**
 * Projectfork Time Form Model
 *
 */
class PFtimeModelForm extends PFtimeModelTime
{
    /**
     * Method to get item data.
     *
     * @param     integer    $pk       The id of the item.
     *
     * @return    mixed      $item    Item data object on success, false on failure.
     */
    public function getItem($pk = null)
    {
        // Get the record from the parent class method
        $item = parent::getItem($pk);

        if ($item === false) return false;

        // Compute selected asset permissions.
        $user   = JFactory::getUser();
        $uid    = $user->get('id');
        $access = PFtimeHelper::getActions($item->id);

        $view_access = true;

        if ($item->access && !$user->authorise('core.admin')) {
            $view_access = in_array($item->access, $user->getAuthorisedViewLevels());
        }

        $item->params->set('access-view', $view_access);

        if (!$view_access) {
            $item->params->set('access-edit', false);
            $item->params->set('access-change', false);
        }
        else {
            // Check general edit permission first.
            if ($access->get('core.edit')) {
                $item->params->set('access-edit', true);
            }
            elseif (!empty($uid) &&  $access->get('core.edit.own')) {
                // Check for a valid user and that they are the owner.
                if ($uid == $item->created_by) {
                    $item->params->set('access-edit', true);
                }
            }

            // Check edit state permission.
            $item->params->set('access-change', $access->get('core.edit.state'));
        }

        return $item;
    }


    /**
     * Get the return URL.
     *
     * @return    string    The return URL.
     */
    public function getReturnPage()
    {
        return base64_encode($this->getState('return_page'));
    }


    /**
     * Method to auto-populate the model state.
     * Note. Calling getState in this method will result in recursion.
     *
     * @return    void
     */
    protected function populateState()
    {
        $app = JFactory::getApplication();

        // Load state from the request.
        $pk = JRequest::getInt('id');
        $this->setState($this->getName() . '.id', $pk);

        $return = JRequest::getVar('return', null, 'default', 'base64');
        $this->setState('return_page', base64_decode($return));

        // Load the parameters.
        $params = $app->getParams();
        $this->setState('params', $params);

        $this->setState('layout', JRequest::getCmd('layout'));
    }
}
