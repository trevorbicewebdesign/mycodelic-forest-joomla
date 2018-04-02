<?php /* Smarty version 2.6.30, created on 2018-03-02 18:43:51
         compiled from CRM/common/fatal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/common/fatal.tpl', 1, false),array('block', 'ts', 'CRM/common/fatal.tpl', 52, false),array('modifier', 'truncate', 'CRM/common/fatal.tpl', 42, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['config']->userFramework != 'Joomla' && $this->_tpl_vars['config']->userFramework != 'WordPress'): ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <title><?php echo $this->_tpl_vars['pageTitle']; ?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <base href="<?php echo $this->_tpl_vars['config']->resourceBase; ?>
" />
  <style type="text/css" media="screen">
    @import url(<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/civicrm.css);
    @import url(<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/crm-i.css);
    @import url(<?php echo $this->_tpl_vars['config']->resourceBase; ?>
bower_components/font-awesome/css/font-awesome.min.css);
  </style>
</head>
<body>
<div id="crm-container" class="crm-container" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
">
<?php else: ?>
<div id="crm-container" class="crm-container" lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
" xml:lang="<?php echo ((is_array($_tmp=$this->_tpl_vars['config']->lcMessages)) ? $this->_run_mod_handler('truncate', true, $_tmp, 2, "", true) : smarty_modifier_truncate($_tmp, 2, "", true)); ?>
">
  <style type="text/css" media="screen">
    @import url(<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/civicrm.css);
    @import url(<?php echo $this->_tpl_vars['config']->resourceBase; ?>
css/crm-i.css);
    @import url(<?php echo $this->_tpl_vars['config']->resourceBase; ?>
bower_components/font-awesome/css/font-awesome.min.css);
  </style>
<?php endif; ?>
<div class="messages status no-popup">  <i class="crm-i fa-exclamation-triangle crm-i-red"></i>
 <span class="status-fatal"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Sorry, due to an error, we are unable to fulfill your request at the moment. You may want to contact your administrator or service provider with more details about what action you were performing when this occurred.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
    <div class="crm-section crm-error-message"><?php echo $this->_tpl_vars['message']; ?>
</div>
    <?php if ($this->_tpl_vars['error']['message'] && $this->_tpl_vars['message'] != $this->_tpl_vars['error']['message']): ?>
        <hr style="solid 1px" />
        <div class="crm-section crm-error-message"><?php echo $this->_tpl_vars['error']['message']; ?>
</div>
    <?php endif; ?>
    <?php if (( $this->_tpl_vars['code'] || $this->_tpl_vars['mysql_code'] || $this->_tpl_vars['errorDetails'] ) && $this->_tpl_vars['config']->debug): ?>
        <div class="crm-accordion-wrapper collapsed crm-fatal-error-details-block">
         <div class="crm-accordion-header" onclick="toggle(this);";>
          <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Error Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
         </div><!-- /.crm-accordion-header -->
         <div class="crm-accordion-body">
            <?php if ($this->_tpl_vars['code']): ?>
                <div class="crm-section"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Error Code:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['code']; ?>
</div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['mysql_code']): ?>
                <div class="crm-section"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Database Error Code:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['mysql_code']; ?>
</div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['errorDetails']): ?>
                <div class="crm-section"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Additional Details:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo $this->_tpl_vars['errorDetails']; ?>
</div>
            <?php endif; ?>
         </div><!-- /.crm-accordion-body -->
        </div><!-- /.crm-accordion-wrapper -->
    <?php endif; ?>
    <p><a href="<?php echo $this->_tpl_vars['config']->userFrameworkBaseURL; ?>
" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Main Menu<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Return to home page.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a></p>
</div>
</div> <?php echo '
<script language="JavaScript">
function toggle( element ) {
    var parent = element.parentNode;
    var className = parent.className;
    if ( className  == \'crm-accordion-wrapper collapsed crm-fatal-error-details-block\') {
        parent.className = \'crm-accordion-wrapper  crm-fatal-error-details-block\';
    } else {
        parent.className = \'crm-accordion-wrapper collapsed crm-fatal-error-details-block\';
    }
}
</script>
'; ?>

<?php if ($this->_tpl_vars['config']->userFramework != 'Joomla' && $this->_tpl_vars['config']->userFramework != 'WordPress'): ?>
</body>
</html>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>