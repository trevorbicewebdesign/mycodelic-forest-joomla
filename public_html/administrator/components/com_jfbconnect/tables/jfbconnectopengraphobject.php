<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

class TableJFBConnectOpenGraphObject extends JTable
{
	public $id = null;
    public $plugin = null;
    public $system_name = null;
    public $display_name = null;
    public $type = null;
    public $published = 0;
    public $fb_built_in = false;
    public $params = "";
    public $created = null;
    public $modified = null;

	function __construct(&$db)
	{
		parent::__construct('#__opengraph_object', 'id', $db);
	}
}