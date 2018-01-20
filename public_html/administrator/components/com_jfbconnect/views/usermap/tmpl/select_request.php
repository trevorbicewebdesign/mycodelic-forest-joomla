<?php
/**
 * @package         JFBConnect
 * @copyright (c)   2009-2015 by SourceCoast - All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version         Release v7.1.2
 * @build-date      2016/12/24
 */

if (!(defined('_JEXEC') || defined('ABSPATH'))) {     die('Restricted access'); };

?>

<form action="index.php" method="post" id="adminForm" name="adminForm">
    <div id="editcell">
        <h2><?php echo JText::_('COM_JFBCONNECT_USERMAP_SELECT_REQUEST');?></h2>
        <?php echo $this->requestList; ?>
        <p><?php echo JText::sprintf("COM_JFBCONNECT_USERMAP_SELECT_REQUEST_PREVIEW", count($this->fbIds));?></p>
    </div>
    <br/><br/>

    <input type="hidden" name="option" value="com_jfbconnect"/>
    <input type="hidden" name="task" value="previewSend"/>
    <input type="hidden" name="controller" value="request"/>
    <?php foreach ($this->fbIds as $id)
        echo '<input type="hidden" name="fbIds[]" value="'.$id.'" />';
    ?>
</form>
