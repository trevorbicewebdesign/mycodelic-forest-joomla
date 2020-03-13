<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  User.profile
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_PLATFORM') or die;

JFormHelper::loadFieldClass('list');

/**
 * Provides input for "Date of Birth" field
 *
 * @package     Joomla.Plugin
 * @subpackage  User.profile
 * @since       3.3.7
 */
class JFormFieldState extends JFormFieldList
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  3.3.7
	 */
	protected $type = 'State';

	/**
	 * Method to get the field label markup.
	 *
	 * @return  string  The field label markup.
	 *
	 * @since   3.3.7
	 */
	protected function getLabel()
	{
		$label = parent::getLabel();

		// Get the info text from the XML element, defaulting to empty.
		$text  = $this->element['info'] ? (string) $this->element['info'] : '';
		$text  = $this->translateLabel ? JText::_($text) : $text;

		if ($text)
		{
			$app    = JFactory::getApplication();
			$layout = new JLayoutFile('plugins.user.profile.fields.dob');
			$view   = $app->input->getString('view', '');

			// Only display the tip when editing profile
			if ($view === 'registration' || $view === 'profile' || $app->isClient('administrator'))
			{
				$layout = new JLayoutFile('plugins.user.profile.fields.dob');
				$info   = $layout->render(array('text' => $text));
				$label  = $info . $label;
			}
		}

		return $label;
	}
    public function getOptions() {
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
        $stateList = array_map(function($state){
            return ["value"=>"$state->id", "text"=>"$state->name"];
        }, $statesResult );
               
		return array_merge(parent::getOptions(), $stateList);
	}
}
