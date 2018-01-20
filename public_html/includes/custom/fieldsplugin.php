<?php 
defined('_JEXEC') or die('Restricted access');
if(!class_exists("FieldArrayCaptions")){
	class FieldArrayCaptions {
		function getFieldArray($fields) {
			$db =& JFactory::getDBO();
			foreach($fields as $key=>$field) {
				
				$query  = "SELECT a.PropertyValue FROM jos_rsform_properties AS a ";
				$query .= "WHERE a.ComponentId = ".$field->ComponentId." ";
				$query .= "AND a.PropertyName = 'NAME' ";
				$db->setQuery( $query );
				$res 	= $db->query();	
				$result = $db->loadResult();
				
				$newFields[$field->ComponentId]['PropertyName']  		= $result;
				
				$query  = "SELECT a.PropertyValue FROM jos_rsform_properties AS a ";
				$query .= "WHERE a.ComponentId = ".$field->ComponentId." ";
				$query .= "AND a.PropertyName = 'DESCRIPTION' ";
				$query .= "AND a.PropertyValue != '' ";
				$db->setQuery( $query );
				$res 	= $db->query();	
				$result = $db->loadResult();		
				
				$newFields[$field->ComponentId]['PropertyDescription']  = $result;
				$newFields[$field->ComponentId]['PropertyValue'] 		= $field->PropertyValue;
			}
			return $newFields;
		}
	}
}

$db =& JFactory::getDBO();
$query  = "SELECT a.ComponentId, b.PropertyValue FROM jos_rsform_components AS a ";
$query .= "LEFT JOIN jos_rsform_properties as b ON a.ComponentId = b.ComponentId ";
$query .= "WHERE a.FormId = ".$formId." ";
$query .= "AND ( a.ComponentTypeId = 1 OR a.ComponentTypeId = 2) ";
$query .= "AND a.Published = 1 ";
$query .= "AND b.PropertyName = 'CAPTION' ";
$query .= "AND b.PropertyValue != '' ";
$query .= "ORDER BY `Order` ASC ";
$db->setQuery( $query );
$res 	= $db->query();
$rows 	= $db->loadObjectList();

$fieldArray = FieldArrayCaptions::getFieldArray($rows);

$javascript = "
var fieldArray			= new Array();
";
if(is_array($fieldArray)) {
	foreach($fieldArray as $key=>$field) {
		$javascript .= "fieldArray['".$field['PropertyName']."'] 		= \"".$field['PropertyValue']."\"; \r";
	}
	
	$document = & JFactory::getDocument();
	
	$javascript .= "new fieldReplacer($formId, fieldArray);";
	$javascript  = "window.addEvent('domready', function(){".$javascript."});";
	$document->addScriptDeclaration($javascript);
}
?>