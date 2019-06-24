<?php /* Smarty version 2.6.31, created on 2019-06-22 12:31:00
         compiled from CRM/Contact/Page/View/Summary.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Contact/Page/View/Summary.tpl', 1, false),array('block', 'crmButton', 'CRM/Contact/Page/View/Summary.tpl', 58, false),array('block', 'ts', 'CRM/Contact/Page/View/Summary.tpl', 59, false),array('block', 'crmRegion', 'CRM/Contact/Page/View/Summary.tpl', 146, false),array('modifier', 'cat', 'CRM/Contact/Page/View/Summary.tpl', 42, false),array('modifier', 'escape', 'CRM/Contact/Page/View/Summary.tpl', 128, false),array('function', 'help', 'CRM/Contact/Page/View/Summary.tpl', 92, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php if ($this->_tpl_vars['action'] == 2): ?>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Form/Contact.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>

  <div class="crm-summary-contactname-block crm-inline-edit-container">
    <div class="crm-summary-block" id="contactname-block">
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/ContactName.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
  </div>

  <?php if (! $this->_tpl_vars['summaryPrint']): ?>
    <div class="crm-actions-ribbon">
      <ul id="actions">
        <?php $this->assign('urlParams', "reset=1"); ?>
        <?php if ($this->_tpl_vars['searchKey']): ?>
          <?php $this->assign('urlParams', ((is_array($_tmp=$this->_tpl_vars['urlParams'])) ? $this->_run_mod_handler('cat', true, $_tmp, "&key=".($this->_tpl_vars['searchKey'])) : smarty_modifier_cat($_tmp, "&key=".($this->_tpl_vars['searchKey'])))); ?>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['context']): ?>
          <?php $this->assign('urlParams', ((is_array($_tmp=$this->_tpl_vars['urlParams'])) ? $this->_run_mod_handler('cat', true, $_tmp, "&context=".($this->_tpl_vars['context'])) : smarty_modifier_cat($_tmp, "&context=".($this->_tpl_vars['context'])))); ?>
        <?php endif; ?>

                <?php if (! $this->_tpl_vars['isDeleted']): ?>
          <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'access CiviCRM' )): ?>
            <li class="crm-contact-activity crm-summary-block">
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Actions.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </li>
          <?php endif; ?>
                    <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
            <li>
              <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/contact/add','q' => ($this->_tpl_vars['urlParams'])."&action=update&cid=".($this->_tpl_vars['contactId']),'class' => 'edit')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Edit<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </li>
          <?php endif; ?>
        <?php endif; ?>

                <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'access deleted contacts' ) && $this->_tpl_vars['is_deleted']): ?>
          <li class="crm-contact-restore">
            <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/contact/view/delete','q' => "reset=1&cid=".($this->_tpl_vars['contactId'])."&restore=1",'class' => 'delete','icon' => 'undo')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Restore from Trash<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </li>

          <?php if (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete contacts' )): ?>
            <li class="crm-contact-permanently-delete">
              <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/contact/view/delete','q' => "reset=1&delete=1&cid=".($this->_tpl_vars['contactId'])."&skip_undelete=1",'class' => 'delete','icon' => 'trash')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Permanently<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </li>
          <?php endif; ?>

        <?php elseif (call_user_func ( array ( 'CRM_Core_Permission' , 'check' ) , 'delete contacts' )): ?>
          <li class="crm-delete-action crm-contact-delete">
            <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/contact/view/delete','q' => "reset=1&delete=1&cid=".($this->_tpl_vars['contactId']),'class' => 'delete','icon' => 'trash')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Delete Contact<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </li>
        <?php endif; ?>

                <?php if ($this->_tpl_vars['nextPrevError']): ?>
          <li class="crm-next-action">
            <?php echo smarty_function_help(array('id' => "id-next-prev-buttons"), $this);?>
&nbsp;
          </li>
        <?php else: ?>
          <?php if ($this->_tpl_vars['nextContactID']): ?>
            <li class="crm-next-action">
              <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/contact/view','q' => ($this->_tpl_vars['urlParams'])."&cid=".($this->_tpl_vars['nextContactID']),'class' => 'view','title' => $this->_tpl_vars['nextContactName'],'icon' => "chevron-right")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Next<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </li>
          <?php endif; ?>
          <?php if ($this->_tpl_vars['prevContactID']): ?>
            <li class="crm-previous-action">
              <?php $this->_tag_stack[] = array('crmButton', array('p' => 'civicrm/contact/view','q' => ($this->_tpl_vars['urlParams'])."&cid=".($this->_tpl_vars['prevContactID']),'class' => 'view','title' => $this->_tpl_vars['prevContactName'],'icon' => "chevron-left")); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Previous<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </li>
          <?php endif; ?>
        <?php endif; ?>

        <?php if (! empty ( $this->_tpl_vars['groupOrganizationUrl'] )): ?>
          <li class="crm-contact-associated-groups">
            <?php $this->_tag_stack[] = array('crmButton', array('href' => $this->_tpl_vars['groupOrganizationUrl'],'class' => "associated-groups",'icon' => 'cubes')); $_block_repeat=true;smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Associated Multi-Org Group<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmButton($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
          </li>
        <?php endif; ?>
      </ul>
      <div class="clear"></div>
    </div><!-- .crm-actions-ribbon -->
  <?php endif; ?>

  <div class="crm-block crm-content-block crm-contact-page crm-inline-edit-container">
    <div id="mainTabContainer">
      <ul class="crm-contact-tabs-list">
        <?php $_from = $this->_tpl_vars['allTabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tabName'] => $this->_tpl_vars['tabValue']):
?>
          <li id="tab_<?php echo $this->_tpl_vars['tabValue']['id']; ?>
" class="crm-tab-button ui-corner-all crm-count-<?php echo $this->_tpl_vars['tabValue']['count']; ?>
<?php if (isset ( $this->_tpl_vars['tabValue']['class'] )): ?> <?php echo $this->_tpl_vars['tabValue']['class']; ?>
<?php endif; ?>">
            <a href="<?php echo $this->_tpl_vars['tabValue']['url']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['tabValue']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
              <i class="<?php if ($this->_tpl_vars['tabValue']['icon']): ?><?php echo $this->_tpl_vars['tabValue']['icon']; ?>
<?php else: ?>crm-i fa-puzzle-piece<?php endif; ?>"></i>
              <span><?php echo $this->_tpl_vars['tabValue']['title']; ?>
</span>
              <?php if (empty ( $this->_tpl_vars['tabValue']['hideCount'] )): ?><em><?php echo $this->_tpl_vars['tabValue']['count']; ?>
</em><?php endif; ?>
            </a>
          </li>
        <?php endforeach; endif; unset($_from); ?>
      </ul>

      <div id="contact-summary" class="ui-tabs-panel ui-widget-content ui-corner-bottom">
        <?php if (( isset ( $this->_tpl_vars['hookContentPlacement'] ) && ( $this->_tpl_vars['hookContentPlacement'] != 3 ) ) || empty ( $this->_tpl_vars['hookContentPlacement'] )): ?>

          <?php if (! empty ( $this->_tpl_vars['hookContent'] ) && isset ( $this->_tpl_vars['hookContentPlacement'] ) && $this->_tpl_vars['hookContentPlacement'] == 2): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endif; ?>

          <div class="contactTopBar contact_panel">
            <div class="contactCardLeft">
              <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-basic-info-left")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <div class="crm-summary-contactinfo-block">
                  <div class="crm-summary-block" id="contactinfo-block">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/ContactInfo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </div>
                </div>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div> <!-- end of left side -->
            <div class="contactCardRight">
              <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-basic-info-right")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <?php if (! empty ( $this->_tpl_vars['imageURL'] )): ?>
                <div id="crm-contact-thumbnail">
                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/ContactImage.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
              <?php endif; ?>
                <div class="<?php if (! empty ( $this->_tpl_vars['imageURL'] )): ?> float-left<?php endif; ?>">
                  <div class="crm-summary-basic-block crm-summary-block">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Basic.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </div>
                </div>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div>
            <!-- end of right side -->
        </div>
        <div class="contact_details">
          <div class="contact_panel">
            <div class="contactCardLeft">
              <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-details-left")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <div >
                  <?php if ($this->_tpl_vars['showEmail']): ?>
                    <div class="crm-summary-email-block crm-summary-block" id="email-block">
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Email.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['showWebsite']): ?>
                    <div class="crm-summary-website-block crm-summary-block" id="website-block">
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Website.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div><!-- #contactCardLeft -->

            <div class="contactCardRight">
              <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-details-right")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                <div>
                  <?php if ($this->_tpl_vars['showPhone']): ?>
                    <div class="crm-summary-phone-block crm-summary-block" id="phone-block">
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Phone.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['showIM']): ?>
                    <div class="crm-summary-im-block crm-summary-block" id="im-block">
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/IM.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                  <?php endif; ?>
                  <?php if ($this->_tpl_vars['showOpenID']): ?>
                    <div class="crm-summary-openid-block crm-summary-block" id="openid-block">
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/OpenID.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
            </div><!-- #contactCardRight -->

            <div class="clear"></div>
          </div><!-- #contact_panel -->
          <?php if ($this->_tpl_vars['showAddress']): ?>
            <div class="contact_panel">
              <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-addresses")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
              <?php $this->assign('locationIndex', 1); ?>
              <?php if ($this->_tpl_vars['address']): ?>
                <?php $_from = $this->_tpl_vars['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locationIndex'] => $this->_tpl_vars['add']):
?>
                  <div class="<?php if ((1 & $this->_tpl_vars['locationIndex'])): ?>contactCardLeft<?php else: ?>contactCardRight<?php endif; ?> crm-address_<?php echo $this->_tpl_vars['locationIndex']; ?>
 crm-address-block crm-summary-block">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </div>
                <?php endforeach; endif; unset($_from); ?>
                <?php $this->assign('locationIndex', $this->_tpl_vars['locationIndex']+1); ?>
              <?php endif; ?>
                            <?php if ($this->_tpl_vars['permission'] == 'edit'): ?>
                <?php $this->assign('add', 0); ?>
                <div class="<?php if ((1 & $this->_tpl_vars['locationIndex'])): ?>contactCardLeft<?php else: ?>contactCardRight<?php endif; ?> crm-address-block crm-summary-block">
                  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Address.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
              <?php endif; ?>
              <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
              </div> <!-- end of contact panel -->
            <?php endif; ?>
            <div class="contact_panel">
              <?php if ($this->_tpl_vars['showCommunicationPreferences']): ?>
                <div class="contactCardLeft">
                  <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-comm-pref")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                  <div class="crm-summary-comm-pref-block">
                    <div class="crm-summary-block" id="communication-pref-block" >
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/CommunicationPreferences.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                  </div>
                  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </div> <!-- contactCardLeft -->
              <?php endif; ?>
              <?php if ($this->_tpl_vars['contact_type'] == 'Individual' && $this->_tpl_vars['showDemographics']): ?>
                <div class="contactCardRight">
                  <?php $this->_tag_stack[] = array('crmRegion', array('name' => "contact-demographic")); $_block_repeat=true;smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                  <div class="crm-summary-demographic-block">
                    <div class="crm-summary-block" id="demographic-block">
                      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/Inline/Demographics.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </div>
                  </div>
                  <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmRegion($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
                </div> <!-- contactCardRight -->
              <?php endif; ?>
              <div class="clear"></div>
                <div class="separator"></div>
              </div> <!-- contact panel -->
            </div><!--contact_details-->

            <?php if ($this->_tpl_vars['showCustomData']): ?>
              <div id="customFields">
                <div class="contact_panel">
                  <div class="contactCardLeft">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataView.tpl", 'smarty_include_vars' => array('side' => '1')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </div><!--contactCardLeft-->
                  <div class="contactCardRight">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/CustomDataView.tpl", 'smarty_include_vars' => array('side' => '0')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                  </div>

                  <div class="clear"></div>
                </div>
              </div>
            <?php endif; ?>

            <?php if (! empty ( $this->_tpl_vars['hookContent'] ) && isset ( $this->_tpl_vars['hookContentPlacement'] ) && $this->_tpl_vars['hookContentPlacement'] == 1): ?>
              <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
          <?php else: ?>
             <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Contact/Page/View/SummaryHook.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endif; ?>
        </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div><!-- /.crm-content-block -->
<?php endif; ?>

<?php echo '
<script type="text/javascript">
CRM.$(function($) {
  $(\'.crm-inline-edit-container\').crmFormContactLock({
    ignoreLabel: "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Ignore<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '",
    saveAnywayLabel: "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Save Anyway<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '",
    reloadLabel: "'; ?>
<?php $this->_tag_stack[] = array('ts', array('escape' => 'js')); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Reload Page<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?><?php echo '"
  });
});
</script>
'; ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>