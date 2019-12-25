<?php /* Smarty version 2.6.31, created on 2019-09-05 17:21:09
         compiled from CRM/Financial/Form/PaymentEdit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Financial/Form/PaymentEdit.tpl', 1, false),array('block', 'crmRegion', 'CRM/Financial/Form/PaymentEdit.tpl', 27, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->_tag_stack[] = array('crmRegion', array('name' => "payment-edit-block")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
   <div id="payment-edit-section" class="crm-section billing_mode-section">
     <?php $_from = $this->_tpl_vars['paymentFields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldName'] => $this->_tpl_vars['paymentField']):
?>
       <?php $this->assign('name', $this->_tpl_vars['fieldName']); ?>
       <div class="crm-container <?php echo $this->_tpl_vars['name']; ?>
-section">
         <div class="label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['name']]['label']; ?>

         </div>
         <div class="content"><?php if ($this->_tpl_vars['name'] == 'total_amount'): ?><?php echo $this->_tpl_vars['currency']; ?>
&nbsp;&nbsp;<?php endif; ?><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['name']]['html']; ?>

         </div>
         <div class="clear"></div>
       </div>
     <?php endforeach; endif; unset($_from); ?>
   </div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<div class="crm-submit-buttons">
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</div>

<?php echo '
<script type="text/javascript">
CRM.$(function ($) {

  showHideFieldsByPaymentInstrumentID();
  $(\'#payment_instrument_id\').on(\'change\', showHideFieldsByPaymentInstrumentID);

  function showHideFieldsByPaymentInstrumentID() {
    var paymentInstrumentLabel = $(\'#payment_instrument_id option:selected\').text();
    if (paymentInstrumentLabel == ts(\'Credit Card\')) {
      $(\'.check_number-section\').hide();
      $(\'.card_type_id-section, .pan_truncation-section\').show();
    }
    else if (paymentInstrumentLabel == ts(\'Check\')) {
      $(\'.card_type_id-section, .pan_truncation-section\').hide();
      $(\'.check_number-section\').show();
    }
    else {
      $(\'.card_type_id-section, .pan_truncation-section, .check_number-section\').hide();
    }
  }
});
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>