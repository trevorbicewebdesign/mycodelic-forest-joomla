<?php 


defined('_JEXEC') or die('Restricted access');

if(!class_exists("FieldArrayLabels")){
	class FieldArrayLabels {
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
				$newFields[$field->ComponentId]['type'] 			= $field->ComponentTypeId;
				$newFields[$field->ComponentId]['id'] 				= $field->ComponentId;
			}
			return $newFields;
		}
	}
}

$db =& JFactory::getDBO();
$query  = "SELECT 
				  a.ComponentId
				, b.PropertyValue 
				, a.ComponentTypeId
			";
$query .= "FROM jos_rsform_components AS a ";
$query .= "LEFT JOIN jos_rsform_properties as b ON a.ComponentId = b.ComponentId ";
$query .= "WHERE a.FormId = ".$formId." ";
$query .= "AND (
					a.ComponentTypeId = 1 
				OR 	a.ComponentTypeId = 2
				OR 	a.ComponentTypeId = 8
			) ";
$query .= "AND a.Published = 1 ";
$query .= "AND b.PropertyName = 'CAPTION' ";
$query .= "AND b.PropertyValue != '' ";
$query .= "ORDER BY `Order` ASC ";
$db->setQuery( $query );
$res 	= $db->query();
$rows 	= $db->loadObjectList();

$fieldArray = FieldArrayLabels::getFieldArray($rows);

$document = & JFactory::getDocument();

$document->addScript('http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js');
$document->addScript(JURI::root(true) . '/includes/custom/fieldreplacer/jq132.noconflict.js');
$document->addScript(JURI::root(true) . '/includes/custom/fieldreplacer/jquery.infieldlabel.js');
$document->addScript(JURI::root(true) . '/includes/custom/fieldreplacer/fieldreplacer.js');

/*
$javascript = '
(function( $ ) {
  $(function() {
    $("label").inFieldLabels({ className:"infieldLabel" });
  });
})(jq132);
';
*/
/*
$document->addScriptDeclaration($javascript);
$style = "
label.infieldLabel {
	cursor: text;
	display: block;
	height: 26px;
	margin-left: 2%;
	padding-top: 6px;
	position: absolute;
	width: 98%;
	text-align:left;
	
}
";

$document->addStyleDeclaration($style);
*/
/*
<!--[if lte IE 6]>
	<style type="text/css" media="screen">
		form label {
				background: #fff;
		}
	</style>
<![endif]-->
*/


$javascript = "
var fieldArray			= new Array();
";
if(is_array($fieldArray)) {
	foreach($fieldArray as $key=>$field) {
		if($field['type']==8) {
			$javascript .= "fieldArray['captchaTxt".$field['id']."'] 		= \"".$field['PropertyValue']."\"; \r";
		}
		else {
			$javascript .= "fieldArray['".$field['PropertyName']."'] 		= \"".$field['PropertyValue']."\"; \r";
		}
	}
	
	$document = & JFactory::getDocument();
	
	$javascript .= "new fieldReplacer($formId, fieldArray);";
	$javascript  = "window.addEvent('domready', function(){".$javascript."});";
	$document->addScriptDeclaration($javascript);
}

?>