<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

class TableJFBConnectRequest extends JTable
{
	public $id = null;
	public $published = null;
	public $title = null;
	public $message = null;
	public $destination_url = null;
	public $thanks_url = null;
	public $breakout_canvas = false;
	public $created = null;
	public $modified = null;

	function __construct(&$db)
	{
		parent::__construct('#__jfbconnect_request', 'id', $db);
	}
}