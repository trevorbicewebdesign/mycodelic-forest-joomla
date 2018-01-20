<?php
/**
 * @package      pkg_projectfork
 * @subpackage   lib_projectfork
 *
 * @author       Tobias Kuhn (eaxs)
 * @copyright    Copyright (C) 2006-2013 Tobias Kuhn. All rights reserved.
 * @license      http://www.gnu.org/licenses/gpl.html GNU/GPL, see LICENSE.txt
 */

defined('_JEXEC') or die();


if (version_compare(JVERSION, '3.0.0', '>=')) {
    class PFJFormRuleCompat extends JFormRule
    {
        public function test(SimpleXMLElement $element, $value, $group = null, JRegistry $input = null, JForm $form = null)
        {
            return $this->testCompat($element, $value, $group = null, $input = null, $form = null);
        }


        public function testCompat($element, $value, $group = null, $input = null, $form = null)
        {
            return false;
        }
    }
}
else {
    class PFJFormRuleCompat extends JFormRule
    {
        public function test(&$element, $value, $group = null, &$input = null, &$form = null)
        {
            return $this->testCompat($element, $value, $group = null, $input = null, $form = null);
        }

        public function testCompat($element, $value, $group = null, $input = null, $form = null)
        {
            return false;
        }
    }
}
/**
 * Form Rule class for the group access field.
 *
 */
class JFormRuleGroupAccess extends PFJFormRuleCompat
{
    /**
     * Method to test the value.
     *
     * @param     simplexmlelement    $element    The SimpleXMLElement object representing the <field /> tag for the form field object.
     * @param     mixed               $value      The form field value to validate.
     * @param     string              $group      The field name group control value.
     * @param     object              $input      An optional JRegistry object with the entire data set to validate against the entire form.
     * @param     object              $form       The form object for which the field is being tested.
     *
     * @return    boolean                         True if the value is valid, false otherwise.
     *
     * @throws    jexception                      on invalid rule.
     */
    public function testCompat($element, $value, $group = null, $input = null, $form = null)
    {
        // Get the possible field actions and the ones posted to validate them.
        $fieldActions = self::getFieldActions($element);
        $valueActions = self::getValueActions($value);

        // Make sure that all posted actions are in the list of possible actions for the field.
        foreach ($valueActions as $action)
        {
            if (!in_array($action, $fieldActions))
            {
                return false;
            }
        }

        return true;
    }

    /**
     * Method to get the list of permission action names from the form field value.
     *
     * @param     mixed    $value    The form field value to validate.
     *
     * @return    array              A list of permission action names from the form field value.
     */
    protected function getValueActions($value)
    {
        // Initialise variables.
        $actions = array();

        // Iterate over the asset actions and add to the actions.
        foreach ((array) $value as $name => $rules)
        {
            if (is_numeric($name)) continue;

            $actions[] = $name;
        }

        return $actions;
    }

    /**
     * Method to get the list of possible permission action names for the form field.
     *
     * @param     object    $element    The SimpleXMLElement object representing the <field /> tag for the
     * form field object.
     *
     * @return    array                 A list of permission action names from the form field element definition.
     */
    protected function getFieldActions($element)
    {
        // Initialise variables.
        $actions = array();

        // Initialise some field attributes.
        $section   = $element['section'] ? (string) $element['section'] : '';
        $component = $element['component'] ? (string) $element['component'] : 'com_projectfork';

        // Get the asset actions for the element.
        $elActions = JAccess::getActions($component, $section);

        // Iterate over the asset actions and add to the actions.
        foreach ($elActions as $item)
        {
            $actions[] = $item->name;
        }

        // Iterate over the children and add to the actions.
        foreach ($element->children() as $el)
        {
            if ($el->getName() == 'action')
            {
                $actions[] = (string) $el['name'];
            }
        }

        return $actions;
    }
}
