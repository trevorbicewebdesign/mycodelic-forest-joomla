<?php
/**
 * @package        Joomla.Administrator
 * @subpackage    com_users
 * @copyright    Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Load the tooltip behavior.
JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
JHtml::_('behavior.modal');

/*
$canDo = UsersHelper::getActions();
$listOrder = $this->escape($this->state->get('list.ordering'));
$listDirn = $this->escape($this->state->get('list.direction'));
$loggeduser = JFactory::getUser();
 */


?>
<?php
$db = JFactory::getDBO();

$query = "
SELECT SUM(total) FROM jos_campbudget_receipts 
WHERE season = 2022
";
$db->setQuery($query);
$user_receipts = $db->loadObjectlist();
print_r($user_receipts);
echo "<br/>";

$query = "
SELECT SUM(total), user_id FROM jos_campbudget_receipts 
WHERE season = 2022
GROUP BY user_id
";
$db->setQuery($query);
$user_receipts = $db->loadObjectlist();
echo "<br/>";
print_r($user_receipts);

$query = "
SELECT SUM(total), user_id FROM jos_campbudget_receipts 
WHERE season = 2022
AND reimbursed='N'
GROUP BY user_id
";
$db->setQuery($query);
$user_receipts = $db->loadObjectlist();
echo "<br/>";
print_r($user_receipts);

$query = "
SELECT SUM(total), user_id FROM jos_campbudget_receipts 
WHERE season = 2022
AND reimbursed='Y'
GROUP BY user_id
";
$db->setQuery($query);
$user_receipts = $db->loadObjectlist();
echo "<br/>";
print_r($user_receipts);

$query = "
SELECT SUM(total), user_id FROM jos_campbudget_receipts 
WHERE season = 2022
AND reimbursed='N'
GROUP BY user_id
";
$db->setQuery($query);
$user_receipts = $db->loadObjectlist();
echo "<br/>";
print_r($user_receipts);

$query = "
SELECT SUM(subtotal) FROM jos_campbudget_receipt_items 
WHERE type = 'Porto Potties'
";
$db->setQuery($query);
$user_receipts = $db->loadObjectlist();
echo "<br/>";
print_r($user_receipts);

echo "<br/>";echo "<br/>";echo "<br/>";
?>
<form action="<?php echo JRoute::_('index.php?option=com_campbudget&view=inventory'); ?>" method="post" name="adminForm" id="adminForm">
	<div id="j-sidebar-container" class="span2">
		<?php echo $this->sidebar; ?>
	</div>
	<div id="j-main-container" class="span10">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="1%" align="left">
					<input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
				</th>
				<th class="nowrap" width="10%" align="left">
					<?php echo JHtml::_('grid.sort', 'Id', 'i.id', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="10%" align="left">
					<?php echo JHtml::_('grid.sort', 'User Id', 'i.user_id', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="10%" align="left">
					<?php echo JHtml::_('grid.sort', 'User', 'i.user', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Quantity', 'i.quantity', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="10%" align="left">
					<?php echo JHtml::_('grid.sort', 'Date', 'i.date', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'PDF Path', 'i.pdf_path', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Tax', 'i.tax', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Total', 'i.total', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Donation', 'i.donation', $listDirn, $listOrder); ?>
				</th>
				<th class="nowrap" width="5%" align="left">
					<?php echo JHtml::_('grid.sort', 'Reimbursed', 'i.reimbursed', $listDirn, $listOrder); ?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php
$j = 1;
$total = 0;
foreach ($this->items as $key => $item):
	$user = jFactory::getUser($item->user_id);
	$link = JRoute::_('index.php?option=com_campbudget&task=receipt.edit&id=' . (int) $item->id);
    ?>
					<tr>
						<td><?php echo JHtml::_('grid.id', $item->id, $j); ?></td>
						<td><a href="<?php echo $link; ?>"><?php echo $item->id; ?></a></td>
						<td><?php echo $item->user_id; ?></td>
						<td><?php echo $user->name; ?></td>
						<td><?php echo $item->quantity; ?></td>
						<td><?php echo $item->date; ?></td>
						<td><?php echo $item->pdf_path; ?></td>
						<td><?php echo $item->tax; ?></td>
						<td><?php echo $item->total; ?></td>
						<td><?php echo $item->donation; ?></td>
						<td><?php echo $item->reimbursed; ?></td>
					</tr>
				<?php $j++;endforeach;?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="9">
					<?php echo $total; ?><br/>
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
	</table>

	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
	</div>
</form>
