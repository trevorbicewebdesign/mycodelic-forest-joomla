<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<fieldset id="users-profile-core">
	<legend>
		<?php echo JText::_('COM_USERS_PROFILE_CORE_LEGEND'); ?>
	</legend>
	<ul class="dl-horizontal">
		<li>
            <label><?php echo JText::_('COM_USERS_PROFILE_NAME_LABEL'); ?>:</label>
			<div>
		        <?php echo $this->escape($this->data->name); ?>
            </div>
        </li>
        <li>
            <label><?php echo JText::_('COM_USERS_PROFILE_USERNAME_LABEL'); ?>:</label>
			<div>
		        <?php echo $this->escape($this->data->username); ?>
            </div>
        </li>
		<li>
            <label><?php echo JText::_('COM_USERS_PROFILE_REGISTERED_DATE_LABEL'); ?>:</label>
			<div>
		        <?php echo JHtml::_('date', $this->data->registerDate, JText::_('DATE_FORMAT_LC1')); ?>
            </div>
        </li>
        <li>
            <label><?php echo JText::_('COM_USERS_PROFILE_LAST_VISITED_DATE_LABEL'); ?>:</label>
            <div>
            <?php if ($this->data->lastvisitDate != $this->db->getNullDate()) : ?>
		        <?php echo JHtml::_('date', $this->data->lastvisitDate, JText::_('DATE_FORMAT_LC1')); ?>
            <?php else : ?>
                <?php echo JText::_('COM_USERS_PROFILE_NEVER_VISITED'); ?>
            <?php endif; ?>
            </div>
        </li>
       
	</ul>
</fieldset>
