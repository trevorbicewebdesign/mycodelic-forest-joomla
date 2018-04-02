<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2018 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.2.5
 * @build-date      2018/03/13
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

class TableJFBConnectOpenGraphAction extends JTable
{
    public $id = null;
    public $plugin = null;
    public $system_name = null;
    public $display_name = null;
    public $action = null;
    public $fb_built_in = false;
    public $can_disable = true;
    public $params = null;
    public $published = 0;
    public $created = null;
    public $modified = null;

	function __construct(&$db)
	{
		parent::__construct('#__opengraph_action', 'id', $db);
	}
}