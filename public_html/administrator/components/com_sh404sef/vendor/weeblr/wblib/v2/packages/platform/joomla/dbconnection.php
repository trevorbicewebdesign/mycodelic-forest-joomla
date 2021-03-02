<?php
/**
 * ant_title_ant
 *
 * @author       ant_author_ant
 * @copyright    ant_copyright_ant
 * @package      ant_package_ant
 * @license      ant_license_ant
 * @version      ant_version_ant
 *
 * ant_current_date_ant
 */

namespace Weeblr\Wblib\V_SH4_4206\Platform\Joomla;

use Weeblr\Wblib\V_SH4_4206\Platform\Platformdbconnectioninterface;

/* Security check to ensure this file is being included by a parent file.*/
defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

/**
 *
 * Interface to Joomla! database driver
 *
 * @author weeblr
 *
 */
Class Dbconnection implements Platformdbconnectioninterface
{
	protected $db = null;

	public function __construct($uniqueId = '', $db = null)
	{
		$this->_uniqueId = wbInitEmpty($uniqueId, \JFactory::getConfig()->get('secret'));
		$this->db        = wbInitEmpty($db, \JFactory::getDbo());
	}

	public function getQuery()
	{
		return $this->db->getQuery();
	}

	public function getPrefix()
	{
		return $this->db->getPrefix();
	}

	public function quote($data, $escape = true)
	{
		return $this->db->quote($data, $escape = true);
	}

	public function quoteName($data)
	{
		return $this->db->quoteName($data);
	}

	public function quoteTable($data)
	{
		return $this->db->quoteName($data);
	}

	public function escape($data, $extra = false)
	{
		return $this->db->escape($data);
	}

	public function setQuery($query, $offset = 0, $limit = 0)
	{
		return $this->db->setquery($query, $offset, $limit);
	}

	public function loadAssoc()
	{
		return $this->db->loadAssoc();
	}

	public function loadAssocList($key = null, $column = null)
	{
		return $this->db->loadAssocList($key, $column);
	}

	public function loadColumn($offset = 0)
	{
		return $this->db->loadColumn($offset);
	}

	public function loadObject()
	{
		return $this->db->loadObject();
	}

	public function loadObjectList($key = '')
	{
		return $this->db->loadObjectList($key);
	}

	public function loadResult()
	{
		return $this->db->loadResult();
	}

	public function loadRow()
	{
		return $this->db->loadRow();
	}

	public function loadRowList($key = null)
	{
		return $this->db->loadRowList($key);
	}

	public function getInsertId()
	{
		return $this->db->insertId();
	}

	public function execute()
	{
		return $this->db->execute();
	}
}
