<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

?>

<?php $fields = $this->form->getFieldset('params'); ?>
<?php if (count($fields)) : ?>
	<fieldset id="users-profile-custom">
		<legend><?php echo JText::_('COM_USERS_SETTINGS_FIELDSET_LABEL'); ?></legend>
		<ul class="dl-horizontal">
            <?php foreach ($fields as $field) : ?>
                <?php if (!$field->hidden && $field->type !== 'Spacer') : ?>
                    <li>
                        <label><?php echo $field->title; ?>:</label>
                        <div>
                            <?php if (JHtml::isRegistered('users.' . $field->id)) : ?>
                                <?php echo JHtml::_('users.' . $field->id, $field->value); ?>
                            <?php elseif (JHtml::isRegistered('users.' . $field->fieldname)) : ?>
                                <?php echo JHtml::_('users.' . $field->fieldname, $field->value); ?>
                            <?php elseif (JHtml::isRegistered('users.' . $field->type)) : ?>
                                <?php echo JHtml::_('users.' . $field->type, $field->value); ?>
                            <?php else : ?>
                                <?php echo JHtml::_('users.value', $field->value); ?>
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
		</ul>
	</fieldset>
<?php endif; ?>
