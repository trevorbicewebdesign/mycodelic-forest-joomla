<?php /* Smarty version 2.6.30, created on 2018-06-10 12:08:20
         compiled from CRM/SMS/Form/Upload.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/SMS/Form/Upload.tpl', 1, false),array('block', 'ts', 'CRM/SMS/Form/Upload.tpl', 30, false),array('function', 'help', 'CRM/SMS/Form/Upload.tpl', 30, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-mailing-upload-form-block">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can either <strong>upload</strong> the sms content from your computer OR <strong>compose</strong> the content on this screen.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "content-intro"), $this);?>

</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Mailing/Form/Count.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="form-layout-compressed">
    <tr class="crm-mailing-upload-form-block-sms_provider_id"><td class="label"><?php echo $this->_tpl_vars['form']['sms_provider_id']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['sms_provider_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-sms_provider",'isAdmin' => $this->_tpl_vars['isAdmin']), $this);?>
</td>
    </tr>

    <tr class="crm-mailing-upload-form-block-template">
      <td class="label"><?php echo $this->_tpl_vars['form']['SMStemplate']['label']; ?>
</td>
  <td><?php echo $this->_tpl_vars['form']['SMStemplate']['html']; ?>
</td>
    </tr>
    <tr class="crm-mailing-upload-form-block-upload_type"><td></td><td colspan="2"><?php echo $this->_tpl_vars['form']['upload_type']['label']; ?>
 <?php echo $this->_tpl_vars['form']['upload_type']['html']; ?>
 <?php echo smarty_function_help(array('id' => "upload-compose"), $this);?>
</td></tr>
</table>

<fieldset id="compose_id"><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Compose On-screen<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Task/SMSCommon.tpl", 'smarty_include_vars' => array('upload' => 1,'noAttach' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Mailing/Form/InsertTokens.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</fieldset>

   <fieldset id="upload_id"><legend><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Upload Content<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></legend>
    <table class="form-layout-compressed">
        <tr class="crm-mailing-upload-form-block-textFile">
            <td class="label"><?php echo $this->_tpl_vars['form']['textFile']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['textFile']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Browse to the <strong>TEXT</strong> message file you have prepared for this SMS.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /> <?php echo $this->_tpl_vars['docLink']; ?>
</span>
            </td>
        </tr>
    </table>
  </fieldset>

  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div><!-- / .crm-form-block -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHide.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
    showHideUpload();
    function showHideUpload()
    {
  if (document.getElementsByName("upload_type")[0].checked) {
            cj(\'#compose_id\').hide();
      cj(\'.crm-mailing-upload-form-block-template\').hide();
      cj(\'#upload_id\').show();
        } else {
            cj(\'#compose_id\').show();
      cj(\'.crm-mailing-upload-form-block-template\').show();
      cj(\'#upload_id\').hide();
        }
    }
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>