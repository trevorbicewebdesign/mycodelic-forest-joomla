<?php
// $HeadURL: https://joomgallery.org/svn/joomgallery/JG-3/Modules/JoomTreeview/trunk/tmpl/default.php $
// $Id: default.php 4297 2013-06-06 21:21:10Z erftralle $
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
defined('_JEXEC') or die('Restricted access'); ?>

<?php if(!$jg_installed) : ?>
  <p class="alert alert-warning">
<?php echo JText::sprintf('MOD_JGTREEVIEW_JOOMGALLERY_NOT_INSTALLED_LBL', $jg_minversion); ?>
  </p>
<?php elseif($dberror != '') : ?>
  <p class="alert alert-error">
<?php echo $dberror; ?>
  </p>
<?php elseif(empty($jgcat_rows)) : ?>
  <p class="alert alert-info">
<?php echo JText::_('MOD_JGTREEVIEW_NO_CATEGORIES_FOUND_LBL'); ?>
  </p>
  <?php else : ?>
  <div class="jgtreeview">
<?php   if($jgTreeviewHelper->getConfig('show_open_close_all') == 1) : ?>
    <div class="jgtreeview_header">
      <a href="javascript: jgTreeView<?php echo $jgTreeviewHelper->getConfig('modid'); ?>.openAll();">
        <?php echo JText::_('MOD_JGTREEVIEW_OPEN_ALL_LBL'); ?>&nbsp;&nbsp;</a>
      <a href="javascript: jgTreeView<?php echo $jgTreeviewHelper->getConfig('modid');?>.closeAll();">
        <?php echo JText::_('MOD_JGTREEVIEW_CLOSE_ALL_LBL'); ?></a>
    </div>
<?php   endif; ?>
    <script type="text/javascript" language="javascript">
    <!--
<?php echo $jgTreeviewHelper->buildTreeview($jgcat_rows); ?>
    // -->
    </script>
<?php   if($jgTreeviewHelper->getConfig('show_credits') == 1) : ?>
    <div class="jgtreeview_footer">
      <?php echo JText::_('MOD_JGTREEVIEW_ICONS_BY_LBL'); ?>&nbsp;
      <a href="http://www.famfamfam.de" target="_blank" title="" >
        www.famfamfam.com</a>
    </div>
<?php   endif; ?>
  </div>
<?php endif; ?>