<?php /* Smarty version 2.6.30, created on 2018-03-02 18:32:26
         compiled from CRM/Group/Form/Edit.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Group/Form/Edit.tpl', 1, false),array('block', 'ts', 'CRM/Group/Form/Edit.tpl', 31, false),array('function', 'crmURL', 'CRM/Group/Form/Edit.tpl', 30, false),array('function', 'help', 'CRM/Group/Form/Edit.tpl', 69, false),array('modifier', 'crmAddClass', 'CRM/Group/Form/Edit.tpl', 40, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><div class="crm-block crm-form-block crm-group-form-block">
    <div class="help">
  <?php if ($this->_tpl_vars['action'] == 2): ?>
      <?php ob_start(); ?>class="no-popup" href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/group/search",'q' => "reset=1&force=1&context=smog&gid=".($this->_tpl_vars['group']['id'])), $this);?>
"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('crmURL', ob_get_contents());ob_end_clean(); ?>
      <?php $this->_tag_stack[] = array('ts', array('1' => $this->_tpl_vars['crmURL'])); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>You can edit the Name and Description for this group here. Click <a %1>Contacts in this Group</a> to view, add or remove contacts in this group.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php else: ?>
      <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Enter a unique name and a description for your new group here. Then click 'Continue' to find contacts to add to your new group.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
  <?php endif; ?>
    </div>
    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'top')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <table class="form-layout">
        <tr class="crm-group-form-block-title">
      <td class="label"><?php echo $this->_tpl_vars['form']['title']['label']; ?>
 <?php if ($this->_tpl_vars['action'] == 2): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'CRM/Core/I18n/Dialog.tpl', 'smarty_include_vars' => array('table' => 'civicrm_group','field' => 'title','id' => $this->_tpl_vars['group']['id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?></td>
            <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['title']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>

                <?php if ($this->_tpl_vars['group']['saved_search_id']): ?>&nbsp;(<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Smart Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>)<?php endif; ?>
            </td>
        </tr>

        <?php if ($this->_tpl_vars['group']['created_by']): ?>
        <tr class="crm-group-form-block-created">
           <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Created By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
           <td><?php echo $this->_tpl_vars['group']['created_by']; ?>
</td>
        </tr>
        <?php endif; ?>

        <?php if ($this->_tpl_vars['group']['modified_by']): ?>
        <tr class="crm-group-form-block-modified">
           <td class="label"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Modified By<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
           <td><?php echo $this->_tpl_vars['group']['modified_by']; ?>
</td>
        </tr>
        <?php endif; ?>

        <tr class="crm-group-form-block-description">
      <td class="label"><?php echo $this->_tpl_vars['form']['description']['label']; ?>
</td>
      <td><?php echo $this->_tpl_vars['form']['description']['html']; ?>
<br />
    <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Group description is displayed when groups are listed in Profiles and Mailing List Subscribe forms.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
            </td>
        </tr>

  <?php if ($this->_tpl_vars['form']['group_type']): ?>
      <tr class="crm-group-form-block-group_type">
    <td class="label"><?php echo $this->_tpl_vars['form']['group_type']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['group_type']['html']; ?>
 <?php echo smarty_function_help(array('id' => "id-group-type",'file' => "CRM/Group/Page/Group.hlp"), $this);?>
</td>
      </tr>
  <?php endif; ?>

        <tr class="crm-group-form-block-visibility">
      <td class="label"><?php echo $this->_tpl_vars['form']['visibility']['label']; ?>
</td>
      <td><?php echo ((is_array($_tmp=$this->_tpl_vars['form']['visibility']['html'])) ? $this->_run_mod_handler('crmAddClass', true, $_tmp, 'huge') : smarty_modifier_crmAddClass($_tmp, 'huge')); ?>
 <?php echo smarty_function_help(array('id' => "id-group-visibility",'file' => "CRM/Group/Page/Group.hlp"), $this);?>
</td>
  </tr>

  <tr class="crm-group-form-block-isReserved">
    <td class="report-label"><?php echo $this->_tpl_vars['form']['is_reserved']['label']; ?>
</td>
    <td><?php echo $this->_tpl_vars['form']['is_reserved']['html']; ?>

      <span class="description"><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>If reserved, only users with 'administer reserved groups' permission can disable, delete, or change settings for this group. The reserved flag does NOT affect users ability to add or remove contacts from a group.<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></span>
    </td>
  </tr>

  <tr>
      <td colspan=2><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Custom/Form/CustomData.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
  </tr>
    </table>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Group/Form/GroupsCommon.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="crm-submit-buttons"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/formButtons.tpl", 'smarty_include_vars' => array('location' => 'bottom')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
    <?php if ($this->_tpl_vars['action'] != 1): ?>
  <div class="action-link">
      <a <?php echo $this->_tpl_vars['crmURL']; ?>
>&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Contacts in this Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
      <?php if ($this->_tpl_vars['group']['saved_search_id']): ?>
          <br />
    <?php if ($this->_tpl_vars['group']['mapping_id']): ?>
        <a class="no-popup" href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/builder",'q' => "reset=1&force=1&ssID=".($this->_tpl_vars['group']['saved_search_id'])), $this);?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Smart Group Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    <?php elseif ($this->_tpl_vars['group']['search_custom_id']): ?>
                    <a class="no-popup" href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/custom",'q' => "reset=1&force=1&ssID=".($this->_tpl_vars['group']['saved_search_id'])), $this);?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Smart Group Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    <?php else: ?>
        <a class="no-popup" href="<?php echo CRM_Utils_System::crmURL(array('p' => "civicrm/contact/search/advanced",'q' => "reset=1&force=1&ssID=".($this->_tpl_vars['group']['saved_search_id'])), $this);?>
">&raquo; <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit Smart Group Criteria<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></a>
    <?php endif; ?>

      <?php endif; ?>
  </div>
    <?php endif; ?>

<?php echo '
<script type="text/javascript">
'; ?>
<?php if ($this->_tpl_vars['freezeMailignList']): ?><?php echo '
cj(\'input[type=checkbox][name="group_type['; ?>
<?php echo $this->_tpl_vars['freezeMailignList']; ?>
<?php echo ']"]\').prop(\'disabled\',true);
'; ?>
<?php endif; ?><?php echo '
'; ?>
<?php if ($this->_tpl_vars['hideMailignList']): ?><?php echo '
cj(\'input[type=checkbox][name="group_type['; ?>
<?php echo $this->_tpl_vars['hideMailignList']; ?>
<?php echo ']"]\').hide();
cj(\'label[for="group_type['; ?>
<?php echo $this->_tpl_vars['hideMailignList']; ?>
<?php echo ']"]\').hide();
'; ?>
<?php endif; ?><?php echo '
</script>
'; ?>

</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>