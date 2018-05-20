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
class JFormFieldCategoryselect extends JFormField {
	public function getInput() {
		// Initialize variables.
		$db = JFactory::getDbo();
		
		$rootDir 	= preg_replace("#administrator#", "", getcwd());
		$dirList	= scandir($rootDir."modules/mod_tbworks_accordion/lists");
		require_once($rootDir."modules/mod_tbworks_accordion/lists.php");
		unset($dirList[0]);
		//$dirList[1] = "default";
		sort($dirList);
		
		$attr = " multiple";

		$newList = array_merge(array(), $dirList);
		foreach($newList as $key=>$val) {
			if(preg_match("#[.]php$#", ucfirst($val) ) ) {
				unset($lists);
				
				$dataArray[$val] = preg_replace("#[.]php#", "", ucfirst($val));	
				//echo $val;
				
				require_once($rootDir."modules/mod_tbworks_accordion/lists/".$val);
				
				$class = "modTBWorksAccordion".$dataArray[$val]."Lists";
				$modTBWorksAccordionLists 	= new $class;
				//$staticMethod = 'getCategories';
				$tmp = $modTBWorksAccordionLists->getCategories();;
				if(is_array($tmp)) {
					foreach($tmp as $id=>$category) {
						$lists[$category->id] = $category->title;
						// $lists = $category->title;
						// echo $category->title."<br/>";
					}
				}
				
				// print_r($lists);
				$string .= JHtml::_('select.genericlist', $lists, $this->name, trim($attr), 'value', 'text', $this->value);
				
			}
			
		}
		
		return $string;
	}
	static function getList() {
		global $mainframe;
		
		$db 	=& JFactory::getDBO();
		jimport('joomla.utilities.date');
		$date = new JDate();
		$now = $date->toMySQL();
		
		$db 	=& JFactory::getDBO();
		$query  = "SELECT a.name AS title, a.id FROM jos_k2_categories AS a ";
		$query .= 'WHERE a.published = 1 ';
		//$query .= "AND a.extension = 'com_content' ";
		
		$db->setQuery($query);
		//echo $query."<br>";
		$rows = $db->loadObjectList();
		//print_r($rows);
		if ($order == 'rnd') shuffle($rows);
		if(!$items) {
			return $rows;
		} else {
			return array_slice($rows, 0, $items);
		}
	}
}