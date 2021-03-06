<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');


$yearsList = [];
$start = 1986;
$current = date("Y");
$i=$start;
while($i<$current){
    $yearsList[] = ['value'=>$i, "text"=>$i];
    $i++;
}
?>
<script type="text/javascript">
var gettingStateList = false;
var loadedStateList = false;
function setStatesList(){
    var countryCode = jQuery("#jform_profile_country").val()?jQuery("#jform_profile_country").val():null;
    if(countryCode){
        gettingStateList = true;
        jQuery.ajax({
            url: "/index.php?option=com_civicrm&task=civicrm/ajax/jqState&_value="+countryCode,
            context: document.body
        }).done(function(msg) {
            var selectOption = "<option value='0' selected>--Select A State--</option>";
            msg.forEach(function(item){
                selectOption += "<option value='"+item.key+"'>"+item.value+"</option>"; 
            });
            var selected = jQuery("#jform_profile_state").val();
            if(!selected){selected="0";}
            jQuery("#jform_profile_state").html();
            jQuery("#jform_profile_state").html(selectOption);
            var actualValue = jQuery("#jform_profile_state").val(selected).change().val(selected);
            console.log(actualValue);
            loadedStateList = true;
        });
    }
}
jQuery( document ).ready(function() {
    setStatesList();
    jQuery( "#jform_profile_country" ).change(function() {
        setStatesList();
    });
})
</script>
<div class="registration<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<div class="page-header">
			<h1><?php echo $this->escape($this->params->get('page_heading')); ?></h1>
		</div>
	<?php endif; ?>
	<form id="member-registration" action="<?php echo JRoute::_('index.php?option=com_users&task=registration.register'); ?>" method="post" class="form-validate form-horizontal well" enctype="multipart/form-data">
		<?php // Iterate through the form fieldsets and display each one. ?>
		<?php 
        foreach ($this->form->getFieldsets() as $fieldset) : 
            $fields = $this->form->getFieldset($fieldset->name); 
            if (count($fields)) : ?>
				<fieldset>
					<?php // If the fieldset has a label set, display it as the legend. ?>
					<?php if (isset($fieldset->label)) : ?>
						<legend><?php echo JText::_($fieldset->label); ?></legend>
					<?php endif; ?>
                    <?php if($fieldset->name=='default'):?>
                    <p>We are excited you want to join us! Please create an account with our website to begin the process of joining the Mycodelic Forest! If you have a Burner Profile, please use the same email address!</p>
                    <?php elseif($fieldset->name=='profile'):?>
                    <p>We mainly want your contact information so we can include you in our communications and send you nice things in the mail. Like invitations! We will never give out this information to third parties. We will keep the precious safe.</p>
                    <?php elseif($fieldset->name=='skills'):?>
                    <p>Take a second to let us know any of your skills! These are totally optional!</p>
                    <?php endif; ?>
                    <?php 
                    echo $this->form->renderFieldset($fieldset->name);
                    ?>
                    
				</fieldset>
			<?php endif; ?>
		<?php endforeach; ?>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn btn-primary validate">
					<?php echo JText::_('JREGISTER'); ?>
				</button>
				<a class="btn" href="<?php echo JRoute::_(''); ?>" title="<?php echo JText::_('JCANCEL'); ?>">
					<?php echo JText::_('JCANCEL'); ?>
				</a>
				<input type="hidden" name="option" value="com_users" />
				<input type="hidden" name="task" value="registration.register" />
			</div>
		</div>
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>
