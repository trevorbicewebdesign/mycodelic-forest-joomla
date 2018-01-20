<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

class TableJFBConnectNotification extends JTable
{
	public $id = null;
    public $fb_request_id = null;
    public $fb_user_to = null;
    public $fb_user_from = null;
    public $jfbc_request_id = null;
    public $status = 0;
    public $created = null;
    public $modified = null;

	function __construct(&$db)
	{
		parent::__construct('#__jfbconnect_notification', 'id', $db);
	}

}