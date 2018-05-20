<?php /* Smarty version 2.6.30, created on 2018-03-03 18:19:18
         compiled from CRM/Tag/Form/Tag.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'crmScope', 'CRM/Tag/Form/Tag.tpl', 1, false),array('block', 'ts', 'CRM/Tag/Form/Tag.tpl', 98, false),array('function', 'crmStyle', 'CRM/Tag/Form/Tag.tpl', 27, false),)), $this); ?>
<?php $this->_tag_stack[] = array('crmScope', array('extensionKey' => "")); $_block_repeat=true;smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo smarty_function_crmStyle(array('file' => 'bower_components/jstree/dist/themes/default/style.min.css'), $this);?>

<?php echo '
<script type="text/javascript">
  (function($, _){'; ?>

    var entityID=<?php echo $this->_tpl_vars['entityID']; ?>
,
      entityTable='<?php echo $this->_tpl_vars['entityTable']; ?>
',
      $form = $('form.<?php echo $this->_tpl_vars['form']['formClass']; ?>
');
    <?php echo '

    $(function() {

      // Display tags on the contact summary
      function updateContactSummaryTags() {
        var tags = [],
          selected = $("#tagtree").jstree(true).get_selected(true);
        $.each(selected, function(k, item) {
          var $tag = $(item.text);
          tags.push(\'<span class="crm-tag-item" style="\' + $tag.attr(\'style\') + \'" title="\' + ($.parseHTML($tag.attr(\'title\')) || \'\') + \'">\' + $tag.text() + \'</span>\');
        });
        $(\'input.crm-contact-tagset\').each(function() {
          $.each($(this).select2(\'data\'), function (i, tag) {
            tags.push(\'<span class="crm-tag-item" title="\' + ($.parseHTML(tag.description.text) || \'\') + \'"\' + (tag.color ? \'style="color: \' + CRM.utils.colorContrast(tag.color) + \'; background-color: \' + tag.color + \';"\' : \'\') + \'>\' + tag.label + \'</span>\');
          });
        });
        // contact summary tabs and search forms both listen for this event
        $($form).closest(\'.crm-ajax-container\').trigger(\'crmFormSuccess\', {tabCount: tags.length});
        // update summary tab
        $("#contact-summary #tags").html(tags.join(\' \'));
      }

      // Load js tree.
      CRM.loadScript(CRM.config.resourceBase + \'bower_components/jstree/dist/jstree.min.js\').done(function() {
        $("#tagtree").jstree({
          plugins : [\'search\', \'wholerow\', \'checkbox\'],
          core: {
            animation: 100,
            themes: {
              "theme": \'classic\',
              "dots": false,
              "icons": false
            }
          },
          \'search\': {
            \'case_insensitive\' : true,
            \'show_only_matches\': true
          },
          checkbox: {
            three_state: false
          }
        })
          .on(\'select_node.jstree deselect_node.jstree\', function(e, selected) {
            var id = selected.node.a_attr.id.replace(\'tag_\', \'\'),
              op = e.type === \'select_node\' ? \'create\' : \'delete\';
            CRM.api3(\'entity_tag\', op, {entity_table: entityTable, entity_id: entityID, tag_id: id}, true);
            updateContactSummaryTags();
          });
      });

      $(document).on(\'change\', \'input.crm-contact-tagset\', updateContactSummaryTags);

      $(\'input[name=filter_tag_tree]\', \'#Tag\').on(\'keyup change\', function() {
        $("#tagtree").jstree(true).search($(this).val());
      });
    });
  })(CRM.$, CRM._);
  '; ?>

</script>
<div id="Tag" class="view-content">
  <table class="">
    <thead>
      <tr>
        <th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tag Tree<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th>
        <?php if ($this->_tpl_vars['tagsetInfo']['contact']): ?><th><?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Tag Sets<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></th><?php endif; ?>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <input class="crm-form-text big" name="filter_tag_tree" placeholder="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Filter List<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>" allowclear="1"/>
          <a class="crm-hover-button crm-clear-link" style="visibility:hidden;" title="<?php $this->_tag_stack[] = array('ts', array()); $_block_repeat=true;smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>Clear<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_ts($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>"><i class="crm-i fa-times"></i></a>
          <div id="tagtree">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/Tag/Form/Tagtree.tpl", 'smarty_include_vars' => array('level' => 1)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          </div>
        </td>
        <?php if ($this->_tpl_vars['tagsetInfo']['contact']): ?>
        <td>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "CRM/common/Tagset.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </td>
        <?php endif; ?>
      </tr>
    </tbody>
  </table>
</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_crmScope($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>