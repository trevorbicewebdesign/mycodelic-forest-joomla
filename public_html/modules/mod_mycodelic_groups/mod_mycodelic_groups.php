<?php
defined('_JEXEC') or die('Restricted access');
require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');
$api = new civicrm_api3(array(
  // Specify location of "civicrm.settings.php".
  'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
));  

$apiParams = array(
  'email' => $_POST['form']['email']
 
);

// print_r($result);

echo "<h3>Leadership</h3>";
$result = civicrm_api3('Contact', 'get', array(   
  'return' => "id",   
  'filter.group_id' => array(0 => 11)
));
foreach($result['values'] as $index=>$val){
	$apiParams = array(
	  'id' => $val['contact_id']
	);
	if ($api->Contact->Get($apiParams)) {
	  //each key of the result array is an attribute of the api
		$civiUser = $api->lastResult->values[0];
	}
	echo "<div class='col-lg-3'>".$civiUser->display_name."</div>";	
}

echo "<h3>2018</h3>";
$result = civicrm_api3('Contact', 'get', array(   
  'return' => "id",   
  'filter.group_id' => array(0 => 9)
));
foreach($result['values'] as $index=>$val){
	$apiParams = array(
	  'id' => $val['contact_id']
	);
	if ($api->Contact->Get($apiParams)) {
	  //each key of the result array is an attribute of the api
		$civiUser = $api->lastResult->values[0];
	}
	echo "<div class='col-lg-3'>".$civiUser->display_name."</div>";	
}

echo "<h3>Newbiews</h3>";
$result = civicrm_api3('Contact', 'get', array(   
  'return' => "id",   
  'filter.group_id' => array(0 => 7)
));
foreach($result['values'] as $index=>$val){
	$apiParams = array(
	  'id' => $val['contact_id']
	);
	if ($api->Contact->Get($apiParams)) {
	  //each key of the result array is an attribute of the api
		$civiUser = $api->lastResult->values[0];
	}
	echo "<div class='col-lg-3'>".$civiUser->display_name."</div>";	
}

?>