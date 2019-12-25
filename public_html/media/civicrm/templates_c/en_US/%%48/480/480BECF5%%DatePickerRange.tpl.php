<?php /* Smarty version 2.6.31, created on 2019-12-22 19:35:56
         compiled from CRM/Core/DatePickerRange.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Core/DatePickerRange.tpl', 1, false),array('modifier', 'cat', 'CRM/Core/DatePickerRange.tpl', 27, false),array('modifier', 'default', 'CRM/Core/DatePickerRange.tpl', 28, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php $this->assign('relativeName', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_relative') : smarty_modifier_cat($_tmp, '_relative'))); ?>
<?php $this->assign('from', ((is_array($_tmp=@$this->_tpl_vars['from'])) ? $this->_run_mod_handler('default', true, $_tmp, '_low') : smarty_modifier_default($_tmp, '_low'))); ?>
<?php $this->assign('to', ((is_array($_tmp=@$this->_tpl_vars['to'])) ? $this->_run_mod_handler('default', true, $_tmp, '_high') : smarty_modifier_default($_tmp, '_high'))); ?>

  <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['relativeName']]['label']; ?>
<br />
  <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['relativeName']]['html']; ?>
<br />
  <span class="crm-absolute-date-range">
    <span class="crm-absolute-date-from">
      <?php $this->assign('fromName', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['from']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['from']))); ?>
      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fromName']]['label']; ?>

      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['fromName']]['html']; ?>

    </span>
    <span class="crm-absolute-date-to">
      <?php $this->assign('toName', ((is_array($_tmp=$this->_tpl_vars['fieldName'])) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['to']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['to']))); ?>
      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['toName']]['label']; ?>

      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['toName']]['html']; ?>

    </span>
  </span>
  <?php echo '
    <script type="text/javascript">
      CRM.$(function($) {
        $("#'; ?>
<?php echo $this->_tpl_vars['relativeName']; ?>
<?php echo '").change(function() {
          var n = cj(this).parent().parent();
          if ($(this).val() == "0") {
            $(".crm-absolute-date-range", n).show();
          } else {
            $(".crm-absolute-date-range", n).hide();
            $(\':text\', n).val(\'\');
          }
        }).change();
      });
    </script>
  '; ?>


<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>