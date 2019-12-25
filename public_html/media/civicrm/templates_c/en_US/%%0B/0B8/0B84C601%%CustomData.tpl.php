<?php /* Smarty version 2.6.31, created on 2019-08-14 10:40:34
         compiled from CRM/Custom/Form/CustomData.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Custom/Form/CustomData.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['formEdit']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Edit/CustomData.tpl", 'smarty_include_vars' => array('customDataEntity' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <?php $_from = $this->_tpl_vars['groupTree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['custom_sets'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['custom_sets']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group_id'] => $this->_tpl_vars['cd_edit']):
        $this->_foreach['custom_sets']['iteration']++;
?>
    <?php if ($this->_tpl_vars['cd_edit']['is_multiple'] && $this->_tpl_vars['multiRecordDisplay'] == 'single'): ?>
      <?php $this->assign('isSingleRecordEdit', 'TRUE'); ?>
    <?php else: ?>
            <?php $this->assign('isSingleRecordEdit', ''); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['isSingleRecordEdit']): ?>
      <div class="custom-group custom-group-<?php echo $this->_tpl_vars['cd_edit']['name']; ?>
">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Edit/CustomData.tpl", 'smarty_include_vars' => array('customDataEntity' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
    <?php else: ?>
     <div class="custom-group custom-group-<?php echo $this->_tpl_vars['cd_edit']['name']; ?>
 crm-accordion-wrapper crm-custom-accordion <?php if ($this->_tpl_vars['cd_edit']['collapse_display'] && ! $this->_tpl_vars['skipTitle']): ?>collapsed<?php endif; ?>">
      <?php if (! $this->_tpl_vars['skipTitle']): ?>
      <div class="crm-accordion-header">
        <?php echo $this->_tpl_vars['cd_edit']['title']; ?>

       </div><!-- /.crm-accordion-header -->
      <?php endif; ?>
      <div class="crm-accordion-body">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Edit/CustomData.tpl", 'smarty_include_vars' => array('customDataEntity' => '')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      </div>
     </div>
    <?php endif; ?>
    <div id="custom_group_<?php echo $this->_tpl_vars['group_id']; ?>
_<?php echo $this->_tpl_vars['cgCount']; ?>
"></div>
  <?php endforeach; endif; unset($_from); ?>

<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Form/attachmentjs.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>