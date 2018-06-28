<?php
require_once('/home/trevorbi/mycodelicforest.org/public_html/administrator/components/com_civicrm/civicrm/api/class.api.php');
$api = new civicrm_api3(array(
  // Specify location of "civicrm.settings.php".
  'conf_path' => '/home/trevorbi/mycodelicforest.org/public_html/administrator/components/com_civicrm/',
));  

$apiParams = array(
  'email' => $_POST['form']['email']
 
);
if ($api->Contact->Get($apiParams)) {
  //each key of the result array is an attribute of the api
  	$civiUser = $api->lastResult->values[0];
	
$message  = "";
$message .= "•How are you getting to the Burn? _".$_POST['form']['getting_to_burn']."_
";
if(!empty($_POST['form']['seats_available'][0])) {
	$message .= "•How many seats are available in your vehicle _".$_POST['form']['seats_available'][0]."_
";
}
if(!empty($_POST['form']['other_vehicle_driver'][0])) {
	$message .= "•Who's Vehicle? _".$_POST['form']['other_vehicle_driver']."_
";
}

$message .= "•What will you be camping in? _".$_POST['form']['type_of_tent']."_
";
if(!empty($_POST['form']['type_of_camping'][0])) {
	$message .= "•Describe: _".$_POST['form']['type_of_camping']."_
";
}
$message .= "•What are the dimensions Width x Length? _".$_POST['form']['camping_dimensions']."_
";
$message .= "•How would you like to contribute to the camp? 
";
$message .= "_*".$_POST['form']['camp_contribution']."*_
";
$message .= $_POST['form']['camp_contribution_textarea']."
";
$message .= " ";
	
	$plugin = JPluginHelper::getPlugin('system', 'slack_integration');
	$params = new JRegistry($plugin->params);//Joomla 1.6 Onward
	$token = $params->get('token');

	$ch = curl_init("https://slack.com/api/chat.postMessage");
	$data = http_build_query([
				"token" 		=> $token,
				"channel"		=> "#leadership", //"#mychannel",
				"text" 		=> $message, //"Hello, Foo-Bar channel message.",
				"username" 	=> $civiUser->first_name." ".$civiUser->last_name.": ".$civiUser->phone,
				"icon_emoji"	=> ":robot_face:",
	]);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$result = curl_exec($ch);
	curl_close($ch);
}

