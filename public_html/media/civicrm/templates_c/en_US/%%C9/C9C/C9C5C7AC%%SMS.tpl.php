<?php /* Smarty version 2.6.30, created on 2018-03-02 18:15:52
         compiled from CRM/Contact/Form/Task/SMS.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Task/SMS.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Task/SMS.tpl', 30, false),array('function', 'help', 'CRM/Contact/Form/Task/SMS.tpl', 47, false),array('function', 'crmURL', 'CRM/Contact/Form/Task/SMS.tpl', 97, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-contactSMS-form-block">
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<?php if ($this->_tpl_vars['suppressedSms'] > 0): ?>
    <div class="status">
        <p><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['suppressedSms'],'plural' => 'SMS will NOT be sent to %count contacts - (no phone number on file, or communication preferences specify DO NOT SMS, or contact is deceased).')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS will NOT be sent to %count contact - (no phone number on file, or communication preferences specify DO NOT SMS, or contact is deceased).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
<?php endif; ?>
<?php if ($this->_tpl_vars['extendTargetContacts'] > 0): ?>
   <div class="status">
        <p><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['extendTargetContacts'],'plural' => 'SMS will NOT be sent to contacts of %count Activities - (there are more than one Target contact).')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS will NOT be sent to contacts of %count Activity - (there are more than one Target contact).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
   </div>
<?php endif; ?>
<?php if ($this->_tpl_vars['invalidActivity'] > 0): ?>
    <div class="status"><p>
   <?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['invalidActivity'],'plural' => 'SMS will NOT be sent to contacts of %count selected activities as they are invalid for this task action.')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS will NOT be sent to contacts of %count selected activity as they are invalid for this task action.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</p></div>
<?php endif; ?>

<table class="form-layout-compressed">
    <tr class="crm-contactProvider-form-block-Provider">
       <td class="label"><?php echo $this->_tpl_vars['form']['sms_provider_id']['label']; ?>
</td>
       <td><?php echo $this->_tpl_vars['form']['sms_provider_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-provider",'file' => "CRM/Contact/Form/Task/SMS.hlp"), $this);?>
</td>
    </tr>
    <tr class="crm-contactsms-form-block-recipient">
       <td class="label"><?php if ($this->_tpl_vars['single'] == false): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Recipient(s)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php echo $this->_tpl_vars['form']['to']['label']; ?>
<?php endif; ?></td>
       <td><?php echo $this->_tpl_vars['form']['to']['html']; ?>

    <div class="spacer"></div>
      </td>
     </tr>
   <tr><td class="label"><?php echo $this->_tpl_vars['form']['activity_subject']['label']; ?>
</td>
        <td class="value"><?php echo $this->_tpl_vars['form']['activity_subject']['html']; ?>
</td>
   </tr>


<?php if ($this->_tpl_vars['SMSTask']): ?>
    <tr class="crm-contactPhone-form-block-template">
        <td class="label"><?php echo $this->_tpl_vars['form']['SMStemplate']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['SMStemplate']['html']; ?>
</td>
    </tr>
<?php endif; ?>

</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task/SMSCommon.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Mailing/Form/InsertTokens.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="spacer"> </div>

<?php if ($this->_tpl_vars['single'] == false): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['suppressedSms'] > 0): ?>
   <?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['suppressedSms'],'plural' => 'SMS will NOT be sent to %count contacts.')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS will NOT be sent to %count contact.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['invalidActivity'] > 0): ?>
   <?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['invalidActivity'],'plural' => 'SMS will NOT be sent to contacts of %count selected activities as they are invalid for this task action.')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS will NOT be sent to contacts of %count selected activity as they are invalid for this task action.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['extendTargetContacts'] > 0): ?>
   <?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['extendTargetContacts'],'plural' => 'SMS will NOT be sent to contacts of %count selected activities.')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS will NOT be sent to contacts of %count selected activity.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<script type="text/javascript">

<?php if ($this->_tpl_vars['toContact']): ?>
    toContact  = <?php echo $this->_tpl_vars['toContact']; ?>
;
<?php endif; ?>

<?php echo '
CRM.$(function($){
  var sourceDataUrl = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/checkphone','h' => 0), $this);?>
<?php echo '";
  function phoneSelect(el){
    $(el).data(\'api-entity\', \'contact\').crmSelect2({
      minimumInputLength: 1,
      multiple: true,
      ajax: {
        url: sourceDataUrl,
        data: function(term) {
          return { name: term,};
        },
        results: function(response) {
          return { results: response };
        }
      }
    }).select2(\'data\', toContact);
  }
  phoneSelect(\'#to\');
});
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>