<?php /* Smarty version 2.6.30, created on 2018-02-11 21:01:13
         compiled from CRM/Admin/Form/Preferences/Address.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Preferences/Address.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/Preferences/Address.tpl', 28, false),array('function', 'help', 'CRM/Admin/Form/Preferences/Address.tpl', 31, false),array('modifier', 'crmAddClass', 'CRM/Admin/Form/Preferences/Address.tpl', 37, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-preferences-address-form-block">
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailing Labels<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <table class="form-layout">
        <tr class="crm-preferences-address-form-block-mailing_format">
            <td class="label"><?php echo $this->_tpl_vars['form']['mailing_format']['label']; ?>
<br /><?php echo smarty_function_help(array('id' => 'label-tokens'), $this);?>
</td>
            <td>
              <div class="helpIcon" id="helphtml">
                <input class="crm-token-selector big" data-field="mailing_format" />
                <?php echo smarty_function_help(array('id' => "id-token-text",'tplFile' => $this->_tpl_vars['tplFile'],'file' => "CRM/Contact/Form/Task/Email.hlp"), $this);?>

              </div>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['mailing_format']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge12') : smarty_modifier_crmAddClass($_tmp, 'huge12')); ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Content and format for mailing labels.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>
         <tr class="crm-preferences-address-form-block-hideCountryMailingLabels">
           <td class="label"><?php echo $this->_tpl_vars['form']['hideCountryMailingLabels']['label']; ?>

           <td><?php echo $this->_tpl_vars['form']['hideCountryMailingLabels']['html']; ?>

           </td>
        </tr>

      </table>

    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Address Display<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <table class="form-layout">
          <tr class="crm-preferences-address-form-block-address_format">
              <td class="label"><?php echo $this->_tpl_vars['form']['address_format']['label']; ?>
<br /><?php echo smarty_function_help(array('id' => 'address-tokens'), $this);?>
</td>
              <td>
              <div class="helpIcon" id="helphtml">
                <input class="crm-token-selector big" data-field="address_format" />
                <?php echo smarty_function_help(array('id' => "id-token-text",'tplFile' => $this->_tpl_vars['tplFile'],'file' => "CRM/Contact/Form/Task/Email.hlp"), $this);?>

              </div>
                <?php echo ((is_array($_tmp=$this->_tpl_vars['form']['address_format']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge12') : smarty_modifier_crmAddClass($_tmp, 'huge12')); ?>
<br />
                <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Format for displaying addresses in the Contact Summary and Event Information screens.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><br /><?php $this->_tag_stack[] = array('ts', array('1' => "&#123;contact.state_province&#125;",'2' => "&#123;contact.state_province_name&#125;")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Use %1 for state/province abbreviation or %2 for state province name.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              </td>
          </tr>
      </table>

    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Address Editing<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <table class="form-layout">
             <tr class="crm-preferences-address-form-block-address_options">
                <td class="label"><?php echo $this->_tpl_vars['form']['address_options']['label']; ?>

                <td><?php echo $this->_tpl_vars['form']['address_options']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Select the fields to be included when editing a contact or event address.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td>
             </tr>
        </table>

    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Address Standardization<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <table class="form-layout">
             <tr class="crm-preferences-address-form-block-description">
                <td colspan="2">
                  <span class="description">
                      <?php $this->_tag_stack[] = array('ts', array('1' => "https://www.usps.com/business/web-tools-apis/welcome.htm")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>CiviCRM includes an optional plugin for interfacing with the United States Postal Services (USPS) Address Standardization web service. You must register to use the USPS service at <a href='%1' target='_blank'>%1</a>. If you are approved, they will provide you with a User ID and the URL for the service.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Plugins for other address standardization services may be available from 3rd party developers. If installed, they will be included in the drop-down below.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                  </span>
              </td>
            </tr>
            <tr class="crm-preferences-address-form-block-address_standardization_provider">
              <td class="label"><?php echo $this->_tpl_vars['form']['address_standardization_provider']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['address_standardization_provider']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Address Standardization Provider.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td>
            </tr>
            <tr class="crm-preferences-address-form-block-address_standardization_userid">
              <td class="label"><?php echo $this->_tpl_vars['form']['address_standardization_userid']['label']; ?>

              <td><?php echo $this->_tpl_vars['form']['address_standardization_userid']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Web service user ID.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
                </td>
            </tr>
            <tr class="crm-preferences-address-form-block-address_standardization_url">
              <td class="label"><?php echo $this->_tpl_vars['form']['address_standardization_url']['label']; ?>

              <td><?php echo $this->_tpl_vars['form']['address_standardization_url']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Web Service URL<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
              </td>
            </tr>
        </table>
<div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Mailing/Form/InsertTokens.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>