<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-3/Modules/JoomTreeview/trunk/changelog.php $
// $Id: changelog.php 4297 2013-06-06 21:21:10Z erftralle $
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
?>

CHANGELOG MOD_JGTREEVIEW (since Version 2.0 BETA )

Legende / Legend:

* -> Security Fix
# -> Bug Fix
+ -> Addition
^ -> Change
- -> Removed
! -> Note

-------------------------------------------------------------------
Version 3.1 BETA
-------------------------------------------------------------------
20130606
+ Password protected categories
# Parameter 'locked' was not passed correctly to dtree script
^ Code style, minor changes

-------------------------------------------------------------------
Version 3.0 BETA
-------------------------------------------------------------------
20130218
^ DS -> '/'
+ Use Bootstrap classes in XML file
+ Use of color picker in module configuration
+ Layout option added to module configuration
20130308
+ New module option 'Owner mode'
+ New module option to link the tree nodes to the standard detail view
^ Use Exception handling in database queries
^ Use of JInput instead of JRequest
^ Minor changes, code style

-------------------------------------------------------------------
Version 2.0
-------------------------------------------------------------------
20120903
^ STRICT standards
^ Revised and improved dutch translation - thanks to the dutch
  translation team at
  www.transifex.com/projects/p/joomgallery-extensions/language/nl_NL/

-------------------------------------------------------------------
Version 2.0 BETA2
-------------------------------------------------------------------
20120120
# Use of database field 'lft' instead of deprecated field 'ordering'
  when sorting categories

-------------------------------------------------------------------
Version 2.0 BETA (for JoomGallery 2)
-------------------------------------------------------------------
20111012
^ assets moved to media/mod_jgtreeview
+ Update server added

20110924
^ Language constants renamed (Joomla! standards)
^ Changes due to JoomGallery's new category structure and the
  use of JTableNested for _JOOM_TABLE_CATEGORIES
- Firebug code removed
^ more adaptions regarding to JDatabaseQuery

20110508
! Code base JoomTreeview 1.5.7.1
^ Adaptions for Joomla 1.7! compatibility (language files, XML files
  , parameters, JDatabaseQuery)