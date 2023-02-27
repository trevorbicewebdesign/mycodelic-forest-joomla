<?php
/**
* @package RSForm! Pro
* @copyright (C) 2007-2019 www.rsjoomla.com
* @license GPL, http://www.gnu.org/copyleft/gpl.html
*/

defined('_JEXEC') or die('Restricted access');

$showDescriptions = $this->params->get('show_descriptions', 0);

JHtml::_('behavior.keepalive');
JHtml::_('script', 'com_rsform/script.js', array('relative' => true, 'version' => 'auto'));
JHtml::_('stylesheet', 'com_rsform/front.css', array('relative' => true, 'version' => 'auto'));

eval($this->directory->EditScript);
?>

<script type="text/javascript">
function directorySave(task) {
	var form = document.getElementById('directoryEditForm');
	form.task.value = task;
	form.submit();
}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_rsform&view=directory&layout=edit&id='.$this->app->input->getInt('id',0)); ?>" method="post" name="adminForm" id="directoryEditForm" enctype="multipart/form-data">
	<div class="rsform-dir-edit-container">
		<?php
		foreach ($this->fields as $field)
		{
			$caption        = $field[RSFORM_DIR_CAPTION] . $field[RSFORM_DIR_REQUIRED];
			$showTooltip    = $showDescriptions && $field[RSFORM_DIR_DESCRIPTION];
			?>
			<div class="rsform-dir-row">
				<div class="rsform-dir-caption">
					<?php
					if ($showTooltip)
					{
						echo '<div class="rsform-dir-tooltip">';
					}
					echo $caption;
					if ($showTooltip)
					{
						echo '<span class="rsform-dir-tooltiptext">' . $field[RSFORM_DIR_DESCRIPTION] . '</span>';
						echo '</div>';
					}
					?>
				</div>
				<div class="rsform-dir-input">
					<?php
					echo $field[RSFORM_DIR_INPUT];

					if (!empty($field[RSFORM_DIR_VALIDATION]))
					{
						echo $field[RSFORM_DIR_VALIDATION];
					}
					?>
				</div>
			</div>
		<?php
		}
		?>
	</div>
	
	<div class="form-actions">
		<button type="button" onclick="directorySave('apply');" class="btn btn-primary button"><?php echo JText::_('RSFP_SUBM_DIR_APPLY'); ?></button> 
		<button type="button" onclick="directorySave('save');" class="btn btn-primary button"><?php echo JText::_('RSFP_SUBM_DIR_SAVE'); ?></button> 
		<button type="button" onclick="directorySave('back')" class="btn btn-secondary"><?php echo JText::_('RSFP_SUBM_DIR_BACK'); ?></button>
	</div>
	
	<input type="hidden" name="option" value="com_rsform">
	<input type="hidden" name="controller" value="directory">
	<input type="hidden" name="task" value="">
	<input type="hidden" name="id" value="<?php echo $this->app->input->getInt('id',0); ?>">
	<input type="hidden" name="formId" value="<?php echo $this->params->get('formId'); ?>">
	<input type="hidden" name="form[formId]" value="<?php echo $this->params->get('formId'); ?>">
</form>