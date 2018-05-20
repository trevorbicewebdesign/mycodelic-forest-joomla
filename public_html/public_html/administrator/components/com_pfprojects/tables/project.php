<?php
/**
 * @package      pkg_projectfork
 * @subpackage   com_pfprojects
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


jimport('joomla.database.tableasset');
jimport('joomla.database.table');
jimport('projectfork.library');

// Register compat class
JLoader::register('PFtableProjectCompat', dirname(__FILE__) . '/project_compat.php');


/**
 * Projectfork Project Table
 *
 */
class PFtableProject extends PFtableProjectCompat
{
    protected $asset_rules;


    /**
     * Constructor
     *
     * @param    database    $db    A database connector object
     */
    public function __construct(&$db)
    {
        parent::__construct('#__pf_projects', 'id', $db);
    }


    /**
     * Method to compute the default name of the asset.
     *
     * @return    string
     */
    protected function _getAssetName()
    {
        $k = $this->_tbl_key;
        return 'com_pfprojects.project.' . (int) $this->$k;
    }


    /**
     * Method to return the title to use for the asset table.
     *
     * @return    string
     */
    protected function _getAssetTitle()
    {
        return $this->title;
    }


    /**
     * Get the parent asset id for the record
     *
     * @param     jtable     $table    A JTable object for the asset parent.
     * @param     integer    $id       The id for the asset
     *
     * @return    integer              The id of the asset's parent
     */
    protected function _getAssetParentIdCompat($table = null, $id = null)
    {
        $query    = $this->_db->getQuery(true);
        $asset_id = null;

        if ($this->catid) {
            $query->select('id')
                  ->from('#__assets')
                  ->where('name = ' . $this->_db->quote("com_pfprojects.category." . (int) $this->catid));

            // Get the asset id from the database.
            $this->_db->setQuery($query);
            $result = $this->_db->loadResult();

            if ($result) $asset_id = (int) $result;
        }

        if (!$asset_id) {
            $query->select('id')
                  ->from('#__assets')
                  ->where('name = ' . $this->_db->quote("com_pfprojects"));

            // Get the asset id from the database.
            $this->_db->setQuery($query);
            $result = $this->_db->loadResult();

            if ($result) $asset_id = (int) $result;
        }

        // Return the asset id.
        if ($asset_id) return $asset_id;

        return parent::_getAssetParentId($table, $id);
    }


    /**
     * Overloaded bind function
     *
     * @param     array    $array     Named array
     * @param     mixed    $ignore    An optional array or space separated list of properties to ignore while binding.
     *
     * @return    mixed               Null if operation was satisfactory, otherwise returns an error string
     */
    public function bind($array, $ignore = '')
    {
        if (isset($array['attribs']) && is_array($array['attribs'])) {
            $registry = new JRegistry;
            $registry->loadArray($array['attribs']);
            $array['attribs'] = (string) $registry;
        }

        // Bind the rules.
        if (isset($array['rules']) && is_array($array['rules'])) {
            $rules = new JRules($array['rules']);
            $this->setRules($rules);
        }

        // Bind the component rules
        if (isset($array['component_rules']) && is_array($array['component_rules'])) {

            foreach ($array['component_rules'] AS $component => $rules)
            {
                $input = new JRules($rules);
                $this->setComponentRules($component, $input);
            }

            unset($array['component_rules']);
        }

        return parent::bind($array, $ignore);
    }


    /**
     * Overloaded check function
     *
     * @return    boolean    True on success, false on failure
     */
    public function check()
    {
        jimport('joomla.mail.helper');

        if (trim($this->title) == '') {
            $this->setError(JText::_('COM_PROJECTFORK_WARNING_PROVIDE_VALID_TITLE'));
            return false;
        }

        if (trim($this->alias) == '') $this->alias = $this->title;
        $this->alias = JApplication::stringURLSafe($this->alias);
        if (trim(str_replace('-','', $this->alias)) == '') $this->alias = JFactory::getDate()->format('Y-m-d-H-i-s');

        if (trim(str_replace('&nbsp;', '', $this->description)) == '') $this->description = '';

        // Check the start date is not earlier than the end date.
        if ($this->end_date > $this->_db->getNullDate() && $this->end_date < $this->start_date) {
            // Swap the dates
            $temp = $this->start_date;
            $this->start_date = $this->end_date;
            $this->end_date   = $temp;
        }

        // Check attribs
        $registry = new JRegistry;
        $registry->loadString($this->attribs);

        $website = $registry->get('website');
        $email   = $registry->get('email');

        // Validate website
        if ((strlen($website) > 0)
            && (stripos($website, 'http://') === false)
            && (stripos($website, 'https://') === false)
            && (stripos($website, 'ftp://') === false))
        {
            $registry->set('website', 'http://' . $website);
        }

        // Validate contact email
        if (!JMailHelper::isEmailAddress($email)) $registry->set('email', '');

        $this->attribs = (string) $registry;

        return true;
    }


    /**
     * Overrides JTable::store to set modified data and user id.
     *
     * @param     boolean    True to update fields even if they are null.
     *
     * @return    boolean    True on success.
     */
    public function store($updateNulls = false)
    {
        $date   = JFactory::getDate();
        $user   = JFactory::getUser();

        if ($this->id) {
            // Existing item
            $this->modified    = $date->toSql();
            $this->modified_by = $user->get('id');
        }
        else {
            // New item
            $this->created = $date->toSql();
            if (empty($this->created_by)) $this->created_by = $user->get('id');
        }

        // Verify that the alias is unique
        $table = JTable::getInstance('Project', 'PFtable');

        if ($table->load(array('alias' => $this->alias)) && ($table->id != $this->id || $this->id == 0)) {
            $this->setError(JText::_('COM_PROJECTFORK_ERROR_PROJECT_UNIQUE_ALIAS'));
            return false;
        }

        $success = parent::store($updateNulls);

        if (!$success) return false;

        return $this->storeComponentAssets();
    }


    /**
     * Method to store the project asset for the other PF components
     *
     * @param     mixed      $pk    An optional primary key value to delete.
     *
     * @return    boolean           True on success.
     */
    public function storeComponentAssets($pk = null)
    {
        $k  = $this->_tbl_key;
        $pk = (is_null($pk)) ? $this->$k : $pk;

        if (!$pk) return false;

        $components = PFApplicationHelper::getComponents();
        $query      = $this->_db->getQuery(true);
        $ignore     = array('com_projectfork', 'com_pfprojects');

        // First, find the asset id's of each component
        // Then, search for corresponding project asset
        // And lastly, create the project asset if it does not exist
        foreach ($components AS $name => $item)
        {
            if (!PFApplicationHelper::usesProjectAsset($name)) continue;

            // Search component asset
            $query->clear();
            $query->select('id')
                  ->from('#__assets')
                  ->where('name = ' . $this->_db->quote($name))
                  ->order('id ASC');

            $this->_db->setQuery($query, 0, 1);
            $com_asset = (int) $this->_db->loadResult();

            if (!$com_asset) continue;

            // Search project asset
            $query->clear();
            $query->select('id')
                  ->from('#__assets')
                  ->where('parent_id = ' . $com_asset)
                  ->where('name = ' . $this->_db->quote($name . '.project.' . $pk))
                  ->order('id ASC');

            $this->_db->setQuery($query, 0, 1);
            $project_asset = (int) $this->_db->loadResult();

            if ($project_asset) {
                // Update asset
                $asset = self::getInstance('Asset', 'JTable', array('dbo' => $this->getDbo()));
                $asset->loadByName($name . '.project.' . $pk);

                if (isset($this->asset_rules[$name])) {
                    if ($this->asset_rules[$name] instanceof JAccessRules) {
                        $asset->rules = (string) $this->asset_rules[$name];
                    }
                    else {
                        $asset->rules = '{}';
                    }
                }
                else {
                    $asset->rules = '{}';
                }

                if (!$asset->check() || !$asset->store(false)) {
                    $this->setError($asset->getError());
                    return false;
                }
            }
            else {
                // Create asset
                $asset = self::getInstance('Asset', 'JTable', array('dbo' => $this->getDbo()));

                $asset->setLocation($com_asset, 'last-child');

                $asset->parent_id = $com_asset;
                $asset->name      = $name . '.project.' . $pk;
                $asset->title     = (empty($this->title) ? $asset->name : $this->title);

                if (isset($this->asset_rules[$name])) {
                    if ($this->asset_rules[$name] instanceof JAccessRules) {
            			$asset->rules = (string) $this->asset_rules[$name];
            		}
                }

                if (!$asset->check() || !$asset->store(false)) {
                    $this->setError($asset->getError());
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * Method to delete a row from the database table by primary key value.
     *
     * @param     mixed      $pk    An optional primary key value to delete.
     *
     * @return    boolean           True on success.
     */
    public function delete($pk = null)
    {
        $k  = $this->_tbl_key;
        $pk = (is_null($pk)) ? $this->$k : $pk;

         // Call parent method
         if (!parent::delete($pk)) {
             return false;
         }

         // Delete references
         $this->deleteReferences($pk);

         return true;
    }


    /**
     * Method to delete referenced data of an item.
     *
     * @param     mixed      $pk    An primary key value to delete.
     *
     * @return    boolean
     */
    public function deleteReferences($pk = null)
    {
        $k  = $this->_tbl_key;
        $pk = (is_null($pk)) ? $this->$k : $pk;

        $query  = $this->_db->getQuery(true);
        $tables = array(
            '#__pf_ref_attachments',
            '#__pf_labels',
            '#__pf_ref_labels',
            '#__pf_ref_observer'
        );

        // Delete related data
        foreach ($tables AS $tbl)
        {
            $query->clear()
                  ->delete($tbl)
                  ->where('project_id = ' . (int) $pk);

            $this->_db->setQuery($query);
            $this->_db->execute();
        }

        return true;
    }


    /**
     * Method to set the publishing state for a row or list of rows in the database
     * table.
     *
     * @param     mixed      $pks      An optional array of primary key values to update.
     * @param     integer    $state    The publishing state
     * @param     integer    $uid      The user id of the user performing the operation.
     *
     * @return    boolean              True on success.
     */
    public function publish($pks = null, $state = 1, $uid = 0)
    {
        return $this->setState($pks, $state, $uid);
    }


    /**
     * Method to set the state for a row or list of rows in the database
     * table.
     *
     * @param     mixed      $pks      An optional array of primary key values to update.
     * @param     integer    $state    The state.
     * @param     integer    $uid      The user id of the user performing the operation.
     *
     * @return    boolean              True on success.
     */
    public function setState($pks = null, $state = 1, $uid = 0)
    {
        // Sanitize input.
        JArrayHelper::toInteger($pks);

        $k     = $this->_tbl_key;
        $uid   = (int) $uid;
        $state = (int) $state;

        // If there are no primary keys set check to see if the instance key is set.
        if (empty($pks)) {
            if ($this->$k) {
                $pks = array($this->$k);
            }
            else {
                // Nothing to set state on, return false.
                $this->setError(JText::_('JLIB_DATABASE_ERROR_NO_ROWS_SELECTED'));
                return false;
            }
        }

        // Build the WHERE clause for the primary keys.
        $where = $k . '=' . implode(' OR ' . $k . '=', $pks);

        // Determine if there is checkin support for the table.
        if (!property_exists($this, 'checked_out') || !property_exists($this, 'checked_out_time')) {
            $checkin = '';
        }
        else {
            $checkin = ' AND (checked_out = 0 OR checked_out = ' . (int) $uid . ')';
        }

        // Update the state for rows with the given primary keys.
        $this->_db->setQuery(
            'UPDATE ' . $this->_db->quoteName($this->_tbl).
            ' SET ' . $this->_db->quoteName('state').' = ' .(int) $state .
            ' WHERE (' . $where . ')' .
            $checkin
        );
        $this->_db->query();

        // Check for a database error.
        if ($this->_db->getErrorNum()) {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        // If checkin is supported and all rows were adjusted, check them in.
        if ($checkin && (count($pks) == $this->_db->getAffectedRows())) {
            // Checkin the rows.
            foreach($pks as $pk)
            {
                $this->checkin($pk);
            }
        }

        // If the JTable instance value is in the list of primary keys that were set, set the instance.
        if (in_array($this->$k, $pks)) $this->state = $state;
        $this->setError('');

        return true;
    }


    /**
	 * Method to set rules for the record.
	 *
     * @param string $component The component name
	 * @param   mixed  $input  A JAccessRules object, JSON string, or array.
	 *
	 * @return  void
	 */
	public function setComponentRules($component, $input)
	{
	    if (!is_array($this->asset_rules)) {
	       $this->asset_rules = array();
	    }

		if ($input instanceof JAccessRules) {
			$this->asset_rules[$component] = $input;
		}
		else {
			$this->asset_rules[$component] = new JAccessRules($input);
		}
	}
}
