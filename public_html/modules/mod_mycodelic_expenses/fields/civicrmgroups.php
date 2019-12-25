<?php
// no direct access
defined('_JEXEC') or die();
require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');
class JFormFieldCivicrmgroups extends JFormField {
	public function getInput() {
		$attr = " single";
        
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));  
        
        $result = civicrm_api3('Group', 'get', array());
        foreach($result['values'] as $index=>$group){
            $lists[$group['id']] = $group['title'];
        }
        
        $string .= JHtml::_('select.genericlist', $lists, $this->name, trim($attr), 'value', 'text', $this->value);			
		
		return $string;
	}
	
}