<?php /* Smarty version 2.6.31, created on 2019-06-22 14:21:16
         compiled from CRM/Export/Form/Select.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Export/Form/Select.tpl', 1, false),array('block', 'ts', 'CRM/Export/Form/Select.tpl', 31, false),array('function', 'help', 'CRM/Export/Form/Select.tpl', 61, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-export-form-block">

 <div class="help">
    <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><strong>Export PRIMARY fields</strong> provides the most commonly used data values. This includes primary address information, preferred phone and email.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
    <p><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Click <strong>Select fields for export</strong> and then <strong>Continue</strong> to choose a subset of fields for export. This option allows you to export multiple specific locations (Home, Work, etc.) as well as custom data. You can also save your selections as a 'field mapping' so you can use it again later.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></p>
 </div>

  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/WizardHeader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="export-type">
  <div class="crm-section crm-exportOption-section">
    <h3><?php $this->_tag_stack[] = array('ts', array('count' => $this->_tpl_vars['totalSelectedRecords'],'plural' => '%count records selected for export.')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>One record selected for export.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></h3>
    <div class="content-no-label crm-content-exportOption">
        <?php echo $this->_tpl_vars['form']['exportOption']['html']; ?>

   </div>
  </div>

  <div id="map" class="crm-section crm-export-mapping-section">
      <?php if ($this->_tpl_vars['form']['mapping']): ?>
        <div class="label crm-label-export-mapping">
            <?php echo $this->_tpl_vars['form']['mapping']['label']; ?>

        </div>
        <div class="content crm-content-export-mapping">
            <?php echo $this->_tpl_vars['form']['mapping']['html']; ?>

        </div>
    <div class="clear"></div>
      <?php endif; ?>
  </div>

  <?php if ($this->_tpl_vars['taskName'] == 'Export Contacts' || $this->_tpl_vars['component'] == false): ?>
  <div class="crm-section crm-export-mergeOptions-section">
    <div class="label crm-label-mergeOptions"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Merge Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <?php echo smarty_function_help(array('id' => "id-export_merge_options"), $this);?>
</div>
    <div class="content crm-content-mergeOptions">
      <?php echo $this->_tpl_vars['form']['mergeOption']['html']; ?>

    </div>
    <div id='greetings' class="content crm-content-greetings class='hiddenElement'">
      <table class="form-layout-compressed">
        <tr>
           <td><?php echo $this->_tpl_vars['form']['postal_greeting']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['postal_greeting']['html']; ?>
</td>
        </tr>
        <tr id='postal_greeting_other_wrapper' class='hiddenElement'>
           <td><?php echo $this->_tpl_vars['form']['postal_greeting_other']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['postal_greeting_other']['html']; ?>
</td>
        </tr>
        <tr><td></td><td></td></tr>
        <tr>
           <td><?php echo $this->_tpl_vars['form']['addressee']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['addressee']['html']; ?>
</td>
        </tr>
        <tr id='addressee_other_wrapper' class='hiddenElement'>
           <td><?php echo $this->_tpl_vars['form']['addressee_other']['label']; ?>
</td>
           <td><?php echo $this->_tpl_vars['form']['addressee_other']['html']; ?>
</td>
        </tr>
      </table>
      <div class="clear">&nbsp;</div>
    </div>

    <div class="content crm-content-mergeSameHousehold">
        &nbsp;<?php echo $this->_tpl_vars['form']['merge_same_household']['html']; ?>

    </div>
    <br/>
    <div class="label crm-label-postalMailingExport"><?php echo $this->_tpl_vars['form']['postal_mailing_export']['label']; ?>
</div>
    <div class="content crm-content-postalMailingExport">
        &nbsp;<?php echo $this->_tpl_vars['form']['postal_mailing_export']['html']; ?>

        <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Exclude contacts with "do not mail" privacy, no street address, or who are deceased.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
    </div>
    <br/>
    <div class="label crm-label-additionalGroup"><?php echo $this->_tpl_vars['form']['additional_group']['label']; ?>
</div>
    <div class="content crm-content-additionalGroup">
        &nbsp;<?php echo $this->_tpl_vars['form']['additional_group']['html']; ?>

    </div>
  <div class="clear"></div>
  </div>
  <?php endif; ?>

 </div>

 <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
</div>
<?php echo '
  <script type="text/javascript">
     function showMappingOption( )
     {
  var element = document.getElementsByName("exportOption");

  if ( element[1].checked ) {
    cj(\'#map\').show();
        } else {
    cj(\'#map\').hide();
  }
     }
     showMappingOption( );

     var matchingContacts = \'\';
     '; ?>
<?php if ($this->_tpl_vars['matchingContacts']): ?><?php echo '
       matchingContacts = '; ?>
'<?php echo $this->_tpl_vars['matchingContacts']; ?>
'<?php echo ';
     '; ?>
<?php endif; ?><?php echo '

     function showGreetingOptions( )
     {
        var mergeAddress = cj( "input[name=\'mergeOption\']:checked" ).val( );

        if ( mergeAddress == 1 ) {
            cj( "#greetings" ).show( );
        } else {
            cj( "#greetings" ).hide( );
  }
     }

     function showOther( ele )
     {
        if ( cj(\'option:selected\', ele).text( ) == \''; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Other<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '\' ) {
     cj(\'#\' + cj(ele).attr(\'id\') + \'_other_wrapper\').show( );
        } else {
          cj(\'#\' + cj(ele).attr(\'id\') + \'_other\').val(\'\');
    cj(\'#\' + cj(ele).attr(\'id\') + \'_other_wrapper\').hide( );
  }
     }

     showGreetingOptions( );
     showOther(cj(\'#postal_greeting\'));
     showOther(cj(\'#addressee\'));
  </script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>