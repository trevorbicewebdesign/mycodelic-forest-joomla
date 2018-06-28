<?php /* Smarty version 2.6.30, created on 2018-06-10 12:08:02
         compiled from CRM/SMS/Form/Group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/SMS/Form/Group.tpl', 1, false),array('block', 'ts', 'CRM/SMS/Form/Group.tpl', 29, false),array('function', 'help', 'CRM/SMS/Form/Group.tpl', 36, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['groupCount'] == 0 && $this->_tpl_vars['mailingCount'] == 0): ?>
  <div class="status">
  <div class="icon inform-icon"></div>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>To send a Mass SMS, you must have a valid group of recipients - either at least one group that's a Mailing List<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php else: ?>
<div class="crm-block crm-form-block crm-mailing-group-form-block">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <table class="form-layout">
   <tr class="crm-mailing-group-form-block-name"><td class="label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['name']['html']; ?>
 <?php echo smarty_function_help(array('id' => "sms-name"), $this);?>
</td></tr>
  </table>


<div id="id-additional" class="form-item">
<div class="crm-accordion-wrapper ">
 <div class="crm-accordion-header">
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailing Recipients<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
 </div><!-- /.crm-accordion-header -->
 <div class="crm-accordion-body">
  <?php echo '<table>'; ?><?php if ($this->_tpl_vars['groupCount'] > 0): ?><?php echo '<tr class="crm-mailing-group-form-block-includeGroups"><td class="label">'; ?><?php echo $this->_tpl_vars['form']['includeGroups']['label']; ?><?php echo ' '; ?><?php echo smarty_function_help(array('id' => "include-groups"), $this);?><?php echo '</td></tr><tr class="crm-mailing-group-form-block-includeGroups"><td>'; ?><?php echo $this->_tpl_vars['form']['includeGroups']['html']; ?><?php echo '</td></tr><tr class="crm-mailing-group-form-block-excludeGroups"><td class="label">'; ?><?php echo $this->_tpl_vars['form']['excludeGroups']['label']; ?><?php echo ' '; ?><?php echo smarty_function_help(array('id' => "exclude-groups"), $this);?><?php echo '</td></tr><tr class="crm-mailing-group-form-block-excludeGroups"><td>'; ?><?php echo $this->_tpl_vars['form']['excludeGroups']['html']; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['mailingCount'] > 0): ?><?php echo '<tr class="crm-mailing-group-form-block-includeMailings"><td class="label">'; ?><?php echo $this->_tpl_vars['form']['includeMailings']['label']; ?><?php echo ' '; ?><?php echo smarty_function_help(array('id' => "include-mailings"), $this);?><?php echo '</td></tr><tr class="crm-mailing-group-form-block-includeMailings"><td>'; ?><?php echo $this->_tpl_vars['form']['includeMailings']['html']; ?><?php echo '</td></tr><tr class="crm-mailing-group-form-block-excludeMailings"><td class="label">'; ?><?php echo $this->_tpl_vars['form']['excludeMailings']['label']; ?><?php echo ' '; ?><?php echo smarty_function_help(array('id' => "exclude-mailings"), $this);?><?php echo '</td></tr><tr class="crm-mailing-group-form-block-excludeMailings"><td>'; ?><?php echo $this->_tpl_vars['form']['excludeMailings']['html']; ?><?php echo '</td></tr>'; ?><?php endif; ?><?php echo '</table>'; ?>

 </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->

  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>

</div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>