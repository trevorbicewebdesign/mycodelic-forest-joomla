<?php /* Smarty version 2.6.31, created on 2019-12-16 22:11:41
         compiled from CRM/Core/Form/EntityForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/Form/EntityForm.tpl', 1, false),array('modifier', 'escape', 'CRM/Core/Form/EntityForm.tpl', 32, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-<?php echo $this->_tpl_vars['entityInClassFormat']; ?>
-form-block">
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  <?php if ($this->_tpl_vars['action'] == 8): ?>
    <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
      <?php echo ((is_array($_tmp=$this->_tpl_vars['deleteMessage'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>

    </div>
  <?php else: ?>
    <table class="form-layout-compressed">
      <?php $_from = $this->_tpl_vars['entityFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldSpec']):
?>
        <?php $this->assign('fieldName', $this->_tpl_vars['fieldSpec']['name']); ?>
        <tr class="crm-<?php echo $this->_tpl_vars['entityInClassFormat']; ?>
-form-block-<?php echo $this->_tpl_vars['fieldName']; ?>
">
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/Form/Field.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/customDataBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php endif; ?>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>