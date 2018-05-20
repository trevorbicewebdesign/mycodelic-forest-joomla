<?php /* Smarty version 2.6.30, created on 2018-03-02 18:42:30
         compiled from CRM/Admin/Form/Setting/Localization.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Admin/Form/Setting/Localization.tpl', 1, false),array('block', 'ts', 'CRM/Admin/Form/Setting/Localization.tpl', 28, false),array('function', 'docURL', 'CRM/Admin/Form/Setting/Localization.tpl', 29, false),array('function', 'help', 'CRM/Admin/Form/Setting/Localization.tpl', 51, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-localization-form-block">
  <div class="help">
    <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Configure CiviCRM for your country and language.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    <?php echo smarty_function_docURL(array('page' => "i18n Administrator's Guide: Using CiviCRM in your own language",'resource' => 'wiki'), $this);?>

  </div>
  <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> </div>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Language and Currency<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <table class="form-layout-compressed">
            <tr class="crm-localization-form-block-lcMessages">
                <td class="label"><?php echo $this->_tpl_vars['form']['lcMessages']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['lcMessages']['html']; ?>
</td>
            </tr>
           <?php if ($this->_tpl_vars['form']['languageLimit']): ?>
             <tr class="crm-localization-form-block-languageLimit">
                 <td class="label"><?php echo $this->_tpl_vars['form']['languageLimit']['label']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['form']['languageLimit']['html']; ?>
<br />
                 <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Languages available to users of this installation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
             </tr>
             <tr class="crm-localization-form-block-addLanguage">
                 <td class="label"><?php echo $this->_tpl_vars['form']['addLanguage']['label']; ?>
</td>
                 <td><?php echo $this->_tpl_vars['form']['addLanguage']['html']; ?>
<br />
                 <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add a new language to this installation.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
             </tr>
          <?php endif; ?>
            <tr class="crm-localization-form-block-inheritLocale">
                <td class="label"><?php echo $this->_tpl_vars['form']['inheritLocale']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'inheritLocale','title' => $this->_tpl_vars['form']['inheritLocale']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['inheritLocale']['html']; ?>
</td>
            </tr>
          <tr class="crm-localization-form-contact_default_language">
            <td class="label"><?php echo $this->_tpl_vars['form']['contact_default_language']['label']; ?>
</td>
            <td><?php echo $this->_tpl_vars['form']['contact_default_language']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default language (if any) for contact records.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
            <tr class="crm-localization-form-block-defaultCurrency">
                <td class="label"><?php echo $this->_tpl_vars['form']['defaultCurrency']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'defaultCurrency','title' => $this->_tpl_vars['form']['defaultCurrency']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['defaultCurrency']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-monetaryThousandSeparator">
                <td class="label"><?php echo $this->_tpl_vars['form']['monetaryThousandSeparator']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['monetaryThousandSeparator']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-monetaryDecimalPoint">
                <td class="label"><?php echo $this->_tpl_vars['form']['monetaryDecimalPoint']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['monetaryDecimalPoint']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-currencyLimit">
                <td class="label"><?php echo $this->_tpl_vars['form']['currencyLimit']['label']; ?>
</td>
                <td><?php echo $this->_tpl_vars['form']['currencyLimit']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-moneyformat">
                <td class="label"><?php echo $this->_tpl_vars['form']['moneyformat']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'moneyformat','title' => $this->_tpl_vars['form']['moneyformat']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['moneyformat']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-moneyvalueformat">
                <td class="label"><?php echo $this->_tpl_vars['form']['moneyvalueformat']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'moneyvalueformat','title' => $this->_tpl_vars['form']['moneyvalueformat']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['moneyvalueformat']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-customTranslateFunction">
                <td class="label"><?php echo $this->_tpl_vars['form']['customTranslateFunction']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'customTranslateFunction','title' => $this->_tpl_vars['form']['customTranslateFunction']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['customTranslateFunction']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-legacyEncoding">
                <td class="label"><?php echo $this->_tpl_vars['form']['legacyEncoding']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'legacyEncoding','title' => $this->_tpl_vars['form']['legacyEncoding']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['legacyEncoding']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-fieldSeparator">
                <td class="label"><?php echo $this->_tpl_vars['form']['fieldSeparator']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'fieldSeparator','title' => $this->_tpl_vars['form']['fieldSeparator']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['fieldSeparator']['html']; ?>
</td>
            </tr>
        </table>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contact Address Fields - Selection Values<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
        <table class="form-layout-compressed">
            <tr class="crm-localization-form-block-defaultContactCountry">
                <td class="label"><?php echo $this->_tpl_vars['form']['defaultContactCountry']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'defaultContactCountry','title' => $this->_tpl_vars['form']['defaultContactCountry']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['defaultContactCountry']['html']; ?>
</td>
            </tr>
           <tr class="crm-localization-form-block-defaultContactStateProvince">
                <td class="label"><?php echo $this->_tpl_vars['form']['defaultContactStateProvince']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'defaultContactCountry','title' => $this->_tpl_vars['form']['defaultContactStateProvince']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['defaultContactStateProvince']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-countryLimit">
                <td class="label"><?php echo $this->_tpl_vars['form']['countryLimit']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'countryLimit','title' => $this->_tpl_vars['form']['countryLimit']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['countryLimit']['html']; ?>
</td>
            </tr>
            <tr class="crm-localization-form-block-provinceLimit">
                <td class="label"><?php echo $this->_tpl_vars['form']['provinceLimit']['label']; ?>
 <?php echo smarty_function_help(array('id' => 'provinceLimit','title' => $this->_tpl_vars['form']['provinceLimit']['label']), $this);?>
</td>
                <td><?php echo $this->_tpl_vars['form']['provinceLimit']['html']; ?>
</td>
            </tr>
        </table>
    <h3><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Multiple Languages Support<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
      <table class="form-layout-compressed">
        <?php if ($this->_tpl_vars['form']['languageLimit']): ?>
          <tr class="crm-localization-form-block-makeSinglelingual_description">
              <td></td>
              <td><span class="description"><?php $this->_tag_stack[] = array('ts', array('1' => "http://documentation.civicrm.org")); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>This is a multilingual installation. It contains certain schema differences compared to regular installations of CiviCRM. Please <a href="%1">refer to the documentation</a> for details.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span></td>
          </tr>
          <tr class="crm-localization-form-block-makeSinglelingual">
              <td class="label"><?php echo $this->_tpl_vars['form']['makeSinglelingual']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['makeSinglelingual']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box and click 'Save' to switch this installation from multi- to single-language.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span><br /><br />
              <span class="description" style="color:red"><?php echo $this->_tpl_vars['warning']; ?>
</span></td>
          </tr>
        <?php elseif ($this->_tpl_vars['form']['makeMultilingual']): ?>
          <tr class="crm-localization-form-block-makeMultilingual">
              <td class="label"><?php echo $this->_tpl_vars['form']['makeMultilingual']['label']; ?>
</td>
              <td><?php echo $this->_tpl_vars['form']['makeMultilingual']['html']; ?>
<br />
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Check this box and click 'Save' to switch this installation from single- to multi-language, then add further languages.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span><br /><br />
              <span class="description" style="color:red"><?php echo $this->_tpl_vars['warning']; ?>
</span></td>
        <?php else: ?>
          <tr class="crm-localization-form-block-description">
              <td>
              <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>In order to use this functionality, the installation's database user must have privileges to create triggers and views (in MySQL 5.0 – and in MySQL 5.1 if binary logging is enabled – this means the SUPER privilege). This install either does not seem to have the required privilege enabled.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>(Multilingual support currently cannot be enabled on installations with enabled logging.)<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span><br /><br />
              <span class="description" style="color:red"><?php echo $this->_tpl_vars['warning']; ?>
</span></td>
          </tr>
        <?php endif; ?>
      </table>
    <div class="crm-submit-buttons">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
<div class="spacer"></div>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>