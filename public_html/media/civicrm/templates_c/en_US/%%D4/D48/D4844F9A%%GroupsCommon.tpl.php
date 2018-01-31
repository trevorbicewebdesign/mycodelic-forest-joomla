<?php /* Smarty version 2.6.30, created on 2018-01-28 15:23:05
         compiled from CRM/Group/Form/GroupsCommon.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Group/Form/GroupsCommon.tpl', 1, false),array('block', 'ts', 'CRM/Group/Form/GroupsCommon.tpl', 28, false),array('modifier', 'count', 'CRM/Group/Form/GroupsCommon.tpl', 27, false),array('modifier', 'cat', 'CRM/Group/Form/GroupsCommon.tpl', 35, false),array('modifier', 'crmAddClass', 'CRM/Group/Form/GroupsCommon.tpl', 46, false),array('function', 'help', 'CRM/Group/Form/GroupsCommon.tpl', 28, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (count($this->_tpl_vars['parent_groups']) > 0 || $this->_tpl_vars['form']['parents']['html']): ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Parent Groups<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-group-parent",'file' => "CRM/Group/Page/Group.hlp"), $this);?>
</h3>
  <?php if (count($this->_tpl_vars['parent_groups']) > 0): ?>
    <table class="form-layout-compressed">
      <tr>
        <td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Remove Parent?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td>
      </tr>
      <?php $_from = $this->_tpl_vars['parent_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group_id'] => $this->_tpl_vars['cgroup']):
?>
        <?php $this->assign('element_name', ((is_array($_tmp='remove_parent_group_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['group_id']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['group_id']))); ?>
        <tr>
          <td>&nbsp;&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['element_name']]['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form'][$this->_tpl_vars['element_name']]['label']; ?>
</td>
        </tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>
    <br />
  <?php endif; ?>
  <table class="form-layout-compressed">
    <tr class="crm-group-form-block-parents">
      <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['parents']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['parents']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
</td>
    </tr>
  </table>
<?php endif; ?>
<?php if ($this->_tpl_vars['form']['organization_id']): ?>
  <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Associated Organization<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-group-organization",'file' => "CRM/Group/Page/Group.hlp"), $this);?>
</h3>
  <table class="form-layout-compressed">
    <tr class="crm-group-form-block-organization">
      <td class="label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['form']['organization_id']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['organization_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>

      </td>
    </tr>
  </table>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>