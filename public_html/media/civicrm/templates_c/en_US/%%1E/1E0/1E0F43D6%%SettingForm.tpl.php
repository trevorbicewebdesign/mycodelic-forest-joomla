<?php /* Smarty version 2.6.30, created on 2018-02-04 12:22:58
         compiled from CRM/Admin/Form/Setting/SettingForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Setting/SettingForm.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/Setting/SettingForm.tpl', 32, false),array('modifier', 'cat', 'CRM/Admin/Form/Setting/SettingForm.tpl', 35, false),array('modifier', 'replace', 'CRM/Admin/Form/Setting/SettingForm.tpl', 35, false),array('function', 'help', 'CRM/Admin/Form/Setting/SettingForm.tpl', 35, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<table class="form-layout-compressed">
  <?php $_from = $this->_tpl_vars['settings_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['setting_name'] => $this->_tpl_vars['setting_detail']):
?>
    <tr class="crm-mail-form-block-<?php echo $this->_tpl_vars['setting_name']; ?>
">
      <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['setting_name']]['label']; ?>
</td><td><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['setting_name']]['html']; ?>
<br />
        <span class="description">
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['setting_detail']['description']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </span>
        <?php if ($this->_tpl_vars['setting_detail']['help_text']): ?>
          <?php $this->assign('tplhelp_id', ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['setting_name'])) ? $this->_run_mod_handler('cat', true, $_tmp, '-id') : smarty_modifier_cat($_tmp, '-id')))) ? $this->_run_mod_handler('replace', true, $_tmp, '_', '-') : smarty_modifier_replace($_tmp, '_', '-'))); ?><?php echo smarty_function_help(array('id' => ($this->_tpl_vars['tplhelp_id'])), $this);?>

        <?php endif; ?>
      </td>
    </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<div class="spacer"></div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>