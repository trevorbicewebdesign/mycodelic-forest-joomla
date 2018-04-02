<?php /* Smarty version 2.6.30, created on 2018-03-03 14:45:02
         compiled from CRM/Admin/Form/Setting/Url.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Setting/Url.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/Setting/Url.tpl', 29, false),array('function', 'help', 'CRM/Admin/Form/Setting/Url.tpl', 33, false),array('modifier', 'crmAddClass', 'CRM/Admin/Form/Setting/Url.tpl', 44, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-url-form-block">
<div class="help">
  <p>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>These settings define the URLs used to access CiviCRM resources (CSS files, Javascript files, images, etc.).<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  </p>
  <p>
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You may configure these settings using absolute URLs or URL variables.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_help(array('id' => 'id-url_vars'), $this);?>

  </p>

</div>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
<table class="form-layout">
    <tr class="crm-url-form-block-userFrameworkResourceURL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['userFrameworkResourceURL']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-resource_url'), $this);?>

        </td>
        <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['userFrameworkResourceURL']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge40') : smarty_modifier_crmAddClass($_tmp, 'huge40')); ?>

        </td>
    </tr>
    <tr class="crm-url-form-block-imageUploadURL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['imageUploadURL']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-image_url'), $this);?>

        </td>
        <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['imageUploadURL']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge40') : smarty_modifier_crmAddClass($_tmp, 'huge40')); ?>

        </td>
    </tr>
    <tr class="crm-url-form-block-customCSSURL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['customCSSURL']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-css_url'), $this);?>

        </td>
        <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['customCSSURL']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge40') : smarty_modifier_crmAddClass($_tmp, 'huge40')); ?>

        </td>
    </tr>
    <tr class="crm-url-form-block-disable_core_css">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['disable_core_css']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-css_url'), $this);?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['disable_core_css']['html']; ?>
<br />
            <p class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['disable_core_css_description']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        </td>
    </tr>
    <tr class="crm-url-form-block-extensionsURL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['extensionsURL']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-extensions_url'), $this);?>

        </td>
        <td>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['extensionsURL']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge40') : smarty_modifier_crmAddClass($_tmp, 'huge40')); ?>

        </td>
    </tr>
    <tr class="crm-url-form-block-enableSSL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['enableSSL']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-enable_ssl'), $this);?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['enableSSL']['html']; ?>

        </td>
    </tr>
    <tr class="crm-url-form-block-verifySSL">
        <td class="label">
            <?php echo $this->_tpl_vars['form']['verifySSL']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'id-verify_ssl'), $this);?>

        </td>
        <td>
            <?php echo $this->_tpl_vars['form']['verifySSL']['html']; ?>
<br/>
            <p class="description font-red"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['verifySSL_description']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
        </td>
    </tr>
</table>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>