<?php
/**
 * @package      pkg_projectfork
 * @subpackage   com_pftasks
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


jimport('joomla.application.component.modeladmin');


/**
 * Item Model for a task list form.
 *
 */
class PFtasksModelTasklist extends JModelAdmin
{
    /**
     * The prefix to use with controller messages.
     *
     * @var    string
     */
    protected $text_prefix = 'COM_PROJECTFORK_TASKLIST';


    /**
     * Constructor.
     *
     * @param    array          $config    An optional associative array of configuration settings.
     *
     * @see      jcontroller
     */
    public function __construct($config = array())
    {
        parent::__construct($config);
    }


    /**
     * Returns a Table object, always creating it.
     *
     * @param     string    The table type to instantiate
     * @param     string    A prefix for the table class name. Optional.
     * @param     array     Configuration array for model. Optional.
     *
     * @return    jtable    A database object
     */
    public function getTable($type = 'Tasklist', $prefix = 'PFtable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }


    /**
     * Method to get a single record.
     *
     * @param     integer    $pk      The id of the primary key.
     *
     * @return    mixed      $item    Object on success, false on failure.
     */
    public function getItem($pk = null)
    {
        $pk    = (!empty($pk)) ? $pk : (int) $this->getState($this->getName() . '.id');
        $table = $this->getTable();

        if ($pk > 0) {
            // Attempt to load the row.
            $return = $table->load($pk);

            // Check for a table object error.
            if ($return === false && $table->getError()) {
                $this->setError($table->getError());
                return false;
            }
        }

        // Convert to the JObject before adding other data.
        $properties = $table->getProperties(1);
        $item = JArrayHelper::toObject($properties, 'JObject');

        // Convert attributes to JRegistry params
        $item->params = new JRegistry();

        $item->params->loadString($item->attribs);
        $item->attribs = $item->params->toArray();

        return $item;
    }


    /**
     * Method to get the record form.
     *
     * @param     array      Data for the form.
     * @param     boolean    True if the form is to load its own data (default case), false if not.
     *
     * @return    mixed      A JForm object on success, false on failure
     */
    public function getForm($data = array(), $loadData = true)
    {
        // Get the form.
        $form = $this->loadForm('com_pftasks.tasklist', 'tasklist', array('control' => 'jform', 'load_data' => $loadData));
        if (empty($form)) return false;

        $jinput = JFactory::getApplication()->input;
        $user   = JFactory::getUser();
        $id     = (int) $jinput->get('id', 0);
        $task   = $jinput->get('task');

        // Check for existing item.
        // Modify the form based on Edit State access controls.
        if ($id != 0 && (!$user->authorise('core.edit.state', 'com_pftasks.tasklist.' . $id)) || ($id == 0 && !$user->authorise('core.edit.state', 'com_pftasks')))
        {
            // Disable fields for display.
            $form->setFieldAttribute('state', 'disabled', 'true');

            // Disable fields while saving.
            $form->setFieldAttribute('state', 'filter', 'unset');
        }

        // Always disable these fields while saving
        $form->setFieldAttribute('alias', 'filter', 'unset');

        // Disable these fields if not an admin
        if (!$user->authorise('core.admin', 'com_pftasks') && !$user->authorise('core.manage', 'com_pftasks')) {
            $form->setFieldAttribute('access', 'disabled', 'true');
            $form->setFieldAttribute('access', 'filter', 'unset');

            $form->setFieldAttribute('rules', 'disabled', 'true');
            $form->setFieldAttribute('rules', 'filter', 'unset');
        }

        // Disable these fields when updating
        if ($id) {
            $form->setFieldAttribute('project_id', 'readonly', 'true');
            $form->setFieldAttribute('project_id', 'required', 'false');

            if ($task != 'save2copy') {
                $form->setFieldAttribute('project_id', 'disabled', 'true');
                $form->setFieldAttribute('project_id', 'filter', 'unset');
            }

            // We still need to inject the project id when reloading the form
            if (!isset($data['project_id'])) {
                $db    = JFactory::getDbo();
                $query = $db->getQuery(true);

                $query->select('project_id')
                      ->from('#__pf_task_lists')
                      ->where('id = ' . $db->quote($id));

                $db->setQuery($query);
                $form->setValue('project_id', null, (int) $db->loadResult());
            }
        }

        return $form;
    }


    /**
     * Method to get the data that should be injected in the form.
     *
     * @return    mixed    The data for the form.
     */
    protected function loadFormData()
    {
        // Check the session for previously entered form data.
        $app  = JFactory::getApplication();
        $data = $app->getUserState('com_pftasks.edit.' . $this->getName() . '.data', array());

        if (empty($data)) {
            $data = $this->getItem();

            // Set default values
            if ($this->getState($this->getName() . '.id') == 0) {
                $active_id = PFApplicationHelper::getActiveProjectId();
                $milestone = $app->getUserStateFromRequest('com_pftasks.tasks.filter.milestone', 'milestone_id', '');
                $state     = $app->getUserStateFromRequest('com_pftasks.tasks.filter.published', 'filter_published', '');

                $data->set('project_id', $active_id);

                if (!empty($milestone)) $data->set('milestone_id', (int) $milestone);
                if (!empty($state) || $state === '0') $data->set('state', (int) $state);
            }
        }

        return $data;
    }


    /**
     * Method to save the form data.
     *
     * @param     array      The form data
     *
     * @return    boolean    True on success
     */
    public function save($data)
    {
        $record = $this->getTable();
        $key    = $record->getKeyName();
        $pk     = (!empty($data[$key])) ? $data[$key] : (int) $this->getState($this->getName() . '.id');
        $is_new = true;

        if ($pk > 0) {
            if ($record->load($pk)) {
                $is_new = false;
            }
        }

        if (!$is_new) {
            $data['project_id'] = $record->project_id;
        }

        // Make sure the title and alias are always unique
        $data['alias'] = '';
        list($title, $alias) = $this->generateNewTitle($data['title'], $data['project_id'], $data['milestone_id'], $data['alias'], $pk);

        $data['title'] = $title;
        $data['alias'] = $alias;

        // Handle permissions and access level
        if (isset($data['rules'])) {
            $access = PFAccessHelper::getViewLevelFromRules($data['rules'], intval($data['access']));

            if ($access) {
                $data['access'] = $access;
            }
        }
        else {
            if ($is_new) {
                // Let the table class find the correct access level
                $data['access'] = 0;
            }
            else {
                // Keep the existing access in the table
                if (isset($data['access'])) {
                    unset($data['access']);
                }
            }
        }

        // Make item published by default if new
        if (!isset($data['state']) && $is_new) {
            $data['state'] = 1;
        }

        // Store the record
        if (parent::save($data)) {
            $id = $this->getState($this->getName() . '.id');

            // Load the just updated row
            $updated = $this->getTable();
            if ($updated->load($id) === false) return false;

            // Set the active project
            PFApplicationHelper::setActiveProject($updated->project_id);

            return true;
        }

        return false;
    }


    /**
     * Custom clean the cache of com_projectfork and projectfork modules
     *
     */
    protected function cleanCache($group = null, $client_id = 0)
    {
        parent::cleanCache('com_pftasks');
    }


    /**
     * Method to change the title & alias.
     * Overloaded from JModelAdmin class
     *
     * @param     string     $title        The title
     * @param     integer    $project      The project id
     * @param     integer    $milestone    The milestone id
     * @param     string     $alias        The alias
     * @param     integer    $id           The item id
     *
     *
     * @return    array                    Contains the modified title and alias
     */
    protected function generateNewTitle($title, $project, $milestone = 0, $alias = '', $id = 0)
    {
        $table = $this->getTable();
        $db    = JFactory::getDbo();
        $query = $db->getQuery(true);

        if (empty($alias)) {
            $alias = JApplication::stringURLSafe($title);

            if (trim(str_replace('-', '', $alias)) == '') {
                $alias = JApplication::stringURLSafe(JFactory::getDate()->format('Y-m-d-H-i-s'));
            }
        }

        $query->select('COUNT(id)')
              ->from($table->getTableName())
              ->where('alias = ' . $db->quote($alias))
              ->where('project_id = ' . $db->quote((int) $project))
              ->where('milestone_id = ' . $db->quote((int) $milestone));

        if ($id) {
            $query->where('id != ' . intval($id));
        }

        $db->setQuery((string) $query);
        $count = (int) $db->loadResult();

        if ($id > 0 && $count == 0) {
            return array($title, $alias);
        }
        elseif ($id == 0 && $count == 0) {
            return array($title, $alias);
        }
        else {
            while ($table->load(array('alias' => $alias, 'project_id' => $project, 'milestone_id' => $milestone)))
            {
                $m = null;

                if (preg_match('#-(\d+)$#', $alias, $m)) {
                    $alias = preg_replace('#-(\d+)$#', '-'.($m[1] + 1).'', $alias);
                }
                else {
                    $alias .= '-2';
                }

                if (preg_match('#\((\d+)\)$#', $title, $m)) {
                    $title = preg_replace('#\(\d+\)$#', '('.($m[1] + 1).')', $title);
                }
                else {
                    $title .= ' (2)';
                }
            }
        }

        return array($title, $alias);
    }


    /**
     * Method to test whether a record can be deleted.
     * Defaults to the permission set in the component.
     *
     * @param     object     A record object.
     *
     * @return    boolean    True if allowed to delete the record.
     */
    protected function canDelete($record)
    {
        if (empty($record->id)) {
            return parent::canDelete($record);
        }

        if ($record->state != -2) {
            return false;
        }

        $user = JFactory::getUser();

        if (!$user->authorise('core.admin') && !in_array($record->access, $user->getAuthorisedViewLevels())) {
            return false;
        }

        return $user->authorise('core.delete', 'com_pftasks.tasklist.' . (int) $record->id);
    }


    /**
     * Method to test whether a record can have its state edited.
     * Defaults to the permission set in the component.
     *
     * @param     object     A record object.
     *
     * @return    boolean    True if allowed to delete the record.
     */
    protected function canEditState($record)
    {
        if (empty($record->id)) {
            return parent::canEditState($record);
        }

        $user = JFactory::getUser();

        if (!$user->authorise('core.admin') && !in_array($record->access, $user->getAuthorisedViewLevels())) {
            return false;
        }

        return $user->authorise('core.edit.state', 'com_pftasks.tasklist.' . (int) $record->id);
    }


    /**
     * Method to test whether a record can be edited.
     * Defaults to the permission for the component.
     *
     * @param     object     $record    A record object.
     *
     * @return    boolean               True if allowed to edit the record.
     */
    protected function canEdit($record)
    {
        if (empty($record->id)) {
            return $user->authorise('core.edit', 'com_pftasks');
        }

        $user  = JFactory::getUser();
        $asset = 'com_pftasks.tasklist.' . (int) $record->id;

        if (!$user->authorise('core.admin') && !in_array($record->access, $user->getAuthorisedViewLevels())) {
            return false;
        }

        return ($user->authorise('core.edit', $asset) || ($access->get('core.edit.own', $asset) && $record->created_by == $user->id));
    }
}
