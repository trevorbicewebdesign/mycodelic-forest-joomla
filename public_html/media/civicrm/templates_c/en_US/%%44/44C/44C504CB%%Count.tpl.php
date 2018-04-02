<?php /* Smarty version 2.6.30, created on 2018-03-02 18:34:20
         compiled from CRM/Mailing/Form/Count.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Mailing/Form/Count.tpl', 1, false),array('block', 'ts', 'CRM/Mailing/Form/Count.tpl', 27, false),array('modifier', 'crmNumberFormat', 'CRM/Mailing/Form/Count.tpl', 27, false),array('function', 'cycle', 'CRM/Mailing/Form/Count.tpl', 41, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="messages status float-right no-popup">
  <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Total Recipients:<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?> <strong><?php echo ((is_array($_tmp=$this->_tpl_vars['count'])) ? $this->_run_mod_handler('crmNumberFormat', true, $_tmp) : smarty_modifier_crmNumberFormat($_tmp)); ?>
</strong>
</div>
<?php if ($this->_tpl_vars['action'] == 256 & $this->_tpl_vars['ssid'] == null): ?>
  <div class="status float-right">
    <div id="popupContainer">
      <table id="selectedRecords" class="display crm-copy-fields">
        <thead>
          <tr class="columnheader">
            <th class="contact_details">Name</th>
          </tr>
        </thead>

        <tbody>
          <?php $_from = $this->_tpl_vars['value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['row']):
?>
          <tr class="<?php echo smarty_function_cycle(array('values' => "odd-row,even-row"), $this);?>
">
                 <td class="name"><?php echo $this->_tpl_vars['row']; ?>
</td>
              <?php endforeach; endif; unset($_from); ?>
          </tr>
        </tbody>
      </table>
    </div>
     <a href="#" id="button"title="Contacts selected in the Find Contacts page"> <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>View Selected Contacts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
  </div>
<?php echo '
<script type="text/javascript">

  CRM.$(function($) {
    $("#popupContainer").hide();
    $("#button").click(function() {
      $("#popupContainer").dialog({
        title: '; ?>
"<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Selected Contacts<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"<?php echo ',
        width:700,
        height:500,
        modal: true
      });
    });
    var count = 0; var columns=\'\'; var sortColumn = \'\';

    $(\'#selectedRecords th\').each( function( ) {
      if ( $(this).attr(\'class\') == \'contact_details\' ) {
        sortColumn += \'[\' + count + \', "asc" ],\';
        columns += \'{"sClass": "contact_details"},\';
      } else {
        columns += \'{ "bSortable": false },\';
      }
      count++;
    });

    columns    = columns.substring(0, columns.length - 1 );
    sortColumn = sortColumn.substring(0, sortColumn.length - 1 );
    eval(\'sortColumn =[\' + sortColumn + \']\');
    eval(\'columns =[\' + columns + \']\');

    //load jQuery data table.
    $(\'#selectedRecords\').dataTable( {
      "sPaginationType": "full_numbers",
      "bJQueryUI"  : true,
      "aaSorting"  : sortColumn,
      "aoColumns"  : columns,
      "bFilter"    : false
    });

  });

</script>
'; ?>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>