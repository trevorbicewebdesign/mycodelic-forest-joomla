<?php
/**
 * @package    RSFirewall!
 * @copyright  (c) 2009 - 2020 RSJoomla!
 * @link       https://www.rsjoomla.com
 * @license    GNU General Public License http://www.gnu.org/licenses/gpl-3.0.en.html
 */

defined('_JEXEC') or die('Restricted access');

class RsfirewallTableSnapshots extends JTable
{
	/**
	 * Primary Key
	 *
	 * @var int
	 */
	public $id = null;
	
	public $user_id = null;
	public $snapshot = null;
	public $type = null;
		
	/**
	 * Constructor
	 *
	 * @param object Database connector object
	 */
	function __construct(& $db) {
		parent::__construct('#__rsfirewall_snapshots', 'id', $db);
	}
}