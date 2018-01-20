<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

class TableConfig extends JTable
{
	public $id = null;

	public $setting = null;
	public $value = null;

	public $created_at = null;
	public $updated_at = null;

	function __construct(&$db)
	{
		parent::__construct('#__jfbconnect_config', 'id', $db);
	}
}