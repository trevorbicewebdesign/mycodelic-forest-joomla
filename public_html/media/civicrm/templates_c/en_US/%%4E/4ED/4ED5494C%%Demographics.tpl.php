<?php /* Smarty version 2.6.30, created on 2019-02-13 08:59:52
         compiled from CRM/Contact/Form/Inline/Demographics.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Inline/Demographics.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['form']['oplock_ts']['html']; ?>

<div class="crm-inline-edit-form">
  <div class="crm-inline-button">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>

  <div class="crm-clear">
    <div class="crm-summary-row">
      <div class="crm-label"><?php echo $this->_tpl_vars['form']['gender_id']['label']; ?>
</div>
      <div class="crm-content"><?php echo $this->_tpl_vars['form']['gender_id']['html']; ?>
</div>
    </div>
    <div class="crm-summary-row">
      <div class="crm-label"><?php echo $this->_tpl_vars['form']['birth_date']['label']; ?>
</div>
      <div class="crm-content">
        <?php echo $this->_tpl_vars['form']['birth_date']['html']; ?>

      </div>
    </div>
    <div class="crm-summary-row">
      <div class="crm-label">&nbsp;</div>
      <div class="crm-content">
        <?php echo $this->_tpl_vars['form']['is_deceased']['html']; ?>

        <?php echo $this->_tpl_vars['form']['is_deceased']['label']; ?>

      </div>
    </div>
    <div class="crm-summary-row">
      <div class="crm-label crm-deceased-date"><?php echo $this->_tpl_vars['form']['deceased_date']['label']; ?>
</div>
      <div class="crm-content crm-deceased-date">
        <?php echo $this->_tpl_vars['form']['deceased_date']['html']; ?>

      </div>
    </div>
  </div>
</div> <!-- end of main -->

<?php echo '
<script type="text/javascript">
function showDeceasedDate( ) {
  if ( cj("#is_deceased").is(\':checked\') ) {
    cj(".crm-deceased-date").show( );
  } else {
    cj(".crm-deceased-date").hide( );
    cj("#deceased_date").val(\'\');
  }
}

CRM.$(function($) {
  showDeceasedDate( );
});
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>