<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');
$api = new civicrm_api3(array(
  // Specify location of "civicrm.settings.php".
  'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
));  

$apiParams = array(
  'rowCount'=>0
);

if ($api->StateProvince->Get($apiParams)) {
    //each key of the result array is an attribute of the api
    $statesResult = $api->lastResult->values;
}
foreach($statesResult as $index=>$val){
    $statesList[$val->id] = $val->name;
}


if ($api->Country->Get($apiParams)) {
    //each key of the result array is an attribute of the api
    $countryResult = $api->lastResult->values;
}
foreach($countryResult as $index=>$val){
    $countryList[$val->id] = $val->name;
}





JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::register('users.spacer', array('JHtmlUsers', 'spacer'));

$fieldsets = $this->form->getFieldsets();

if (isset($fieldsets['core']))
{
	unset($fieldsets['core']);
}

if (isset($fieldsets['params']))
{
	unset($fieldsets['params']);
}

$tmp          = isset($this->data->jcfields) ? $this->data->jcfields : array();
$customFields = array();

foreach ($tmp as $customField)
{
	$customFields[$customField->name] = $customField;
}

?>
<?php foreach ($fieldsets as $group => $fieldset) : ?>
	<?php $fields = $this->form->getFieldset($group); ?>
	<?php if (count($fields)) : ?>
		<fieldset id="users-profile-custom-<?php echo $group; ?>" class="users-profile-custom-<?php echo $group; ?>">
			<?php if (isset($fieldset->label) && ($legend = trim(JText::_($fieldset->label))) !== '') : ?>
				<legend><?php echo $legend; ?></legend>
			<?php endif; ?>
			<?php if (isset($fieldset->description) && trim($fieldset->description)) : ?>
				<p><?php echo $this->escape(JText::_($fieldset->description)); ?></p>
			<?php endif; ?>
			<ul class="dl-horizontal">
				<?php foreach ($fields as $field) : ?>
					<?php if (!$field->hidden && $field->type !== 'Spacer') : ?>
						<li>
                            <label><?php echo $field->title; ?>:</label>
						    <div>
							<?php if (key_exists($field->fieldname, $customFields)) : ?>
								<?php echo strlen($customFields[$field->fieldname]->value) ? $customFields[$field->fieldname]->value : JText::_('COM_USERS_PROFILE_VALUE_NOT_FOUND'); ?>
							<?php elseif (JHtml::isRegistered('users.' . $field->id)) : ?>
								<?php echo JHtml::_('users.' . $field->id, $field->value); ?>
							<?php elseif (JHtml::isRegistered('users.' . $field->fieldname)) : ?>
								<?php echo JHtml::_('users.' . $field->fieldname, $field->value); ?>
							<?php elseif (JHtml::isRegistered('users.' . $field->type)) : ?>
								<?php echo JHtml::_('users.' . $field->type, $field->value); ?>
							<?php else : 
                                switch($field->type){
                                    case "Country":
                                        echo $countryList[$field->value];
                                        break;
                                    case "State":
                                        echo $statesList[$field->value];
                                        break;
                                    case "Burningmanyears":
                                    case "skillArt":
                                    case "skillPerformance":
                                    case "skillEventManagement":
                                    case "skillMedia":
                                    case "skillTrades":
                                    case "skillProfessional": 
                                    case "skillOffice": 
                                    case "skillComputer":
                                    case "skillTech":
                                        if(count($field->value)<=1){
                                            echo "No information Entered";
                                        }
                                        else {
                                            echo implode(",",$field->value);
                                        }
                                        
                                        break;
                                    default:
                                        echo JHtml::_('users.value', $field->value); 
                                        break;
                                }
                            

                            ?>
                            </div>
							<?php endif; ?>
                         </li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</fieldset>
	<?php endif; ?>
<?php endforeach; ?>
