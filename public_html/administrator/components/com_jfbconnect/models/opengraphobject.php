<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

jimport('joomla.application.component.model');
require_once(JPATH_SITE . '/components/com_jfbconnect/models/opengraphobject.php');

class JFBConnectAdminModelOpenGraphObject extends JFBConnectModelOpenGraphObject
{
    var $actionData;

    public function store($object = null)
    {
        $row = $this->getTable("JFBConnectOpenGraphObject", "Table");

        if (!$object)
        {
            $postData = JRequest::get('post');
            if ($postData['id'] == 0)
            {
                $object = new ogObject();
                $object->loadDefaultObject($postData['plugin'], $postData['system_name']);
                if ($object == null)
                    return false; // Shouldn't happen..
            } else
                $object = $this->getObject($postData['id']);

            //fb_built_in is not set the the post array if the checkbox is unchecked.
            //so we have to check if not isset
            if(!isset($postData['fb_built_in']))
                $object->fb_built_in = '0'; // Using checkbox, so need to check if it's 1 each time.
        }

        foreach (array_keys($postData) as $prop)
        {
            if (property_exists($object, $prop))
            {
                if ($prop == "params")
                {
                    $params = new JRegistry($postData['params']);
                    $object->params = $params->toString();
                }
                else
                    $object->$prop = $postData[$prop];
            }

        }

        if ($object->id == 0 || $object->id == null)
            $object->created = JFactory::getDate()->toSql();

        $object->modified = JFactory::getDate()->toSql();

        if (!$row->bind($object))
        {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        if (!$row->check())
        {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }
        if (!$row->store())
        {
            $this->setError($this->_db->getErrorMsg());
            return false;
        }

        return $row->id;
    }

    public function delete($id)
    {
        $query = $this->_db->getQuery(true);
        $query->delete($this->_db->qn("#__opengraph_object"))
            ->where($this->_db->qn("id") . '=' . $id);
        $this->_db->setQuery($query);
        $this->_db->execute();

        $query = $this->_db->getQuery(true);
        $query->delete($this->_db->qn("#__opengraph_action_object"))
            ->where($this->_db->qn("object_id") . '=' . $id);
        $this->_db->setQuery($query);
        $this->_db->execute();

        $query = $this->_db->getQuery(true);
        $query->delete($this->_db->qn("#__opengraph_activity"))
            ->where($this->_db->qn("object_id") . '=' . $id);
        $this->_db->setQuery($query);
        $this->_db->execute();
    }

    public function getObjects($publishedOnly = false)
    {
        $query = $this->_db->getQuery(true);
        $query->select('*')
            ->from($this->_db->qn('#__opengraph_object'));
        if ($publishedOnly)
            $query->where($this->_db->qn('published') . '=1');
        $this->_db->setQuery($query);
        return $this->_db->loadObjectList();
    }
}