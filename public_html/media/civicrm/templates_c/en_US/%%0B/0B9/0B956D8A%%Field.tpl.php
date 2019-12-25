<?php /* Smarty version 2.6.31, created on 2019-12-16 22:11:41
         compiled from CRM/Core/Form/Field.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/Form/Field.tpl', 1, false),array('function', 'help', 'CRM/Core/Form/Field.tpl', 33, false),array('function', 'docURL', 'CRM/Core/Form/Field.tpl', 38, false),array('modifier', 'crmMoney', 'CRM/Core/Form/Field.tpl', 36, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['fieldSpec']['template']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['fieldSpec']['template'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <td class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fieldName']]['label']; ?>

    <?php if ($this->_tpl_vars['fieldSpec']['help']): ?><?php $this->assign('help', $this->_tpl_vars['fieldSpec']['help']); ?><?php ob_start(); ?><?php if ($this->_tpl_vars['fieldSpec']['help']): ?>
      <?php echo $this->_tpl_vars['fieldSpec']['help']; ?>

    <?php else: ?>''<?php endif; ?>
    <?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('helpFile', ob_get_contents());ob_end_clean(); ?><?php echo smarty_function_help(array('id' => $this->_tpl_vars['help']['id'],'file' => $this->_tpl_vars['help']['file']), $this);?>
<?php endif; ?>
    <?php if ($this->_tpl_vars['action'] == 2 && $this->_tpl_vars['fieldSpec']['is_add_translate_dialog']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => $this->_tpl_vars['entityTable'],'field' => $this->_tpl_vars['fieldName'],'id' => $this->_tpl_vars['entityID'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>
  </td>
  <td><?php echo $this->_tpl_vars['fieldSpec']['pre_html_text']; ?>
<?php if ($this->_tpl_vars['form'][$this->_tpl_vars['fieldName']]['html']): ?><?php if ($this->_tpl_vars['fieldSpec']['formatter'] === 'crmMoney'): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['form'][$this->_tpl_vars['fieldName']]['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['fieldSpec']['formatterParam']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['fieldSpec']['formatterParam'])); ?>
<?php else: ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fieldName']]['html']; ?>
<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['fieldSpec']['place_holder']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['fieldSpec']['post_html_text']; ?>
<br />
    <?php if ($this->_tpl_vars['fieldSpec']['description']): ?><span class="description"><?php echo $this->_tpl_vars['fieldSpec']['description']; ?>
</span><?php endif; ?>
    <?php if ($this->_tpl_vars['fieldSpec']['documentation_link']): ?><?php echo smarty_function_docURL(array('page' => $this->_tpl_vars['fieldSpec']['documentation_link']['page'],'resource' => $this->_tpl_vars['fieldSpec']['documentation_link']['resource']), $this);?>
<?php endif; ?>
  </td>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>