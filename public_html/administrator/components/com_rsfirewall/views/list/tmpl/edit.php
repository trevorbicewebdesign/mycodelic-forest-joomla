<?php
/**
 * @package    RSFirewall!
 * @copyright  (c) 2009 - 2020 RSJoomla!
 * @link       https://www.rsjoomla.com
 * @license    GNU General Public License http://www.gnu.org/licenses/gpl-3.0.en.html
 */

defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
?>
<div class="com-rsfirewall-tooltip"><?php echo JText::sprintf('COM_RSFIREWALL_YOUR_IP_ADDRESS_IS', $this->escape($this->ip)); ?></div>

<form action="<?php echo JRoute::_('index.php?option=com_rsfirewall&view=list&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate form-horizontal">
	<?php
	foreach ($this->form->getFieldset() as $field)
	{
		echo $this->form->renderField($field->fieldname);
	}
	?>
	
	<div>
		<?php echo JHtml::_('form.token'); ?>
		<input type="hidden" name="task" value="" />
	</div>
</form>