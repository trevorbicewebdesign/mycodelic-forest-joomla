<?php /* Smarty version 2.6.30, created on 2018-02-11 22:03:41
         compiled from CRM/Pledge/Form/Pledge.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Pledge/Form/Pledge.tpl', 1, false),array('block', 'ts', 'CRM/Pledge/Form/Pledge.tpl', 33, false),array('function', 'math', 'CRM/Pledge/Form/Pledge.tpl', 38, false),array('function', 'crmURL', 'CRM/Pledge/Form/Pledge.tpl', 176, false),array('function', 'crmSetting', 'CRM/Pledge/Form/Pledge.tpl', 229, false),array('modifier', 'crmAddClass', 'CRM/Pledge/Form/Pledge.tpl', 67, false),array('modifier', 'crmMoney', 'CRM/Pledge/Form/Pledge.tpl', 68, false),array('modifier', 'truncate', 'CRM/Pledge/Form/Pledge.tpl', 93, false),array('modifier', 'crmDate', 'CRM/Pledge/Form/Pledge.tpl', 93, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['showAdditionalInfo'] && $this->_tpl_vars['formType']): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contribute/Form/AdditionalInfo/".($this->_tpl_vars['formType']).".tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<?php if (! $this->_tpl_vars['email'] && $this->_tpl_vars['action'] != 8 && $this->_tpl_vars['context'] != 'standalone'): ?>
<div class="messages status no-popup">
  <div class="icon inform-icon"></div>
        <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You will not be able to send an acknowledgment for this pledge because there is no email address recorded for this contact. If you want a acknowledgment to be sent when this pledge is recorded, click Cancel and then click Edit from the Summary tab to add an email address before recording the pledge.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['action'] == 2): ?>
        <?php echo smarty_function_math(array('equation' => "x / y",'x' => $this->_tpl_vars['amount'],'y' => $this->_tpl_vars['installments'],'format' => "%.2f",'assign' => 'currentInstallment'), $this);?>

        <?php if ($this->_tpl_vars['currentInstallment'] != $this->_tpl_vars['eachPaymentAmount']): ?>
      <?php $this->assign('originalPledgeAmount', ($this->_tpl_vars['installments']*$this->_tpl_vars['eachPaymentAmount'])); ?>
    <?php endif; ?>
<?php endif; ?>
<div class="crm-block crm-form-block crm-pledge-form-block">
 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
   <?php if ($this->_tpl_vars['action'] == 8): ?>
    <div class="messages status no-popup">
        <div class="icon inform-icon"></div>&nbsp;
        <span class="font-red bold"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>WARNING: Deleting this pledge will also delete any related pledge payments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This action cannot be undone.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
        <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Consider cancelling the pledge instead if you want to maintain an audit trail and avoid losing payment data. To set the pledge status to Cancelled and cancel any not-yet-paid pledge payments, first click Cancel on this form. Then click the more &gt; link from the pledge listing, and select the Cancel action.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    </div>
   <?php else: ?>
      <table class="form-layout-compressed">
        <?php if ($this->_tpl_vars['context'] == 'standalone'): ?>
          <tr class="crm-pledge-form-contact-id">
            <td class="label"><?php echo $this->_tpl_vars['form']['contact_id']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['contact_id']['html']; ?>
</td>
          </tr>
        <?php else: ?>
          <tr class="crm-pledge-form-block-displayName">
              <td class="font-size12pt right"><strong><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pledge by<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></strong></td>
              <td class="font-size12pt"><strong><?php echo $this->_tpl_vars['displayName']; ?>
</strong></td>
          </tr>
        <?php endif; ?>
  <tr class="crm-pledge-form-block-amount">
       <td class="label"><?php echo $this->_tpl_vars['form']['amount']['label']; ?>
</td>
          <td><span><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['currency']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>
&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['form']['amount']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'eight') : smarty_modifier_crmAddClass($_tmp, 'eight')); ?>
</span>
          <?php if ($this->_tpl_vars['originalPledgeAmount']): ?><div class="messages status no-popup"><div class="icon inform-icon"></div>&nbsp;<?php $this->_tag_stack[] = array('ts', array('1' => ((is_array($_tmp=$this->_tpl_vars['originalPledgeAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])))); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?> Pledge total has changed due to payment adjustments. Original pledge amount was %1.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></div><?php endif; ?>
      </td>
  </tr>
        <tr class="crm-pledge-form-block-installments">
      <td class="label"><?php echo $this->_tpl_vars['form']['installments']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['installments']['html']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>installments of<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <span class='currency-symbol'>
          <?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['isPending']): ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['eachPaymentAmount']['html'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

          <?php elseif ($this->_tpl_vars['action'] == 2 && ! $this->_tpl_vars['isPending']): ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['eachPaymentAmount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['currency'])); ?>

          <?php endif; ?>
        </span>&nbsp;<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>every<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>&nbsp;<?php echo $this->_tpl_vars['form']['frequency_interval']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['frequency_unit']['html']; ?>
</td></tr>
        <tr class="crm-pledge-form-block-frequency_day">
      <td class="label nowrap"><?php echo $this->_tpl_vars['form']['frequency_day']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['frequency_day']['html']; ?>
 <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>day of the period<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This applies to weekly, monthly and yearly payments.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td></tr>
        <?php if ($this->_tpl_vars['form']['create_date']): ?>
        <tr class="crm-pledge-form-block-create_date">
            <td class="label"><?php echo $this->_tpl_vars['form']['create_date']['label']; ?>
</td>
            <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'create_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br />
        <?php endif; ?>
        <?php if ($this->_tpl_vars['create_date']): ?>
            <tr class="crm-pledge-form-block-create_date">
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pledge Made<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td class="view-value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['create_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

        <?php endif; ?><br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date when pledge was made by the contributor.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>

        <?php if ($this->_tpl_vars['form']['start_date']): ?>
            <tr class="crm-pledge-form-block-start_date">
                <td class="label"><?php echo $this->_tpl_vars['form']['start_date']['label']; ?>
</td>
                <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'start_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br />
        <?php endif; ?>
        <?php if ($this->_tpl_vars['start_date']): ?>
            <tr class="crm-pledge-form-block-start_date">
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payments Start<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td class="view-value"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['start_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>

        <?php endif; ?><br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date of first pledge payment.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>

        <?php if ($this->_tpl_vars['email'] && $this->_tpl_vars['outBound_option'] != 2): ?>
            <?php if ($this->_tpl_vars['form']['is_acknowledge']): ?>
                <tr class="crm-pledge-form-block-is_acknowledge">
        <td class="label"><?php echo $this->_tpl_vars['form']['is_acknowledge']['label']; ?>
</td>
        <td><?php echo $this->_tpl_vars['form']['is_acknowledge']['html']; ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['email'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email an acknowledgment of this pledge to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
            <?php endif; ?>
      <?php elseif ($this->_tpl_vars['context'] == 'standalone' && $this->_tpl_vars['outBound_option'] != 2): ?>
                <tr id="acknowledgment-receipt" style="display:none;"><td class="label"><?php echo $this->_tpl_vars['form']['is_acknowledge']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['is_acknowledge']['html']; ?>
 <span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => '<span id="email-address"></span>')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Automatically email an acknowledgment of this pledge to %1?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
        <?php endif; ?>
        <tr id="fromEmail" style="display:none;">
            <td class="label"><?php echo $this->_tpl_vars['form']['from_email_address']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['from_email_address']['html']; ?>
</td>
        </tr>
        <tr id="acknowledgeDate">
      <td class="label" class="crm-pledge-form-block-acknowledge_date"><?php echo $this->_tpl_vars['form']['acknowledge_date']['label']; ?>
</td>
            <td><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/jcalendar.tpl", 'smarty_include_vars' => array('elementName' => 'acknowledge_date')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Date when an acknowledgment of the pledge was sent.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
  </tr>
        <tr class="crm-pledge-form-block-financial_type_id">
      <td class="label"><?php echo $this->_tpl_vars['form']['financial_type_id']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['financial_type_id']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Sets the default financial type for payments against this pledge.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignTrClass' => "crm-pledge-form-block-campaign_id")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

      <tr class="crm-pledge-form-block-contribution_page_id">
        <td class="label"><?php echo $this->_tpl_vars['form']['contribution_page_id']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['contribution_page_id']['html']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select an Online Contribution page that the user can access to make self-service pledge payments. (Only Online Contribution pages configured to include the Pledge option are listed.)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
      </tr>

      <tr class="crm-pledge-form-block-status">
        <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pledge Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
    <td class="view-value"><?php echo $this->_tpl_vars['status']; ?>
<br />
            <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Pledges are "Pending" until the first payment is received. Once a payment is received, status is "In Progress" until all scheduled payments are completed. Overdue pledges are ones with payment(s) past due.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td></tr>
      <tr><td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
       </table>
<?php echo '
<script type="text/javascript">
  // bind first click of accordion header to load crm-accordion-body with snippet
  // everything else taken care of by $().crm-accordions()
  CRM.$(function($) {
    $(\'.crm-ajax-accordion .crm-accordion-header\').one(\'click\', function() {
      loadPanes($(this).attr(\'id\'));
    });
    $(\'#currency\').on(\'change\', function() {
      replaceCurrency($(\'#currency option:selected\').text());
    });
    $(\'.crm-ajax-accordion:not(.collapsed) .crm-accordion-header\').each(function(index) {
      loadPanes($(this).attr(\'id\'));
    });

    function replaceCurrency(val) {
      var symbol = \'\';
      var eachPaymentAmout = $(\'#eachPaymentAmount\');
      var pos = val.indexOf("(") + 1;
      if (pos) {
        symbol = val.slice(pos, val.lastIndexOf(")"));
      }
      $(\'.currency-symbol\').text(symbol).append("&nbsp;").append(eachPaymentAmout);
    }

    // load panes function calls for snippet based on id of crm-accordion-header
    function loadPanes( id ) {
      var url = "'; ?>
<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contact/view/pledge','q' => 'snippet=4&formType=','h' => 0), $this);?>
<?php echo '" + id;
      '; ?>

        <?php if ($this->_tpl_vars['contributionMode']): ?>
          url = url + "&mode=<?php echo $this->_tpl_vars['contributionMode']; ?>
";
        <?php endif; ?>
      <?php echo '
      if ( ! $(\'div.\'+id).html() ) {
        var loading = \'<img src="'; ?>
<?php echo $this->_tpl_vars['config']->resourceBase; ?>
i/loading.gif<?php echo '" alt="'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>loading<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '" />&nbsp;'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Loading<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '...\';
        $(\'div.\'+id).html(loading);
        $.ajax({
          url    : url,
            success: function(data) { $(\'div.\'+id).html(data).trigger(\'crmLoad\'); }
        });
      }
    }
  });
</script>
'; ?>



<div class="accordion ui-accordion ui-widget ui-helper-reset">
<?php $_from = $this->_tpl_vars['allPanes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paneName'] => $this->_tpl_vars['paneValue']):
?>
<div class="crm-accordion-wrapper crm-ajax-accordion crm-<?php echo $this->_tpl_vars['paneValue']['id']; ?>
-accordion <?php if ($this->_tpl_vars['paneValue']['open'] != 'true'): ?>collapsed<?php endif; ?>">
<div class="crm-accordion-header" id="<?php echo $this->_tpl_vars['paneValue']['id']; ?>
">
        <?php echo $this->_tpl_vars['paneName']; ?>

  </div><!-- /.crm-accordion-header -->
 <div class="crm-accordion-body">
       <div class="<?php echo $this->_tpl_vars['paneValue']['id']; ?>
"></div>
 </div><!-- /.crm-accordion-body -->
</div><!-- /.crm-accordion-wrapper -->

<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?> 
<br />
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php echo '
     <script type="text/javascript">

     function verify( ) {
        if (cj(\'#is_acknowledge\').is(\':checked\')) {
            var emailAddress = \''; ?>
<?php echo $this->_tpl_vars['email']; ?>
<?php echo '\';
      if ( !emailAddress ) {
      var emailAddress = cj(\'#email-address\').html();
      }
      var message = \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js','1' => "%1")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click OK to save this Pledge record AND send an acknowledgment to %1 now.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\';
         return confirm(ts(message, {1: emailAddress}));
        }
     }

     function calculatedPaymentAmount( ) {
       var thousandMarker = '; ?>
<?php echo smarty_function_crmSetting(array('name' => 'monetaryThousandSeparator','group' => 'CiviCRM Localization'), $this);?>
<?php echo ';
       var seperator      = \''; ?>
<?php echo $this->_tpl_vars['config']->monetaryDecimalPoint; ?>
<?php echo '\';
       var amount = document.getElementById("amount").value;
       // replace all thousandMarker and change the seperator to a dot
       amount = amount.replace(thousandMarker,\'\').replace(seperator,\'.\');
       var installments = document.getElementById("installments").value;
       if ( installments != \'\' && installments != NaN) {
            amount =  amount/installments;
            var installmentAmount = formatMoney( amount, 2, seperator, thousandMarker );
            document.getElementById("eachPaymentAmount").value = installmentAmount;
       }
     }

     function formatMoney (amount, c, d, t){
       var n = amount,
       c = isNaN(c = Math.abs(c)) ? 2 : c,
       d = d == undefined ? "," : d,
       t = t == undefined ? "." : t, s = n < 0 ? "-" : "",
       i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
       j = (j = i.length) > 3 ? j % 3 : 0;
     return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\\d{3})(?=\\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
     };

    '; ?>

    <?php if ($this->_tpl_vars['context'] == 'standalone' && $this->_tpl_vars['outBound_option'] != 2): ?>
    <?php echo '
    CRM.$(function($) {
      var $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '");
      $("#contact_id", $form).change(checkEmail);
      checkEmail( );

      function checkEmail( ) {
        var data = $("#contact_id", $form).select2(\'data\');
        if (data && data.extra && data.extra.email && data.extra.email.length) {
          $("#acknowledgment-receipt", $form).show();
          $("#email-address", $form).html(data.extra.email);
        }
        else {
          $("#acknowledgment-receipt", $form).hide();
        }
      }

      showHideByValue( \'is_acknowledge\', \'\', \'acknowledgeDate\', \'table-row\', \'radio\', true);
      showHideByValue( \'is_acknowledge\', \'\', \'fromEmail\', \'table-row\', \'radio\', false );
    });

    '; ?>

    <?php endif; ?>
</script>

<?php if ($this->_tpl_vars['email'] && $this->_tpl_vars['outBound_option'] != 2): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_acknowledge','trigger_value' => "",'target_element_id' => 'acknowledgeDate','target_element_type' => "table-row",'field_type' => 'radio','invert' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/showHideByFieldValue.tpl", 'smarty_include_vars' => array('trigger_field_id' => 'is_acknowledge','trigger_value' => "",'target_element_id' => 'fromEmail','target_element_type' => "table-row",'field_type' => 'radio','invert' => 0)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>