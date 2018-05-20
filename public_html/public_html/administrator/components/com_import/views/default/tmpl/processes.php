<?php
defined('_JEXEC') or die('Restricted access');

$editor 	= JFactory::getEditor();
?>
<script>
jQuery(document).ready(function($) {
	$('.adminlist tr.steps a').each(function(index, el){
		$(el).click(function() {
			$(this).parents('tr').data('id');
			return false;
		});
	});
});
Joomla.submitbutton = function(task) {
	if (task == 'com_import.cancel' || document.formvalidator.isValid(document.id('import-form'))){
		Joomla.submitform(task, document.getElementById('import-form'));
	}
}
</script>
<?php 
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
?>
<?php jimport( 'joomla.html.editor' ); 	?>
<div id="quiz">
<form action="index.php" method="post" id="import-form" name="adminForm" >

<table width="100%">
<tr>
<td>
<input id="title" value="<?php echo $this->quiz->title; ?>"/></td></tr>
<tr><td><textarea style="width:100%;height:100px;"></textarea></td>
<tr>
</table>

<table width="100%">
<tr>
<td>
<h2>Results</h2></td></tr>
        <tr><td>
        <table class="adminlist" width="100%" border="0" >
        <thead>
            <tr>
                <th width="1%" align="center">
                    <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
                </th>
                <th nowrap="nowrap" align="center" >
                    <?php echo JHTML::_('grid.sort', 	'Quiz Title', 	'q.title', 		@$this->lists['order_Dir'], @$this->lists['order'] ); ?>
                </th>
                <th width="10%" align="center">
                    <?php echo JHTML::_('grid.sort',  	'Published', 	'q.published', 	@$this->lists['order_Dir'], @$this->lists['order'] ); ?>
                </th>
            </tr>
        </thead>
        <?php
        $params = array('size'=>array('x'=>100, 'y'=>100));
        JHTML::_('behavior.modal', 'a.modal', $params);
        $k = 0;
		//print_r($this->steps);
        for ($i=0, $n=count( $this->steps ); $i < $n; $i++) {
                $this->result = &$this->steps[$i];
            
            ?>
            <?php echo $this->loadTemplate('item'); ?>
            
            <?php
            $k = 1 - $k;
        }
        ?>
        <tfoot>
            <tr>
                <td colspan="3">
                    <?php echo $this->pagination->getListFooter(); ?>
                </td>
            </tr>
        </tfoot>
        </table>
</td>
<tr>
</table>
<input type="hidden" name="option" 						value="com_import" />
<input type="hidden" name="controller" 						value="default" />
<input type="hidden" name="task" 							value="" />
<input type="hidden" name="boxchecked" 						value="0" />
<input type="hidden" name="id" 							value="<?php $cid = JRequest::getVar('cid');if(is_array($cid)) $cid = intval($cid[0]);echo $cid; ?>" 	id="id" />
<input type="hidden" name="filter_order" 					value="<?php echo $this->lists['order']; ?>" />
<input type="hidden" name="filter_order_Dir" 				value="<?php echo $this->lists['order_Dir']; ?>" />
<?php echo JHTML::_( 'form.token' ); ?>
</form>
</div>