<?php /* Smarty version 2.6.30, created on 2018-12-14 08:55:46
         compiled from CRM/Mailing/Form/Search/Common.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Mailing/Form/Search/Common.tpl', 1, false),array('block', 'ts', 'CRM/Mailing/Form/Search/Common.tpl', 13, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><tr>
  <td>
  <?php echo $this->_tpl_vars['form']['mailing_id']['label']; ?>

    <br />
  <?php echo $this->_tpl_vars['form']['mailing_id']['html']; ?>

  </td>
<td>
  <?php echo $this->_tpl_vars['form']['mailing_job_status']['label']; ?>

    <br />
  <?php echo $this->_tpl_vars['form']['mailing_job_status']['html']; ?>

</td>
</tr>
<tr><td><label><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Mailing Date<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></label></td></tr>
<tr>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Core/DateRange.tpl", 'smarty_include_vars' => array('fieldName' => 'mailing_date','from' => '_low','to' => '_high')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</tr>
<tr>
  <td>
  <?php echo $this->_tpl_vars['form']['mailing_delivery_status']['label']; ?>

    <br />
  <?php echo $this->_tpl_vars['form']['mailing_delivery_status']['html']; ?>

  <br />
  <?php echo $this->_tpl_vars['form']['mailing_bounce_types']['label']; ?>

  <?php echo $this->_tpl_vars['form']['mailing_bounce_types']['html']; ?>

  </td>
  <td>
  <?php echo $this->_tpl_vars['form']['mailing_open_status']['label']; ?>

    <br />
  <?php echo $this->_tpl_vars['form']['mailing_open_status']['html']; ?>

  </td>
</tr>
<tr>
  <td>
  <?php echo $this->_tpl_vars['form']['mailing_click_status']['label']; ?>

    <br />
  <?php echo $this->_tpl_vars['form']['mailing_click_status']['html']; ?>

  </td>
  <td>
  <?php echo $this->_tpl_vars['form']['mailing_reply_status']['label']; ?>

    <br />
  <?php echo $this->_tpl_vars['form']['mailing_reply_status']['html']; ?>

  </td>
</tr>
<tr>
  <td>
    <table>
      <tr>
      <?php echo $this->_tpl_vars['form']['mailing_unsubscribe']['html']; ?>
&nbsp;
      <?php echo $this->_tpl_vars['form']['mailing_unsubscribe']['label']; ?>

      </tr>
    </table>
  </td>
  <td>
    <table>
      <tr>
        <td>
        <?php echo $this->_tpl_vars['form']['mailing_optout']['html']; ?>
&nbsp;
        <?php echo $this->_tpl_vars['form']['mailing_optout']['label']; ?>

        </td>
        <td>
        <?php echo $this->_tpl_vars['form']['mailing_forward']['html']; ?>
&nbsp;
        <?php echo $this->_tpl_vars['form']['mailing_forward']['label']; ?>

        </td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td>      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Campaign/Form/addCampaignToComponent.tpl", 'smarty_include_vars' => array('campaignContext' => 'componentSearch','campaignTrClass' => 'crmCampaign','campaignTdClass' => 'crmCampaignContainer')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </td>
</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>