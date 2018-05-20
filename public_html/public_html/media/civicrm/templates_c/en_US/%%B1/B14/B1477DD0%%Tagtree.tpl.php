<?php /* Smarty version 2.6.30, created on 2018-03-03 18:19:18
         compiled from CRM/Tag/Form/Tagtree.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Tag/Form/Tagtree.tpl', 1, false),array('modifier', 'colorContrast', 'CRM/Tag/Form/Tagtree.tpl', 31, false),array('modifier', 'escape', 'CRM/Tag/Form/Tagtree.tpl', 31, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><ul class="tree-level-<?php echo $this->_tpl_vars['level']; ?>
">
  <?php $_from = $this->_tpl_vars['tree']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['node']):
?>
    <li>
      <a id="tag_<?php echo $this->_tpl_vars['id']; ?>
" class="<?php if (! $this->_tpl_vars['node']['is_selectable'] || $this->_tpl_vars['permission'] != 'edit'): ?>jstree-disabled<?php endif; ?> <?php if ($this->_tpl_vars['tagged'][$this->_tpl_vars['id']]): ?>jstree-clicked<?php endif; ?>">
        <span class="crm-tag-item" <?php if (! empty ( $this->_tpl_vars['allTags'][$this->_tpl_vars['id']]['color'] )): ?>style="background-color: <?php echo $this->_tpl_vars['allTags'][$this->_tpl_vars['id']]['color']; ?>
; color: <?php echo ((is_array($_tmp=$this->_tpl_vars['allTags'][$this->_tpl_vars['id']]['color'])) ? $this->_run_mod_handler('colorContrast', true, $_tmp) : smarty_modifier_colorContrast($_tmp)); ?>
;"<?php endif; ?> title="<?php echo ((is_array($_tmp=$this->_tpl_vars['node']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
          <?php echo $this->_tpl_vars['node']['name']; ?>

        </span>
      </a>
      <?php if ($this->_tpl_vars['node']['children']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Tag/Form/Tagtree.tpl", 'smarty_include_vars' => array('tree' => $this->_tpl_vars['node']['children'],'level' => $this->_tpl_vars['level']+1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <?php endif; ?>
    </li>
  <?php endforeach; endif; unset($_from); ?>
</ul>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>