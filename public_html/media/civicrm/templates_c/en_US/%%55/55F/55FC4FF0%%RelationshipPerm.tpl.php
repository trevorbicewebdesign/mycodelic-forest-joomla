<?php /* Smarty version 2.6.31, created on 2019-06-23 19:58:59
         compiled from CRM/Contact/Page/View/RelationshipPerm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/RelationshipPerm.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Page/View/RelationshipPerm.tpl', 35, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['permType'] == 1): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/RelationshipPerm.tpl", 'smarty_include_vars' => array('permType' => 2,'displayText' => false)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['permDisplayName'] && $this->_tpl_vars['otherDisplayName']): ?>
<?php ob_start(); ?>
<?php if ($this->_tpl_vars['permType'] == 1): ?>
<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['permDisplayName'],'2' => $this->_tpl_vars['otherDisplayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%2 can be edited by %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php else: ?>
<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['permDisplayName'],'2' => $this->_tpl_vars['otherDisplayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>%2 can be viewed by %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('permText', ob_get_contents());ob_end_clean(); ?>
<?php endif; ?>

<span class="fa-stack" title="<?php echo $this->_tpl_vars['permText']; ?>
">
  <i class="crm-i fa-square fa-stack-2x <?php if ($this->_tpl_vars['permType'] == 1): ?>crm-i-blue<?php else: ?>crm-i-green<?php endif; ?>"></i>
  <i class="crm-i <?php if ($this->_tpl_vars['permType'] == 1): ?>fa-pencil<?php else: ?>fa-eye<?php endif; ?> fa-inverse fa-stack-1x"></i>
</span>

<?php if ($this->_tpl_vars['displayText']): ?>
<?php if ($this->_tpl_vars['permType'] == 1): ?>
<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['permDisplayName'],'2' => $this->_tpl_vars['otherDisplayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><strong>%1</strong> can view and update information about <strong>%2</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php else: ?>
<?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['permDisplayName'],'2' => $this->_tpl_vars['otherDisplayName'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><strong>%1</strong> can view information about <strong>%2</strong>.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['afterText']): ?>
<?php if ($this->_tpl_vars['permType'] == 1): ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This contact can be edited by the other.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php else: ?>
<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This contact can be viewed by the other.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>