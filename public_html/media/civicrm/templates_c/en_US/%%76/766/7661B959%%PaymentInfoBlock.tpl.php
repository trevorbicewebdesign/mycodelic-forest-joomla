<?php /* Smarty version 2.6.31, created on 2019-09-05 17:21:00
         compiled from CRM/Contribute/Form/PaymentInfoBlock.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Form/PaymentInfoBlock.tpl', 1, false),array('block', 'crmRegion', 'CRM/Contribute/Form/PaymentInfoBlock.tpl', 26, false),array('block', 'ts', 'CRM/Contribute/Form/PaymentInfoBlock.tpl', 30, false),array('function', 'cycle', 'CRM/Contribute/Form/PaymentInfoBlock.tpl', 39, false),array('modifier', 'crmMoney', 'CRM/Contribute/Form/PaymentInfoBlock.tpl', 40, false),array('modifier', 'crmDate', 'CRM/Contribute/Form/PaymentInfoBlock.tpl', 43, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('crmRegion', array('name' => "payment-info-block")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if (! empty ( $this->_tpl_vars['payments'] )): ?>
  <table class="selector row-highlight">
    <tr>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Amount<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Type<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Payment Method<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Received<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Transaction ID<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Status<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
      <th></th>
    </tr>
    <?php $_from = $this->_tpl_vars['payments']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['payment']):
?>
      <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['payment']['total_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['payment']['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['payment']['currency'])); ?>
</td>
        <td><?php echo $this->_tpl_vars['payment']['financial_type']; ?>
</td>
        <td><?php echo $this->_tpl_vars['payment']['payment_instrument']; ?>
<?php if ($this->_tpl_vars['payment']['check_number']): ?> (#<?php echo $this->_tpl_vars['payment']['check_number']; ?>
)<?php endif; ?></td>
        <td><?php echo ((is_array($_tmp=$this->_tpl_vars['payment']['receive_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?>
</td>
        <td><?php echo $this->_tpl_vars['payment']['trxn_id']; ?>
</td>
        <td><?php echo $this->_tpl_vars['payment']['status']; ?>
</td>
        <td><?php echo $this->_tpl_vars['payment']['action']; ?>
</td>
      </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
<?php else: ?>
   <?php if ($this->_tpl_vars['component'] == 'event'): ?>
     <?php $this->assign('entity', 'participant'); ?>
   <?php else: ?>
     <?php $this->assign('entity', $this->_tpl_vars['component']); ?>
   <?php endif; ?>
   <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['entity'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>No payments found for this %1 record<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php endif; ?>

  <?php $_from = $this->_tpl_vars['paymentLinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['paymentLink']):
?>
    <a class="open-inline action-item crm-hover-button" href="<?php echo $this->_tpl_vars['paymentLink']['url']; ?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['paymentLink']['title']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
  <?php endforeach; endif; unset($_from); ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>