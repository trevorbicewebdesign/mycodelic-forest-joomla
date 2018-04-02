<?php /* Smarty version 2.6.30, created on 2018-03-23 15:54:11
         compiled from CRM/Contact/Form/Inline/CommunicationPreferences.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Inline/CommunicationPreferences.tpl', 1, false),array('block', 'ts', 'CRM/Contact/Form/Inline/CommunicationPreferences.tpl', 94, false),array('function', 'help', 'CRM/Contact/Form/Inline/CommunicationPreferences.tpl', 38, false),array('modifier', 'crmAddClass', 'CRM/Contact/Form/Inline/CommunicationPreferences.tpl', 91, false),)), $this); ?>
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
      <?php $_from = $this->_tpl_vars['commPreference']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
      <div class="crm-summary-row">
        <div class="crm-label"><?php echo $this->_tpl_vars['form'][$this->_tpl_vars['key']]['label']; ?>

          <?php echo smarty_function_help(array('id' => "id-".($this->_tpl_vars['key']),'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

        </div>
        <div class="crm-content">
          <?php $_from = $this->_tpl_vars['item']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k'] => $this->_tpl_vars['i']):
?>
            <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['key']][$this->_tpl_vars['k']]['html']; ?>
<br/>
          <?php endforeach; endif; unset($_from); ?>
        </div>
      </div>
      <?php if ($this->_tpl_vars['key'] == 'privacy'): ?>
      <div class="crm-summary-row">
        <div class="crm-label">&nbsp;</div>
        <div class="crm-content"><?php echo $this->_tpl_vars['form']['is_opt_out']['html']; ?>
 <?php echo $this->_tpl_vars['form']['is_opt_out']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-optOut",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

        </div>
      </div>
      <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?>
      <div class="crm-summary-row">
        <div class="crm-label">
          <?php echo $this->_tpl_vars['form']['preferred_language']['label']; ?>

        </div>
        <div class="crm-content">
          <?php echo $this->_tpl_vars['form']['preferred_language']['html']; ?>

        </div>
      </div>

      <?php if (! empty ( $this->_tpl_vars['form']['preferred_mail_format'] )): ?>
      <div class="crm-summary-row">
        <div class="crm-label">
          <?php echo $this->_tpl_vars['form']['preferred_mail_format']['label']; ?>

          <?php echo smarty_function_help(array('id' => "id-emailFormat",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

        </div>
        <div class="crm-content">
          <?php echo $this->_tpl_vars['form']['preferred_mail_format']['html']; ?>

        </div>
      </div>
      <?php endif; ?>

      <?php if (! empty ( $this->_tpl_vars['form']['communication_style_id'] )): ?>
      <div class="crm-summary-row">
        <div class="crm-label">
          <?php echo $this->_tpl_vars['form']['communication_style_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-communication_style",'file' => "CRM/Contact/Form/Contact.hlp"), $this);?>

        </div>
        <div class="crm-content">
          <?php echo $this->_tpl_vars['form']['communication_style_id']['html']; ?>

        </div>
      </div>
      <?php endif; ?>

      <?php if (! empty ( $this->_tpl_vars['form']['email_greeting_id'] )): ?>
      <div class="crm-summary-row">
        <div class="crm-label"><?php echo $this->_tpl_vars['form']['email_greeting_id']['label']; ?>
</div>
        <div class="crm-content">
          <span id="email_greeting" <?php if (! empty ( $this->_tpl_vars['email_greeting_display'] )): ?> class="hiddenElement"<?php endif; ?>>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email_greeting_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

          </span>
          <?php if (! empty ( $this->_tpl_vars['email_greeting_display'] )): ?>
            <div data-id="email_greeting" class="replace-plain big" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click to edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
              <?php echo $this->_tpl_vars['email_greeting_display']; ?>

            </div>
          <?php endif; ?>
          <?php if (! empty ( $this->_tpl_vars['form']['email_greeting_custom'] )): ?>
            <span id="email_greeting_id_html" class="hiddenElement">
              <br/><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['email_greeting_custom']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

            </span>
          <?php endif; ?>
         </div>
       </div>
      <?php endif; ?>


      <?php if (! empty ( $this->_tpl_vars['form']['postal_greeting_id'] )): ?>
      <div class="crm-summary-row">
        <div class="crm-label"><?php echo $this->_tpl_vars['form']['postal_greeting_id']['label']; ?>
</div>
        <div class="crm-content">
          <span id="postal_greeting" <?php if (! empty ( $this->_tpl_vars['postal_greeting_display'] )): ?> class="hiddenElement"<?php endif; ?>>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['postal_greeting_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

          </span>
          <?php if (! empty ( $this->_tpl_vars['postal_greeting_display'] )): ?>
            <div data-id="postal_greeting" class="replace-plain big" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click to edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
              <?php echo $this->_tpl_vars['postal_greeting_display']; ?>

            </div>
          <?php endif; ?>
          <?php if (! empty ( $this->_tpl_vars['form']['postal_greeting_custom'] )): ?>
            <span id="postal_greeting_id_html" class="hiddenElement">
              <br/><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['postal_greeting_custom']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

            </span>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>

      <?php if (! empty ( $this->_tpl_vars['form']['addressee_id'] )): ?>
      <div class="crm-summary-row">
        <div class="crm-label"><?php echo $this->_tpl_vars['form']['addressee_id']['label']; ?>
</div>
        <div class="crm-content">
          <span id="addressee" <?php if (! empty ( $this->_tpl_vars['addressee_display'] )): ?> class="hiddenElement"<?php endif; ?>>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['addressee_id']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

          </span>
          <?php if (! empty ( $this->_tpl_vars['addressee_display'] )): ?>
            <div data-id="addressee" class="replace-plain big" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click to edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>">
              <?php echo $this->_tpl_vars['addressee_display']; ?>

            </div>
          <?php endif; ?>
          <?php if (! empty ( $this->_tpl_vars['form']['addressee_custom'] )): ?>
            <span id="addressee_id_html" class="hiddenElement">
              <br/><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['addressee_custom']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'big') : smarty_modifier_crmAddClass($_tmp, 'big')); ?>

            </span>
          <?php endif; ?>
         </div>
       </div>
      <?php endif; ?>

    </div>
 </div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Edit/CommunicationPreferences.js.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>