<?php /* Smarty version 2.6.31, created on 2019-08-14 10:40:33
         compiled from CRM/Campaign/Form/addCampaignToComponent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Campaign/Form/addCampaignToComponent.tpl', 1, false),array('function', 'help', 'CRM/Campaign/Form/addCampaignToComponent.tpl', 16, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php if ($this->_tpl_vars['campaignContext'] == 'componentSearch'): ?>

    <tr class="<?php echo $this->_tpl_vars['campaignTrClass']; ?>
">
    <?php $this->assign('elementName', $this->_tpl_vars['campaignInfo']['elementName']); ?>
    <td class="<?php echo $this->_tpl_vars['campaignTdClass']; ?>
">
      <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elementName']]['label']; ?>
 <?php echo $this->_tpl_vars['form'][$this->_tpl_vars['elementName']]['html']; ?>

    </td>
  </tr>

<?php elseif ($this->_tpl_vars['campaignInfo']['showAddCampaign']): ?>

  <tr class="<?php echo $this->_tpl_vars['campaignTrClass']; ?>
">
    <td class="label"><?php echo $this->_tpl_vars['form']['campaign_id']['label']; ?>
 <?php echo smarty_function_help(array('id' => "id-campaign_id",'file' => "CRM/Campaign/Form/addCampaignToComponent.hlp"), $this);?>
</td>
    <td class="view-value"><?php echo $this->_tpl_vars['form']['campaign_id']['html']; ?>
</td>
  </tr>

<?php endif; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>