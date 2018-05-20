<?php /* Smarty version 2.6.30, created on 2018-03-02 18:09:07
         compiled from CRM/SMS/Form/Provider.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/SMS/Form/Provider.tpl', 1, false),array('block', 'ts', 'CRM/SMS/Form/Provider.tpl', 33, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-job-form-block">
 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

<?php if ($this->_tpl_vars['action'] == 8): ?>
  <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Do you want to continue?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php elseif ($this->_tpl_vars['action'] == 128): ?>
  <div class="messages status no-popup">
      <div class="icon inform-icon"></div>
        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Are you sure you would like to execute this job?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </div>
<?php else: ?>
  <table class="form-layout-compressed">
    <tr class="crm-job-form-block-name">
        <td class="label"><?php echo $this->_tpl_vars['form']['name']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['name']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-title">
        <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['title']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-username">
        <td class="label"><?php echo $this->_tpl_vars['form']['username']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['username']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-password">
        <td class="label"><?php echo $this->_tpl_vars['form']['password']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['password']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-api_type">
        <td class="label"><?php echo $this->_tpl_vars['form']['api_type']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['api_type']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-api_url">
        <td class="label"><?php echo $this->_tpl_vars['form']['api_url']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['api_url']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-api_params">
        <td class="label"><?php echo $this->_tpl_vars['form']['api_params']['label']; ?>
</td><td><?php echo $this->_tpl_vars['form']['api_params']['html']; ?>
</td>
    </tr>
    <tr class="crm-job-form-block-is_active">
        <td></td><td><?php echo $this->_tpl_vars['form']['is_active']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_active']['label']; ?>
</td>
    </tr>
   <tr class="crm-job-form-block-is_active">
        <td></td><td><?php echo $this->_tpl_vars['form']['is_default']['html']; ?>
&nbsp;<?php echo $this->_tpl_vars['form']['is_default']['label']; ?>
</td>
   </tr>
  </table>
<?php endif; ?>
</table>
       <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
  </fieldset>
</div>

<?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2): ?>
<script type="text/javascript" >
<?php echo '
  CRM.$(function($) {
    var $form = $("form.'; ?>
<?php echo $this->_tpl_vars['form']['formClass']; ?>
<?php echo '");
    $(\'select[name=name]\', $form).change(function() {
      var url = '; ?>
"<?php echo $this->_tpl_vars['refreshURL']; ?>
"<?php echo ' + "&key=" + this.value;
      $(this).closest(\'.crm-ajax-container, #crm-main-content-wrapper\').crmSnippet({url: url}).crmSnippet(\'refresh\');
    });
  });
'; ?>

</script>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>