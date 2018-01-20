<?php
// no direct access
defined('_JEXEC') or die();
jimport('joomla.html.html');
jimport('joomla.form.formfield');
JHtml::_('behavior.framework', true);
/**
 * @package    RocketTheme
 * @subpackage rokstories.elements
 */
class JFormFieldDataselect extends JFormField {
	public function getInput() {
		// Initialize variables.
		$db = JFactory::getDbo();
		
		$rootDir 	= preg_replace("#administrator#", "", getcwd());
		$dirList	= scandir($rootDir."modules/mod_tbworks_accordion/lists");
		require_once($rootDir."modules/mod_tbworks_accordion/lists.php");
		unset($dirList[0]);
		//$dirList[1] = "default";
		sort($dirList);

		$newList = array_merge(array(), $dirList);
		foreach($newList as $key=>$val) {
			if(preg_match("#[.]php$#", ucfirst($val) ) ) {
				$dataArray[$val] = preg_replace("#[.]php#", "", ucfirst($val));
				
				// require_once($rootDir."modules/mod_tbworks_accordion/lists/".$val);
			}
			
		}
		
		return JHtml::_('select.genericlist', $dataArray, $this->name, trim($attr), 'value', 'text', $this->value);
	}
}