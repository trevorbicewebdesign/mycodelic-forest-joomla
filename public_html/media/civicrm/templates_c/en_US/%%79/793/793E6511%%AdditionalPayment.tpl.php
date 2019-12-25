<?php /* Smarty version 2.6.31, created on 2019-09-05 17:21:00
         compiled from CRM/Contribute/Form/AdditionalPayment.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/AdditionalPayment.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Form/AdditionalPayment.tpl', 39, false),array('function', 'crmURL', 'CRM/Contribute/Form/AdditionalPayment.tpl', 44, false),array('function', 'help', 'CRM/Contribute/Form/AdditionalPayment.tpl', 80, false),array('modifier', 'crmAddClass', 'CRM/Contribute/Form/AdditionalPayment.tpl', 67, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/AdditionalPayment.tpl', 67, false),array('modifier', 'json_encode', 'CRM/Contribute/Form/AdditionalPayment.tpl', 124, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['transaction']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/PaymentInfoBlock.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  <?php if (! $this->_tpl_vars['suppressPaymentFormButtons']): ?>
    <div class="crm-submit-buttons">
       <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  <?php endif; ?>
<?php else: ?>

<div class="crm-block crm-form-block crm-payment-form-block">

  <?php if (! $this->_tpl_vars['email']): ?>
    <div class="messages status no-popup">
      <div class="icon inform-icon"></div>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will not be able to send an automatic email receipt for this payment because there is no email address recorded for this contact. If you want a receipt to be sent when this payment is recorded, click Cancel and then click Edit from the Summary tab to add an email address before recording the payment.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['newCredit'] && $this->_tpl_vars['contributionMode'] == null): ?>
    <?php if ($this->_tpl_vars['contactId']): ?>
      <?php ob_start(); ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/payment/add','q' => "reset=1&action=add&cid=".($this->_tpl_vars['contactId'])."&id=".($this->_tpl_vars['id'])."&component=".($this->_tpl_vars['component'])."&mode=live"), $this);?>
<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('ccModeLink', ob_get_contents());ob_end_clean(); ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['paymentType'] == 'owed'): ?>
      <div class="action-link css_right crm-link-credit-card-mode">
        <a class="open-inline-noreturn action-item crm-hover-button" href="<?php echo $this->_tpl_vars['ccModeLink']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>submit credit card payment<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
      </div>
    <?php endif; ?>
  <?php endif; ?>
  <div class="crm-submit-buttons">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </div>
  <table class="form-layout-compressed">
    <tr>
      <td class="font-size12pt label"><strong><?php if ($this->_tpl_vars['component'] == 'event'): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Participant<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?></strong></td><td class="font-size12pt"><strong><?php echo $this->_tpl_vars['displayName']; ?>
</strong></td>
    </tr>
    <?php if ($this->_tpl_vars['eventName']): ?>
      <tr>
        <td class='label'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Event<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td><td><?php echo $this->_tpl_vars['eventName']; ?>
</td>
      </tr>
    <?php endif; ?>
    <tr class="crm-payment-form-block-total_amount">
      <td class="label"><?php echo $this->_tpl_vars['form']['total_amount']['label']; ?>
</td>
      <td>
        <span id='totalAmount'><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['currency']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['total_amount']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>
</span>&nbsp; <span class="status"><?php if ($this->_tpl_vars['paymentType'] == 'refund'): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refund Due<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Balance Owed<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>:&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['paymentAmt'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?>
</span>
      </td>
      <?php if ($this->_tpl_vars['email'] && $this->_tpl_vars['outBound_option'] != 2): ?>
        <tr class="crm-payment-form-block-is_email_receipt">
          <td class="label">
            <?php echo $this->_tpl_vars['form']['is_email_receipt']['label']; ?>

          </td>
          <td><?php echo $this->_tpl_vars['form']['is_email_receipt']['html']; ?>
&nbsp;
              <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email a receipt to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
          </td>
        </tr>
        <tr id="fromEmail" class="crm-payment-form-block-from_email_address" style="display:none;">
          <td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
          <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-from_email",'file' => "CRM/Contact/Form/Task/Email.hlp",'isAdmin' => $this->_tpl_vars['isAdmin']), $this);?>
</td>
        </tr>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['contributionMode']): ?>
        <tr class="crm-payment-form-block-payment_processor_id"><td class="label nowrap"><?php echo $this->_tpl_vars['form']['payment_processor_id']['label']; ?>
<span class="crm-marker"> * </span></td><td><?php echo $this->_tpl_vars['form']['payment_processor_id']['html']; ?>
</td></tr>
      <?php endif; ?>
    </tr>
   </table>

    <div class="crm-accordion-wrapper crm-accordion_title-accordion crm-accordion-processed" id="paymentDetails_Information">
      <?php if (! $this->_tpl_vars['contributionMode']): ?>
      <div class="crm-accordion-header">
        <?php if ($this->_tpl_vars['paymentType'] == 'refund'): ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Refund Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php else: ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Details<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php endif; ?>
      </div>
      <div class="crm-accordion-body">
        <table class="form-layout-compressed" >
          <tr class="crm-payment-form-block-trxn_date">
            <td class="label"><?php echo $this->_tpl_vars['form']['trxn_date']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['trxn_date']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>The date this payment was received.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
          </tr>
          <tr class="crm-payment-form-block-payment_instrument_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['payment_instrument_id']['label']; ?>
</td>
            <td ><?php echo $this->_tpl_vars['form']['payment_instrument_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => 'payment_instrument_id'), $this);?>
</td>
            </td>
          </tr>
          <tr class="crm-payment-form-block-trxn_id">
            <td class="label"><?php echo $this->_tpl_vars['form']['trxn_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['trxn_id']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-trans_id"), $this);?>
</td>
          </tr>
          <tr class="crm-payment-form-block-fee_amount"><td class="label"><?php echo $this->_tpl_vars['form']['fee_amount']['label']; ?>
</td><td<?php echo $this->_tpl_vars['valueStyle']; ?>
><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['fee_amount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency'], 'XXX', 'YYY') : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'], 'XXX', 'YYY')); ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Processing fee for this transaction (if applicable).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
           <tr class="crm-payment-form-block-net_amount"><td class="label"><?php echo $this->_tpl_vars['form']['net_amount']['label']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['net_amount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency'], '', 1) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'], '', 1)); ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Net value of the payment (Total Amount minus Fee).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        </table>
      </div>
      <?php endif; ?>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/BillingBlockWrapper.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php echo '
    <script type="text/javascript">

    var url = '; ?>
<?php echo json_encode($this->_tpl_vars['dataUrl']); ?>
<?php echo ';

      CRM.$(function($) {
        showHideByValue( \'is_email_receipt\', \'\', \'notice\', \'table-row\', \'radio\', false );
        showHideByValue( \'is_email_receipt\', \'\', \'fromEmail\', \'table-row\', \'radio\', false );
      });
    '; ?>

  </script>

<br />
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
  <?php echo '
    <script type="text/javascript">
      function verify() {
        if (cj(\'#is_email_receipt\').prop(\'checked\')) {
          return confirm( \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click OK to save this payment record AND send a receipt to the contributor now<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '.\' );
        }
      }
      CRM.$(function($) {
        var $form = $(\'form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '\');
        checkEmailDependancies();
        $(\'#is_email_receipt\', $form).click(function() {
          checkEmailDependancies();
        });

        function checkEmailDependancies() {
          if ($(\'#is_email_receipt\', $form).prop(\'checked\')) {
            $(\'#fromEmail\', $form).show();
          }
          else {
           $(\'#fromEmail\', $form).hide( );
          }
        }

        $(\'#fee_amount\', $form).change( function() {
          var totalAmount = $(\'#total_amount\', $form).val();
          var feeAmount = $(\'#fee_amount\', $form).val();
          var netAmount = totalAmount.replace(/,/g, \'\') - feeAmount.replace(/,/g, \'\');
          if (!$(\'#net_amount\', $form).val() && totalAmount) {
            $(\'#net_amount\', $form).val(CRM.formatMoney(netAmount, true));
          }
        });
      });

    </script>
    '; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>