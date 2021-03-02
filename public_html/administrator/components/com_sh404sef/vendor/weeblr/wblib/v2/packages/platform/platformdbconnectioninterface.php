<?php
/**
 * sh404SEF - SEO extension for Joomla!
 *
 * @author                  Yannick Gaultier
 * @copyright               (c) Yannick Gaultier - Weeblr llc - 2020
 * @package                 sh404SEF
 * @license                 http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @version                 4.21.0.4206
 *
 * 2020-06-26
 */

namespace Weeblr\Wblib\V_SH4_4206\Platform;

//
/* Security check to ensure this file is being included by a parent file.*/
defined('WBLIB_V_SH4_4206_ROOT_PATH') or die();

/**
 *
 * Holds data for a database instance description
 *
 * @author weeblr
 *
 */
interface Platformdbconnectioninterface
{
	public function getQuery();

	public function getPrefix();

	public function quote($data, $escape = true);

	public function quoteName($data);

	public function quoteTable($data);

	public function escape($data, $extra = false);

	public function setQuery($query, $offset = 0, $limit = 0);

	public function loadAssoc();

	public function loadAssocList($key = null, $column = null);

	public function loadColumn($offset = 0);

	public function loadObject();

	public function loadObjectList($key = '');

	public function loadResult();

	public function loadRow();

	public function loadRowList($key = null);

	public function getInsertId();

	public function execute();

}
