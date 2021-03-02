<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author       Yannick Gaultier
 * @copyright    (c) Yannick Gaultier - Weeblr llc - 2020
 * @package      sh404SEF
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version      ${str.version}
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Db;

use Weeblr\Wblib\V_SH4_4206\Base;

defined('WBLIB_V_SH4_4206_ROOT_PATH') || die;

class Helper extends Base\Base
{
	const STRING = 1;
	const INTEGER = 2;

	protected $db = null;

	/**
	 * Manager constructor.
	 *
	 * Builds and store the database object
	 */
	public function __construct()
	{
		parent::__construct();

		$db = $this->factory->getThe('Weeblr\Wblib\V_SH4_4206\Platform\Joomla\Dbconnection');
		$this->db = new Db(
			$db
		);
	}

	/**
	 * Prepare, set and execute a select query, returning a single result
	 *
	 * usage:
	 *
	 * $result = Helper::selectResult( '#__sh404sef_alias', 'alias', array( 'nonsef' =>
	 * 'index.php?option=com_content&view=article&id=12')); will select the 'alias' column where nonsef column is
	 * index.php?option=com_content&view=article&id=12 Alternate where condition syntax:
	 * $result = Helper::selectResult( '#__sh404sef_alias', 'alias', 'amount > 0 and amount < ?', array( '100'));
	 * If where condition is a string, it will be used literally, with question marks replaced by parameters as
	 * passed in the next method param. These params are escaped, but the base where condition is not
	 *
	 * @param String   $table The table name
	 * @param string[] $aColList array of strings of columns to be fetched
	 * @param string   $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array    $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 * @param array    $orderBy , a list of columns to order the results
	 * @param Integer  $offset , first line of result set to select
	 * @param Integer  $lines , max number of lines to select
	 *
	 * @return mixed single value read from db
	 * @throw none (underlying database layer does throw errors)
	 */
	public function selectResult($table, $aColList = array('*'), $mWhere = '', $aWhereData = array(), $orderBy = array(), $offset = 0,
	                             $lines = 0)
	{
		return $this->setSelectQuery($table, $aColList, $mWhere, $aWhereData, $orderBy, $offset, $lines)
		            ->loadResult();
	}

	/**
	 * Prepare, set and execute a select query, returning a an array of results
	 *
	 * usage:
	 *
	 * $result = Helper::selectResult( '#__sh404sef_alias', 'alias', array( 'nonsef' =>
	 * 'index.php?option=com_content&view=article&id=12')); will select the 'alias' column where nonsef column is
	 * index.php?option=com_content&view=article&id=12 Alternate where condition syntax:
	 * $result = Helper::selectResult( '#__sh404sef_alias', 'alias', 'amount > 0 and amount < ?', array( '100'));
	 * If where condition is a string, it will be used literally, with question marks replaced by parameters as
	 * passed in the next method param. These params are escaped, but the base where condition is not
	 *
	 * @param String   $table The table name
	 * @param string[] $aColList array of strings of columns to be fetched
	 * @param string   $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array    $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 * @param array    $orderBy , a list of columns to order the results
	 * @param Integer  $offset , first line of result set to select
	 * @param Integer  $lines , max number of lines to select
	 *
	 * @return mixed single value read from db
	 * @throw none (underlying database layer does throw errors)
	 */
	public function selectColumn($table, $aColList = array('*'), $mWhere = '', $aWhereData = array(), $orderBy = array(), $offset = 0,
	                             $lines = 0)
	{
		return $this->setSelectQuery($table, $aColList, $mWhere, $aWhereData, $orderBy, $offset, $lines)
		            ->loadColumn();
	}

	/**
	 * Prepare, set and execute a select query, returning a single associative array
	 *
	 * usage:
	 *
	 * $result = Helper::selectAssoc( '#__sh404sef_alias', array('alias', 'id'), array( 'nonsef' =>
	 * 'index.php?option=com_content&view=article&id=12')); will return an array with 2 keys, alias and id, where
	 * nonsef column is index.php?option=com_content&view=article&id=12
	 *
	 * $result = Helper::selectAssoc( '#__sh404sef_alias', array('alias', 'id'), 'amount > 0 and amount < ?',
	 * array( '100')); If where condition is a string, it will be used literally, with question marks replaced by
	 * parameters as passed in the next method param. These params are escaped, but the base where condition is not
	 *
	 * @param String   $table The table name
	 * @param string[] $aColList array of strings of columns to be fetched
	 * @param string   $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array    $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 * @param array    $orderBy , a list of columns to order the results
	 * @param Integer  $offset , first line of result set to select
	 * @param Integer  $lines , max number of lines to select
	 *
	 * @return mixed single value read from db
	 * @throw none (underlying database layer does throw errors)
	 */
	public function selectAssoc($table, $aColList = array('*'), $mWhere = '', $aWhereData = array(), $orderBy = array(), $offset = 0,
	                            $lines = 0)
	{
		return $this->setSelectQuery($table, $aColList, $mWhere, $aWhereData, $orderBy, $offset, $lines)
		            ->loadAssoc();
	}

	/**
	 * Prepare, set and execute a select query, returning a an array of associative arrays
	 *
	 * usage:
	 *
	 * $result = Helper::selectAssoc( '#__sh404sef_alias', array('alias', 'id'), array( 'nonsef' =>
	 * 'index.php?option=com_content&view=article&id=12')); will return an array of arrays with 2 keys, alias and id,
	 * where nonsef column is index.php?option=com_content&view=article&id=12
	 *
	 * $result = Helper::selectAssoc( '#__sh404sef_alias', array('alias', 'id'), 'amount > 0 and amount < ?',
	 * array( '100')); If where condition is a string, it will be used literally, with question marks replaced by
	 * parameters as passed in the next method param. These params are escaped, but the base where condition is not
	 *
	 * @param String   $table The table name
	 * @param string[] $aColList array of strings of columns to be fetched
	 * @param string   $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array    $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 * @param array    $orderBy , a list of columns to order the results
	 * @param Integer  $offset , first line of result set to select
	 * @param Integer  $lines , max number of lines to select
	 * @param string   $key a column name to index the returned array with
	 *
	 * @return mixed single value read from db
	 * @throw none (underlying database layer does throw errors)
	 */
	public function selectAssocList($table, $aColList = array('*'), $mWhere = '', $aWhereData = array(), $orderBy = array(), $offset = 0,
	                                $lines = 0, $key = '')
	{
		return $this->setSelectQuery($table, $aColList, $mWhere, $aWhereData, $orderBy, $offset, $lines)
		            ->loadAssocList($key);
	}

	/**
	 * Prepare, set and execute a select query, returning a single object
	 *
	 * @param String   $table The table name
	 * @param string[] $aColList array of strings of columns to be fetched
	 * @param string   $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array    $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 * @param array    $orderBy , a list of columns to order the results
	 * @param Integer  $offset , first line of result set to select
	 * @param Integer  $lines , max number of lines to select
	 *
	 * @return mixed single value read from db
	 * @throw none (underlying database layer does throw errors)
	 */
	public function selectObject($table, $aColList = array('*'), $mWhere = '', $aWhereData = array(), $orderBy = array(), $offset = 0,
	                             $lines = 0)
	{
		return $this->setSelectQuery($table, $aColList, $mWhere, $aWhereData, $orderBy, $offset, $lines)
		            ->loadObject();
	}

	/**
	 * Prepare, set and execute a select query, returning a an object list
	 *
	 * @param String   $table The table name
	 * @param string[] $aColList array of strings of columns to be fetched
	 * @param string   $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array    $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 * @param array    $orderBy , a list of columns to order the results
	 * @param Integer  $offset , first line of result set to select
	 * @param Integer  $lines , max number of lines to select
	 * @param string   $key a column name to index the returned array with
	 *
	 * @return array
	 * @throw none (underlying database layer does throw errors)
	 */
	public function selectObjectList($table, $aColList = array('*'), $mWhere = '', $aWhereData = array(), $orderBy = array(), $offset = 0,
	                                 $lines = 0, $key = '')
	{
		// have db driver create the sql query
		return $this->setSelectQuery($table, $aColList, $mWhere, $aWhereData, $orderBy, $offset, $lines)
		            ->loadObjectList($key);
	}

	/**
	 * Prepare, set and execute a count query
	 *
	 * @param String $table The table name
	 * @param String $column optional column to be counted (defaults to *)
	 * @param string $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array  $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 *
	 * @return int
	 */
	public function count($table, $column = '*', $mWhere = '', $aWhereData = array())
	{
		// have db driver create the sql query
		$read = $this->db->setCountQuery($table, $column, $mWhere, $aWhereData)
		                 ->loadResult();
		return empty($read) ? 0 : $read;
	}

	/**
	 * Prepare, set and execute a delete query
	 *
	 * @param String $table The table name
	 * @param string $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array  $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 *
	 * @return $this
	 */
	public function delete($table, $mWhere = '', $aWhereData = array())
	{
		$this->db->setDeleteQuery($table, $mWhere, $aWhereData)->execute();

		return $this;
	}

	/**
	 * Prepare, set and execute a delete query based on a
	 * list of column value
	 *
	 * @param String $table The table name
	 * @param String $mwhereColumn name of column to compare to list of values
	 * @param Array  $aWhereData List of column values that should be deleted
	 * @param Integer if self::INTEGER, list will be 'intvaled', else quoted
	 *
	 * @return $this
	 */
	public function deleteIn($table, $mwhereColumn, $aWhereData, $type = self::STRING)
	{
		if (empty($mwhereColumn) || empty($aWhereData))
		{
			return;
		}

		// build a list of ids to read
		$wheres = $type == self::INTEGER ? $this->arrayToIntvalList($aWhereData) : $this->arrayToQuotedList($aWhereData);

		// perform deletion
		return $this->delete($table, $this->db->quoteName($mwhereColumn) . ' in (' . $wheres . ')');
	}

	/**
	 * Prepare, set and execute and insert query
	 *
	 * @param String $table The table name
	 * @param Array  $aData array of values pairs ( ie 'columnName' => 'columnValue')
	 *
	 * @return $this
	 */
	public function insert($table, $aData)
	{
		$this->db->setInsertQuery($table, $aData)
		         ->execute();

		return $this;
	}

	/**
	 * Prepare, set and execute an update query
	 *
	 * @param String $table The table name
	 * @param Array  $aData array of values pairs ( ie 'columnName' => 'columnValue')
	 * @param string $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array  $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 *
	 * @return $this
	 */
	public function update($table, $aData, $mWhere = '', $aWhereData = array())
	{
		$this->db->setUpdateQuery($table, $aData, $mWhere, $aWhereData)
		         ->execute();

		return $this;
	}

	/**
	 * Prepare, set and execute an update query on a list
	 * of items
	 *
	 * @param String $table The table name
	 * @param Array  $aData array of values pairs ( ie 'columnName' => 'columnValue')
	 * @param String $mwhereColumn name of column to compare to list of values
	 * @param Array  $aWhereData List of column values that should be updated
	 * @param Integer if self::INTEGER, list will be 'intvaled', else quoted
	 *
	 * @return object the db object
	 */
	public function updateIn($table, $aData, $mwhereColumn, $aWhereData, $type = self::STRING)
	{
		if (empty($mwhereColumn) || empty($aWhereData))
		{
			return;
		}

		// build a list of ids to read
		$wheres = $type == self::INTEGER ? $this->arrayToIntvalList($aWhereData) : $this->arrayToQuotedList($aWhereData);

		// perform deletion
		return $this->update($table, $aData, $this->db->quoteName($mwhereColumn) . ' in (' . $wheres . ')');
	}

	/**
	 * Prepare, set and execute an insert or update query
	 *
	 * @param String $table The table name
	 * @param Array  $aData An array of field to be inserted in the db ('columnName' => 'columnValue')
	 * @param string $mWhere ( ie 'columnName' => 'columnValue') : a where clause is created like so : WHERE
	 *     `columnName` = 'columnValue'. columnValue is escaped before being used
	 * @param array  $aWhereData Used only if $aWhere is a string. In such case, '?' place holders will be replaced by
	 *     this array values, escaped
	 *
	 * @return $this
	 */
	public function insertUpdate($table, $aData, $mWhere = '', $aWhereData = array())
	{
		$this->db->setInsertUpdateQuery($table, $aData, $mWhere, $aWhereData)->execute();

		return $this;
	}

	/**
	 * Prepare, set and execute a custom database query
	 *
	 * @param String $query A litteral sql query
	 * @param string $opType optional forced operation type for this operation
	 *
	 * @return $this
	 */
	public function query($query, $opType = '')
	{
		$this->setQuery($query, $opType)
		     ->execute();

		return $this;
	}

	/**
	 * Set a custom database query, so that
	 * another method can be chained to execute it
	 *
	 * @param String $query A litteral sql query
	 *
	 * @return $this
	 */
	public function setQuery($query)
	{
		$this->db->setQuery($query);

		return $this;
	}

	/**
	 *
	 * Prepare a query for running, quoting or name quoting some
	 * of its constituents
	 * ?? will be replaced with name quoted data from the $nameQuoted parameter
	 * ? will be replaced with quoted data from the $quoted parameter
	 *
	 * Example:
	 *   $query = 'select ?? from ?? where ?? <> ?'
	 *   with
	 *     $nameQuoted = array( 'id', '#__table', 'counter')
	 *     $quoted = array( 'test')
	 *
	 * will result in running
	 *
	 *   select `id` from `#__table` where `counter` <> 'test'
	 *
	 *
	 * @param string $query
	 * @param array  $nameQuoted
	 * @param array  $quoted
	 * @param string $namePlaceHolder
	 * @param string $dataPlaceHolder
	 *
	 * @return $this
	 */
	public function quoteQuery($query, $nameQuoted = array(), $quoted = array(), $namePlaceHolder = '??', $dataPlaceHolder = '?')
	{
		// save query for error message
		$newQuery = $this->db->quoteQuery($query, $nameQuoted, $quoted, $namePlaceHolder, $dataPlaceHolder);
		$this->db->setQuery($newQuery);

		return $this;
	}

	/**
	 *
	 * Runs a query, after quoting or name quoting some
	 * of its constituents
	 * ?? will be replaced with name quoted data from the $nameQuoted parameter
	 * ? will be replaced with quoted data from the $quoted parameter
	 *
	 * Example:
	 *   $query = 'select ?? from ?? where ?? <> ?'
	 *   with
	 *     $nameQuoted = array( 'id', '#__table', 'counter')
	 *     $quoted = array( 'test')
	 *
	 * will result in running
	 *
	 *   select `id` from `#__table` where `counter` <> 'test'
	 *
	 *
	 * @param string $query
	 * @param array  $nameQuoted
	 * @param array  $quoted
	 * @param string $namePlaceHolder
	 * @param string $dataPlaceHolder
	 *
	 * @return $this
	 */
	public function runQuotedQuery($query, $nameQuoted = array(), $quoted = array(), $namePlaceHolder = '??', $dataPlaceHolder = '?')
	{
		// save query for error message
		$newQuery = $this->db->quoteQuery($query, $nameQuoted, $quoted, $namePlaceHolder, $dataPlaceHolder);

		return $this->query($newQuery);
	}

	/**
	 *
	 * Asks DB to quote a string
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public function quote($string)
	{
		return $this->db->quote($string);
	}

	/**
	 *
	 * Asks db to name quote a string
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public function quoteName($string)
	{
		return $this->db->quoteName($string);
	}

	/**
	 *
	 * Asks db to name quote table name a string
	 *
	 * @param $tableName
	 *
	 * @return string
	 */
	public function quoteTable($tableName)
	{
		return $this->db->quoteTable($tableName);
	}

	/**
	 * Quote an array of value and turn it into a list
	 * of separated, name quoted elements
	 *
	 * @param array  $data
	 * @param string $glue
	 *
	 * @return string
	 */
	public function arrayToNameQuotedList($data, $glue = ',')
	{
		return $this->_arrayToQuotedList($data, $nameQuote = true, $glue);
	}

	/**
	 * Quote an array of value and turn it into a list
	 * of separated, quoted elements
	 *
	 * @param array  $data
	 * @param string $glue
	 *
	 * @return string
	 */
	public function arrayToQuotedList($data, $glue = ',')
	{
		return $this->_arrayToQuotedList($data, $nameQuote = false, $glue);
	}

	/**
	 * Quote an array of value and turn it into a list
	 * of separated, quoted elements
	 *
	 * @param array   $data
	 * @param boolean $nameQuote if true, data is namedQuoted, otherwise Quoted
	 * @param string  $glue
	 *
	 * @return string
	 */
	private function _arrayToQuotedList($data, $nameQuote = false, $glue = ',')
	{
		$list = '';
		if (empty($data) || !is_array($data))
		{
			return $list;
		}

		$values = array();
		foreach ($data as $value)
		{
			$values[] = $nameQuote ? $this->db->quoteName($value) : $this->db->quote($value);
		}

		$list = implode($glue, $values);

		return $list;
	}

	/**
	 * Intval an array of value and turn it into a list
	 * of separated, quoted elements
	 *
	 * @param array  $data
	 * @param string $glue
	 *
	 * @return string
	 */
	public function arrayToIntvalList($data, $glue = ',')
	{
		$list = '';
		if (empty($data) || !is_array($data))
		{
			return $list;
		}

		$values = array();
		foreach ($data as $value)
		{
			$values[] = (int) $value;
		}

		$list = implode($glue, $values);

		return $list;
	}

	protected function setSelectQuery($table, $aColList = array('*'), $mWhere = '', $aWhereData = array(), $orderBy = array(), $offset = 0,
	                                  $lines = 0)
	{
		return $this->db->setSelectQuery($table, $aColList, $mWhere, $aWhereData, $orderBy, $offset, $lines);
	}
}
