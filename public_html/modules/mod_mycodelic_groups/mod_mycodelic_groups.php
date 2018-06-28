<?php
defined('_JEXEC') or die('Restricted access');
require_once('/home/trevorbi/mycodelicforest.org/public_html/administrator/components/com_civicrm/civicrm/api/class.api.php');
$api = new civicrm_api3(array(
  // Specify location of "civicrm.settings.php".
  'conf_path' => '/home/trevorbi/mycodelicforest.org/public_html/administrator/components/com_civicrm/',
));  

$apiParams = array(
  'email' => $_POST['form']['email']
 
);
$result = civicrm_api3('Contact', 'get', array(   
  'return' => "id",   
  'filter.group_id' => array(0 => 11)
));
foreach($result as $index=>$val){
	print_r($val);
	$apiParams = array(
	  'id' => $val['contact_id']
	);
	if ($api->Contact->Get($apiParams)) {
	  //each key of the result array is an attribute of the api
		$civiUser = $api->lastResult->values[0];
	
	}
	print_r($civiUser->display_name);
	echo "<br/>";
}

?>