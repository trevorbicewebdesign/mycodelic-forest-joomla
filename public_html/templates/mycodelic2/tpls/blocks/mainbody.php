<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php

/**
 * Mainbody 3 columns, content in center: sidebar1 - content - sidebar2
 */

// positions configuration
$sidebara = 'sidebar-a';
$sidebarb = 'sidebar-b';

$sidebara = $this->countModules($sidebara) ? $sidebara : false;
$sidebarb = $this->countModules($sidebarb) ? $sidebarb : false;
?>
<?php
// detect layout
if ($sidebara && $sidebarb) {
	$this->loadBlock('mainbody/two-sidebar', array('sidebar1' => $sidebara, 'sidebar2' => $sidebarb));
} elseif ($sidebara) {
	$this->loadBlock('mainbody/one-sidebar-left', array('sidebar' => $sidebara));
} elseif ($sidebarb) {
	$this->loadBlock('mainbody/one-sidebar-right', array('sidebar' => $sidebarb));
} else {
	$this->loadBlock('mainbody/no-sidebar');
}
?>