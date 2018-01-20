<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_banners
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');


?>
<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_aedman
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

//JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

JHtml::_('bootstrap.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('formbehavior.chosen', 'select');

$user       = JFactory::getUser();
$userId     = $user->get('id');
/*
$listOrder  = $this->escape($this->state->get('list.ordering'));
$listDirn   = $this->escape($this->state->get('list.direction'));
$params     = (isset($this->state->params)) ? $this->state->params : new JObject;
$archived   = $this->state->get('filter.state') == 2 ? true : false;
$trashed    = $this->state->get('filter.state') == -2 ? true : false;
*/
?>
<style>
.js-stools-btn-filter {
	display:	none;	
}
</style>
<form action="<?php echo JRoute::_('index.php?option=com_aedman&view=clients'); ?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span2">
		<?php // echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
		<?php
		// Search tools bar
		//echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this));
		?>
		<?php if (empty($this->items)) : ?>
			<div class="alert alert-no-items">
				<?php echo JText::_('JGLOBAL_NO_MATCHING_RESULTS'); ?>
			</div>
		<?php else : ?>
			<table class="table table-striped">
				<thead>
					<tr>
						<th width="1%" class="center">
							<?php echo JHtml::_('grid.checkall'); ?>
						</th>
						<th>
							<?php echo JHtml::_('searchtools.sort', 'COM_AEDMAN_HEADING_CLIENT_NAME', 		'a.client_name', 	$listDirn, $listOrder); ?>
						</th>
						<th width="20%" class="hidden-phone">
							<?php echo JHtml::_('searchtools.sort', 'COM_AEDMAN_HEADING_CONTACT_NAME', 	'contact_name', 	$listDirn, $listOrder); ?>
						</th>
						<th width="10%" class="nowrap hidden-phone">
							<?php echo JHtml::_('searchtools.sort', 'COM_AEDMAN_HEADING_CONTACT_PHONE', 	'a.contact_phone', 	$listDirn, $listOrder); ?>
						</th>
						<th width="10%" class="nowrap hidden-phone">
							<?php echo JHtml::_('searchtools.sort', 'COM_AEDMAN_HEADING_CONTACT_EMAIL', 	'a.contact_email', 	$listDirn, $listOrder); ?>
						</th>
						<th width="1%" class="nowrap hidden-phone">
							<?php echo JHtml::_('searchtools.sort', 'JGRID_HEADING_ID', 				'a.id', 			$listDirn, $listOrder); ?>
						</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<td colspan="8">
							<?php echo $this->pagination->getListFooter(); ?>
						</td>
					</tr>
				</tfoot>
				<tbody>
					<?php 
					/*
					foreach ($this->items as $i => $item) :
						$canCreate  = $user->authorise('core.create',     'com_aedman');
						$canEdit    = $user->authorise('core.edit',       'com_aedman');
						$canCheckin = $user->authorise('core.manage',     'com_checkin') || $item->checked_out == $user->get('id') || $item->checked_out == 0;
						$canChange  = $user->authorise('core.edit.state', 'com_aedman') && $canCheckin;
						?>
						<tr class="row<?php echo $i % 2; ?>">
							<td class="center">
								<?php echo JHtml::_('grid.id', $i, $item->id); ?>
							</td>
							<td class="small hidden-phone">
								<?php if ($item->checked_out) : ?>
									<?php echo JHtml::_('jgrid.checkedout', $i, $item->editor, $item->checked_out_time, 'clients.', $canCheckin); ?>
								<?php endif; ?>
								<?php if ($canEdit) : ?>					
									<a href="<?php echo JRoute::_('index.php?option=com_aedman&task=client.edit&id=' . (int) $item->id); ?>">
										<?php echo $item->client_name; ?></a>
								<?php else : ?>
									<?php echo $item->client_name; ?>
								<?php endif; ?>
							</td>
							<td class="small hidden-phone">
								<?php echo $item->contact_name; ?>
							</td>
							<td class="small hidden-phone">
								<?php echo $this->helper->formatPhoneNumber( $item->contact_phone ); ?>
							</td>
							<td class="center hidden-phone">
								<?php echo $item->contact_email; ?>
							</td>
							<td class="center hidden-phone">
								<?php echo $item->id; ?>
							</td>
						</tr>
					<?php endforeach; */ ?>
				</tbody>
			</table>
		<?php endif; ?>

		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
