<?php /* Smarty version 2.6.31, created on 2019-08-14 11:07:55
         compiled from CRM/Contact/Form/Edit/Address/supplemental_address_3.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Form/Edit/Address/supplemental_address_3.tpl', 1, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if (! empty ( $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['supplemental_address_3'] )): ?>
   <tr>
      <td colspan="2">
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['supplemental_address_3']['label']; ?>
<br />
          <?php echo $this->_tpl_vars['form']['address'][$this->_tpl_vars['blockId']]['supplemental_address_3']['html']; ?>

      </td>
   </tr>
<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>