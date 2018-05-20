<?php
/**
 * @package      Projectfork
 * @subpackage   Repository
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2012 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();

$function   = JRequest::getCmd('function', 'pfSelectAttachment');
$list_order = $this->escape($this->state->get('list.ordering'));
$list_dir   = $this->escape($this->state->get('list.direction'));
$project    = (int) $this->state->get('filter.project');
$user       = JFactory::getUser();
$uid        = $user->get('id');
$dir        = $this->items['directory'];

$link_append = '&layout=modal&tmpl=component&function=' . $function;
$access      = PFrepoHelper::getActions('directory', $dir->id);

$allowed      = PFrepoHelper::getAllowedFileExtensions();
$config       = JComponentHelper::getParams('com_pfrepo');
$filter_admin = $config->get('filter_ext_admin');
$is_admin     = $user->authorise('core.admin');

// Restrict file extensions?
$txt_upload = '';

if ($is_admin && !$filter_admin) $allowed = array();

if (count($allowed)) {
    $txt_upload = JText::_('COM_PROJECTFORK_UPLOAD_ALLOWED_EXT') . ' ' . implode(', ', $allowed);
}
?>
<div id="projectfork" class="category-list<?php echo $this->pageclass_sfx;?> view-repository">

    <?php if ($this->params->get('show_page_heading', 1)) : ?>
        <h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
    <?php endif; ?>

    <div class="clearfix"></div>

    <div class="cat-items">
        <form name="adminForm" id="adminForm" action="<?php echo JRoute::_(PFrepoHelperRoute::getRepositoryRoute($dir->project_id, $dir->id) . $link_append); ?>" method="post" enctype="multipart/form-data">

            <fieldset class="filters">
                <div class="well btn-toolbar">
                    <div class="filter-search btn-group pull-left">
                        <input type="text" name="filter_search" placeholder="<?php echo JText::_('JSEARCH_FILTER'); ?>" id="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" />
                    </div>
                    <div class="filter-search-buttons btn-group pull-left">
                        <button type="submit" class="btn" rel="tooltip" title="<?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?>"><i class="icon-search"></i></button>
                        <button type="button" class="btn" rel="tooltip" title="<?php echo JText::_('JSEARCH_FILTER_CLEAR'); ?>" onclick="document.id('filter_search').value='';this.form.submit();"><i class="icon-remove"></i></button>
                    </div>
                    <?php if ($project) : ?>
                        <select name="filter_parent_id" class="inputbox" onchange="this.form.submit()">
                            <option value=""><?php echo JText::_('JOPTION_SELECT_DIRECTORY');?></option>
                            <?php echo JHtml::_('select.options', JHtml::_('pfrepo.pathOptions', $project), 'value', 'text', $this->state->get('filter.parent_id'));?>
                        </select>
                    <?php endif; ?>
                    <div class="clearfix"> </div>
                </div>
            </fieldset>

            <div class="clearfix"> </div>

            <?php if ($access->get('core.create') && !defined('PFDEMO')) : ?>
                <fieldset id="upload-form">
                    <div class="well btn-toolbar">
                        <div class="btn-group">
                            <input type="file" name="jform[file]" id="jform_file"/>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn" onclick="Joomla.submitbutton('fileform.save');"><?php echo JText::_('JACTION_UPLOAD'); ?></button>
                        </div>
                        <?php if (count($allowed)) : ?>
                            <div class="small">
                                <?php echo $txt_upload; ?>
                            </div>
                        <?php endif; ?>
                        <input type="hidden" name="jform[dir_id]" id="jform_dir_id" value="<?php echo $this->escape((int) $dir->id);?>"/>
                        <input type="hidden" name="jform[project_id]" id="jform_dir_id" value="<?php echo $this->escape((int) $this->state->get('filter.project'));?>"/>
                        <input type="hidden" name="jform[access]" id="jform_access" value="<?php echo $this->escape((int) $dir->access);?>"/>
                    </div>
                </fieldset>
            <?php endif; ?>

            <hr />

            <table class="adminlist table table-striped">
                <thead>
                    <tr>
                        <th width="1%">

                        </th>
                        <th width="40%">
                            <?php echo JHtml::_('grid.sort', 'JGLOBAL_TITLE', 'a.title', $list_dir, $list_order); ?>
                        </th>
                        <th>
                            <?php echo JHtml::_('grid.sort', 'JGRID_HEADING_DESCRIPTION', 'a.description', $list_dir, $list_order); ?>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php echo $this->loadTemplate('directories'); ?>
                    <?php echo $this->loadTemplate('notes'); ?>
                    <?php echo $this->loadTemplate('files'); ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">

                        </td>
                    </tr>
                </tfoot>
            </table>

            <input type="hidden" name="boxchecked" value="0" />
            <input type="hidden" name="filter_order" value="<?php echo $list_order; ?>" />
            <input type="hidden" name="filter_order_Dir" value="<?php echo $list_dir; ?>" />
            <input type="hidden" name="task" value="" />
            <input type="hidden" name="layout" value="modal" />
            <input type="hidden" name="tmpl" value="component" />
            <input type="hidden" name="function" value="<?php echo $this->escape($function);?>" />
            <?php echo JHtml::_('form.token'); ?>
        </form>
    </div>
</div>
