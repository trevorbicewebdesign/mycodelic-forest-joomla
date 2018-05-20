<?php /* Smarty version 2.6.30, created on 2018-02-11 12:54:13
         compiled from CRM/Custom/Page/Option.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Custom/Page/Option.tpl', 1, false),array('block', 'ts', 'CRM/Custom/Page/Option.tpl', 31, false),array('block', 'crmButton', 'CRM/Custom/Page/Option.tpl', 160, false),array('function', 'crmURL', 'CRM/Custom/Page/Option.tpl', 60, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] == 1 || $this->_tpl_vars['action'] == 2 || $this->_tpl_vars['action'] == 4 || $this->_tpl_vars['action'] == 8): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/Option.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <?php if ($this->_tpl_vars['reusedNames']): ?>
      <div class="message status">
        <div class="icon inform-icon"></div> &nbsp; <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['reusedNames'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>These Multiple Choice Options are shared by the following custom fields: %1<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
  <?php endif; ?>

  <div id="field_page">
    <p></p>
    <div class="form-item">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/enableDisableApi.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <table class="crm-option-selector">
      <thead>
          <tr class="columnheader">
            <th class='crm-custom_option-label'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Label<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
            <th class='crm-custom_option-value'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Value<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
            <th class='crm-custom_option-default_value'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Default<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
            <th class='crm-custom_option-is_active'><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enabled?<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
            <th class='crm-custom_option-links'>&nbsp;</th>
            <th class='hiddenElement'>&nbsp;</th>
          </tr>
        </thead>
      </table>
      <?php echo '
      <script type="text/javascript">
      CRM.$(function($) {
        var crmOptionSelector;

        buildOptions();

        function buildOptions() {
          var sourceUrl = '; ?>
'<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/ajax/optionlist",'h' => 0,'q' => "snippet=4&fid=".($this->_tpl_vars['fid'])."&gid=".($this->_tpl_vars['gid'])), $this);?>
'<?php echo ';
          var $context = $(\'.crm-container\');
          var ZeroRecordText = '; ?>
'<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>None found.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>'<?php echo ';

          crmOptionSelector = $(\'table.crm-option-selector\', $context).dataTable({
              "destroy"    : true,
              "bFilter"    : false,
              "bAutoWidth" : false,
              "aaSorting"  : [],
              "aoColumns"  : [
                              {sClass:\'crm-custom_option-label\'},
                              {sClass:\'crm-custom_option-value\'},
                              {sClass:\'crm-custom_option-default_value\'},
                              {sClass:\'crm-custom_option-is_active\'},
                              {sClass:\'crm-custom_option-links\'},
                              {sClass:\'hiddenElement\'}
                             ],
              "bProcessing": true,
              "asStripClasses" : [ "odd-row", "even-row" ],
              "sPaginationType": "full_numbers",
              "sDom"       : \'<"crm-datatable-pager-top"lfp>rt<"crm-datatable-pager-bottom"ip>\',
              "bServerSide": true,
              "bJQueryUI": true,
              "bSort" : false,
              "sAjaxSource": sourceUrl,
              "iDisplayLength": 10,
              "oLanguage": {
                             "sZeroRecords":   ZeroRecordText,
                             "sProcessing":    '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Processing...<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ',
                             "sLengthMenu":    '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Show _MENU_ entries<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ',
                             "sInfo":          '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Showing _START_ to _END_ of _TOTAL_ entries<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ',
                             "oPaginate": {
                                  "sFirst":    '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>First<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ',
                                  "sPrevious": '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Previous<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ',
                                  "sNext":     '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ',
                                  "sLast":     '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Last<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo '
                              }
                            },
              "fnRowCallback": function(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                var id = $(\'td:last\', nRow).text().split(\',\')[0];
                var cl = $(\'td:last\', nRow).text().split(\',\')[1];
                $(nRow).addClass(cl).attr({id: \'OptionValue-\' + id});
                $(\'td:eq(0)\', nRow).wrapInner(\'<span class="crm-editable crmf-label" />\');
                $(\'td:eq(0)\', nRow).prepend(\'<span class="crm-i fa-arrows crm-grip" />\');
                $(\'td:eq(2)\', nRow).addClass(\'crmf-default_value\');
                return nRow;
              },
              "fnDrawCallback": function() {
                $(this).trigger(\'crmLoad\');
              },

              "fnServerData": function ( sSource, aoData, fnCallback ) {
                  $.ajax( {
                      "dataType": \'json\',
                      "type": "POST",
                      "url": sSource,
                      "data": aoData,
                      "success": fnCallback
                  } );
              }
          });
        }


        var startPosition;
        var endPosition;
        var gid = '; ?>
'<?php echo $this->_tpl_vars['optionGroupID']; ?>
'<?php echo ';

        $("table.crm-option-selector tbody").sortable({
          handle: ".fa-arrows",
          cursor: "move",
          start:function(event, ui) {
            var oSettings = $(\'table.crm-option-selector\').dataTable().fnSettings();
            var index = oSettings._iDisplayStart;
            startPosition = index + ui.item.prevAll().length + 1;
          },
          update: function(event, ui) {
            var oSettings = $(\'table.crm-option-selector\').dataTable().fnSettings();
            var index = oSettings._iDisplayStart;
            endPosition = index + ui.item.prevAll().length + 1;

            CRM.status({}, $.getJSON(CRM.url(\'civicrm/ajax/reorder\'), {
              returnFormat:\'JSON\',
              start:startPosition,
              end: endPosition,
              gid: gid
            }))
            .success(function() {
              $("table.crm-option-selector tbody tr").each(function(i) {
                $(this).removeClass(\'odd even\').addClass(i % 2 ? \'even\' : \'odd\');
              });
            });
          }
        });
      });

      </script>
      '; ?>


      <div class="action-link">
          <?php $this->_tag_stack[] = array('crmButton', array('q' => "reset=1&action=map&fid=".($this->_tpl_vars['fid'])."&gid=".($this->_tpl_vars['gid']),'class' => "action-item open-inline-noreturn",'icon' => "sort-alpha-asc")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Alphabetize Options<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php $this->_tag_stack[] = array('crmButton', array('q' => "reset=1&action=add&fid=".($this->_tpl_vars['fid'])."&gid=".($this->_tpl_vars['gid']),'class' => "action-item",'icon' => "plus-circle")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Add Option<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          <?php $this->_tag_stack[] = array('crmButton', array('p' => "civicrm/admin/custom/group/field",'q' => "reset=1&action=browse&gid=".($this->_tpl_vars['gid']),'class' => "action-item cancel",'icon' => 'times')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Done<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>