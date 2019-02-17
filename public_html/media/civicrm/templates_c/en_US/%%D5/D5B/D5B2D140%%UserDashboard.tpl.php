<?php /* Smarty version 2.6.30, created on 2019-02-16 08:36:32
         compiled from CRM/Contribute/Page/UserDashboard.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contribute/Page/UserDashboard.tpl', 1, false),array('block', 'ts', 'CRM/Contribute/Page/UserDashboard.tpl', 31, false),array('function', 'cycle', 'CRM/Contribute/Page/UserDashboard.tpl', 46, false),array('function', 'crmURL', 'CRM/Contribute/Page/UserDashboard.tpl', 64, false),array('modifier', 'crmMoney', 'CRM/Contribute/Page/UserDashboard.tpl', 47, false),array('modifier', 'truncate', 'CRM/Contribute/Page/UserDashboard.tpl', 54, false),array('modifier', 'crmDate', 'CRM/Contribute/Page/UserDashboard.tpl', 54, false),array('modifier', 'replace', 'CRM/Contribute/Page/UserDashboard.tpl', 153, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="view-content">
    <?php if ($this->_tpl_vars['contribute_rows']): ?>
        <?php echo '<table class="selector"><tr class="columnheader"><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Total Amount'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Financial Type'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Received date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Receipt Sent'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Status'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th>'; ?><?php if ($this->_tpl_vars['invoicing'] && $this->_tpl_vars['invoices']): ?><?php echo '<th></th>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['invoicing'] && $this->_tpl_vars['defaultInvoicePage']): ?><?php echo '<th></th>'; ?><?php endif; ?><?php echo '</tr>'; ?><?php $_from = $this->_tpl_vars['contribute_rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr id=\'rowid'; ?><?php echo $this->_tpl_vars['row']['contribution_id']; ?><?php echo '\'class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['row']['cancel_date']): ?><?php echo ' disabled'; ?><?php endif; ?><?php echo '"><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['row']['total_amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp, $this->_tpl_vars['row']['currency']) : smarty_modifier_crmMoney($_tmp, $this->_tpl_vars['row']['currency'])); ?><?php echo ' '; ?><?php if ($this->_tpl_vars['row']['amount_level']): ?><?php echo ' - '; ?><?php echo $this->_tpl_vars['row']['amount_level']; ?><?php echo ' '; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['row']['contribution_recur_id']): ?><?php echo '<br/>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo '(Recurring Contribution)'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ''; ?><?php endif; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['row']['financial_type']; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['receive_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['receipt_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['row']['contribution_status']; ?><?php echo '</td>'; ?><?php if ($this->_tpl_vars['invoicing'] && $this->_tpl_vars['invoices']): ?><?php echo '<td>'; ?><?php $this->assign('id', $this->_tpl_vars['row']['contribution_id']); ?><?php echo ''; ?><?php $this->assign('contact_id', $this->_tpl_vars['row']['contact_id']); ?><?php echo ''; ?><?php $this->assign('urlParams', "reset=1&id=".($this->_tpl_vars['id'])."&cid=".($this->_tpl_vars['contact_id'])); ?><?php echo ''; ?><?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'view my invoices' ) || call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'access CiviContribute' )): ?><?php echo '<a class="button no-popup nowrap"href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contribute/invoice','q' => $this->_tpl_vars['urlParams']), $this);?><?php echo '"><i class="crm-i fa-print"></i>'; ?><?php if ($this->_tpl_vars['row']['contribution_status'] != 'Refunded' && $this->_tpl_vars['row']['contribution_status'] != 'Cancelled'): ?><?php echo '<span>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Print Invoice'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</span>'; ?><?php else: ?><?php echo '<span>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Print Invoice and Credit Note'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</span>'; ?><?php endif; ?><?php echo '</a>'; ?><?php endif; ?><?php echo '</td>'; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['defaultInvoicePage'] && $this->_tpl_vars['row']['contribution_status'] == 'Pending (Pay Later)'): ?><?php echo '<td>'; ?><?php $this->assign('id', $this->_tpl_vars['row']['contribution_id']); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/contribute/transact','q' => "reset=1&id=".($this->_tpl_vars['defaultInvoicePage'])."&ccid=".($this->_tpl_vars['id'])), $this);?><?php echo ''; ?><?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('payNowLink', ob_get_contents());ob_end_clean(); ?><?php echo '<a class="button" href="'; ?><?php echo $this->_tpl_vars['payNowLink']; ?><?php echo '"><span class=\'nowrap\'>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Pay Now'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</span></a></td>'; ?><?php endif; ?><?php echo '</tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

        <?php if ($this->_tpl_vars['contributionSummary']['total']['count'] > 12): ?>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact us for information about contributions prior to those listed above.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        <?php endif; ?>
    <?php else: ?>
        <div class="messages status no-popup">
            <div class="icon inform-icon"></div>
            <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>There are no contributions on record for you.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
        </div>
    <?php endif; ?>


    <?php if ($this->_tpl_vars['honor']): ?>
        <?php if ($this->_tpl_vars['honorRows']): ?>
            <?php echo '<div class="help">'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Contributions made in your honor'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo ':</div><table class="selector"><tr class="columnheader"><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Contributor'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Amount'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Type'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Financial Type'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Received date'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Receipt Sent'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Status'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th></tr>'; ?><?php $_from = $this->_tpl_vars['honorRows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?><?php echo '<tr id=\'rowid'; ?><?php echo $this->_tpl_vars['row']['honorId']; ?><?php echo '\' class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo '"><td><a href="'; ?><?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/view",'q' => "reset=1&cid=".($this->_tpl_vars['row']['honorId'])), $this);?><?php echo '"id="view_contact">'; ?><?php echo $this->_tpl_vars['row']['display_name']; ?><?php echo '</a></td><td>'; ?><?php echo $this->_tpl_vars['row']['amount']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['row']['honor_type']; ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['row']['type']; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['receive_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']['receipt_date'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 10, '') : smarty_modifier_truncate($_tmp, 10, '')))) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td>'; ?><?php echo $this->_tpl_vars['row']['contribution_status']; ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

        <?php endif; ?>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['recur']): ?>
        <?php if ($this->_tpl_vars['recurRows']): ?>
            <?php echo '<div><label>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Recurring Contribution(s)'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</label></div><table class="selector"><tr class="columnheader"><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Terms:'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Status'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Installments'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th>'; ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo 'Created'; ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '</th><th></th></tr>'; ?><?php $_from = $this->_tpl_vars['recurRows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['row']):
?><?php echo '<tr class="'; ?><?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?><?php echo '"><td><label>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['amount'])) ? $this->_run_mod_handler('crmMoney', true, $_tmp) : smarty_modifier_crmMoney($_tmp)); ?><?php echo '</label>every '; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['frequency_interval']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['frequency_unit']; ?><?php echo 'for '; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['installments']; ?><?php echo ' installments</td><td>'; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['recur_status']; ?><?php echo '</td><td>'; ?><?php if ($this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['completed']): ?><?php echo '<a href="'; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['link']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['completed']; ?><?php echo '/'; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['installments']; ?><?php echo '</a>'; ?><?php else: ?><?php echo '0/'; ?><?php echo $this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['installments']; ?><?php echo ' '; ?><?php endif; ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['create_date'])) ? $this->_run_mod_handler('crmDate', true, $_tmp) : smarty_modifier_crmDate($_tmp)); ?><?php echo '</td><td>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['recurRows'][$this->_tpl_vars['id']]['action'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'xx', $this->_tpl_vars['recurRows']['id']) : smarty_modifier_replace($_tmp, 'xx', $this->_tpl_vars['recurRows']['id'])); ?><?php echo '</td></tr>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</table>'; ?>

        <?php endif; ?>
    <?php endif; ?>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>