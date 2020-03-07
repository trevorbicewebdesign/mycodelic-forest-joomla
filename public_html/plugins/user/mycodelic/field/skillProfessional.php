<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  User.profile
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_PLATFORM') or die;

JFormHelper::loadFieldClass('checkboxes');

/**
 * Provides input for "Date of Birth" field
 *
 * @package     Joomla.Plugin
 * @subpackage  User.profile
 * @since       3.3.7
 */
class JFormFieldSkillProfessional extends JFormFieldCheckboxes
{
	/**
	 * The form field type.
	 *
	 * @var    string
	 * @since  3.3.7
	 */
	protected $type = 'skillProfessional';

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
			$layout = new JLayoutFile('plugins.user.profile.fields.skill_professional');
			$view   = $app->input->getString('view', '');

			// Only display the tip when editing profile
			if ($view === 'registration' || $view === 'profile' || $app->isClient('administrator'))
			{
				$layout = new JLayoutFile('plugins.user.profile.fields.skill_professional');
				$info   = $layout->render(array('text' => $text));
				$label  = $info . $label;
			}
		}

		return $label;
	}
    public function getOptions() {           
        $skillList = [];
        $skillList[] = "ADA Compliance";
        $skillList[] = "ASL Interpreter";
        $skillList[] = "Archivist";
        $skillList[] = "Aviation: Certified Pilot";
        $skillList[] = "Aviation: Air Traffic Controller";
        $skillList[] = "Commercial Driver License";
        $skillList[] = "Librarian";
        $skillList[] = "Mental Health Professional";
        $skillList[] = "Public Relations";
        $skillList[] = "Publisher";
        $skillList[] = "Teacher";
        $skillList[] = "Trainer";
        $skills = array_map(function($skill){
            $return = new stdClass();
            $return->value=$skill;
            $return->text=$skill;
            return $return;
        }, $skillList);
		return array_merge(parent::getOptions(), $skills);
	}
}
