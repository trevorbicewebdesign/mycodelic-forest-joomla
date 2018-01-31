<?php /* Smarty version 2.6.30, created on 2018-01-28 15:43:51
         compiled from CRM/Custom/Form/ChangeFieldType.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Custom/Form/ChangeFieldType.tpl', 1, false),array('block', 'ts', 'CRM/Custom/Form/ChangeFieldType.tpl', 29, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-custom-field-form-block">
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <div class='status'><div class="icon inform-icon"></div>
        &nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Warning: This functionality is currently in beta stage. Consider backing up your database before using it. Click "Cancel" to return to the "edit custom field" form without making changes.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <table class="form-layout">
        <tr class="crm-custom-src-field-form-block-label">
            <td class="label"><?php echo $this->_tpl_vars['form']['src_html_type']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['src_html_type']['html']; ?>
</td>
        </tr>
        <tr class="crm-custom-dst-field-form-block-label">
            <td class="label"><?php echo $this->_tpl_vars['form']['dst_html_type']['label']; ?>
</td>
            <td class="html-adjust"><?php echo $this->_tpl_vars['form']['dst_html_type']['html']; ?>
</td>
        </tr>
    </table>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php echo '
<script type="text/Javascript">
  function checkCustomDataField( ) {
    var srcHtmlType = \''; ?>
<?php echo $this->_tpl_vars['srcHtmlType']; ?>
<?php echo '\';
    var singleValOps = [\'Text\', \'Select\', \'Radio\', \'Autocomplete-Select\'];
    var multiValOps  = [\'CheckBox\', \'Multi-Select\', \'AdvMulti-Select\'];
    var dstHtmlType = cj(\'#dst_html_type\').val( );
    if ( !dstHtmlType ) {
      return true;
    }

    if ( ( cj.inArray(srcHtmlType, multiValOps) > -1 ) &&
         ( cj.inArray(dstHtmlType, singleValOps) > -1 ) ) {
    return confirm( "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Changing a 'multi option' html type to a 'single option' html type, might results in a data loss. Please consider to take db backup before change the html type. Click 'Ok' to continue.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" );
    }
    return true;
  }
</script>
'; ?>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>