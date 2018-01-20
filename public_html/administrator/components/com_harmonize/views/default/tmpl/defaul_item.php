<?php
defined('_JEXEC') or die('Restricted access');

$row 		= $this->row;
$checked 	= JHTML::_('grid.id',   $i, $row->id );

$link 		= JRoute::_( 'index.php?option=com_socialchow&controller=quizzes&task=edit&cid[]='. $row->id );

?>
<tr class="<?php echo "row$k"; ?> <?php echo $class; ?>" >
    <td align="center">
        <?php echo $checked; ?>
    </td>
     <td align="center">
        <a href="<?php echo $link; ?>"><?php echo $row->title; ?></a>
    </td>   
    <td align="center">
        <a href="<?php echo $link; ?>"><?php echo $row->published; ?></a>
    </td>    
</tr>