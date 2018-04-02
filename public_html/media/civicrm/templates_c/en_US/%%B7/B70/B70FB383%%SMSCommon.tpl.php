<?php /* Smarty version 2.6.30, created on 2018-03-02 18:15:52
         compiled from CRM/Contact/Form/Task/SMSCommon.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Task/SMSCommon.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Task/SMSCommon.tpl', 77, false),array('function', 'help', 'CRM/Contact/Form/Task/SMSCommon.tpl', 36, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Task/SMSCommon.tpl', 54, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div class="crm-accordion-wrapper crm-plaint_text_sms-accordion ">
<div class="crm-accordion-header">
  <?php echo $this->_tpl_vars['form']['sms_text_message']['label']; ?>

  </div><!-- /.crm-accordion-header -->
 <div class="crm-accordion-body">
 <div id='char-count-message'></div>
   <div class="helpIcon" id="helptext">
     <input class="crm-token-selector big" data-field="sms_text_message" />
     <?php echo smarty_function_help(array('id' => "id-token-text",'tplFile' => $this->_tpl_vars['tplFile'],'file' => "CRM/Contact/Form/Task/SMS.hlp"), $this);?>

   </div>
    <div class='text'>
  <?php echo $this->_tpl_vars['form']['sms_text_message']['html']; ?>
<br />
    </div>
  </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->
<div id="SMSeditMessageDetails" class="section">
    <div id="SMSupdateDetails" class="section" >
  <?php echo $this->_tpl_vars['form']['SMSupdateTemplate']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['SMSupdateTemplate']['label']; ?>

    </div>
    <div class="section">
  <?php echo $this->_tpl_vars['form']['SMSsaveTemplate']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['SMSsaveTemplate']['label']; ?>

    </div>
</div>

<div id="SMSsaveDetails" class="section">
   <div class="label"><?php echo $this->_tpl_vars['form']['SMSsaveTemplateName']['label']; ?>
</div>
   <div class="content"><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['SMSsaveTemplateName']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</div>
</div>

<?php echo '
<script type="text/javascript">

'; ?>
<?php if ($this->_tpl_vars['max_sms_length']): ?><?php echo '
maxCharInfoDisplay();

cj(\'#sms_text_message\').bind({
  change: function() {
   maxLengthMessage();
  },
  keyup:  function() {
   maxCharInfoDisplay();
  }
});

function maxLengthMessage()
{
   var len = cj(\'#sms_text_message\').val().length;
   var maxLength = '; ?>
<?php echo $this->_tpl_vars['max_sms_length']; ?>
<?php echo ';
   if (len > maxLength) {
      cj(\'#sms_text_message\').crmError('; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>SMS body exceeding limit of 160 characters<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ');
      return false;
   }
return true;
}

function maxCharInfoDisplay(){
   var maxLength = '; ?>
<?php echo $this->_tpl_vars['max_sms_length']; ?>
<?php echo ';
   var enteredCharLength = cj(\'#sms_text_message\').val().length;
   var count = enteredCharLength;

   if( count < 0 ) {
      cj(\'#sms_text_message\').val(cj(\'#sms_text_message\').val().substring(0, maxLength));
      count = 0;
   }
   cj(\'#char-count-message\').text( "You can insert up to " + maxLength + " characters. You have entered " + count + " characters." );
}
'; ?>
<?php endif; ?><?php echo '

</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>