<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-3/Modules/JoomTreeview/trunk/mod_jgtreeview.php $
// $Id: mod_jgtreeview.php 4297 2013-06-06 21:21:10Z erftralle $
/**
* Module JoomGallery Treeview
* by JoomGallery::Project Team
* @package JoomGallery
* @copyright JoomGallery::Project Team
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
*
* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU General Public License as published by the Free Software
* Foundation, either version 2 of the License, or (at your option) any later
* version.
*
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY, without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.
* See the GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License along with
* this program; if not, write to the Free Software Foundation, Inc.,
* 51 Franklin St, Fifth Floor, Boston, MA 02110, USA
*/

// No direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.filesystem.file');

$jg_installed  = false;
$jg_ifpath     = JPATH_ROOT.'/components/com_joomgallery/interface.php';
$jg_minversion = '3.1';

if(JFile::exists($jg_ifpath))
{
  // Include JoomGallery's interface class
  require_once $jg_ifpath;

  // Include helper functions only once
  require_once dirname(__FILE__).'/helper.php';

  // Create an instance of the helper object
  $jgTreeviewHelper = new modJgTreeViewHelper();

  // Check gallery version
  if($jgTreeviewHelper->getGalleryVersion() >= $jg_minversion)
  {
    // Correct version of JoomGallery seems to be installed
    $jg_installed = true;

    // Get the categories
    $jgcat_rows = $jgTreeviewHelper->fillObject($params, $dberror, $module->id);
  }
}
// Show JoomGallery's category tree
require JModuleHelper::getLayoutPath('mod_jgtreeview', $params->get('layout', 'default'));