<?php
require_once('/home/trevorbi/mycodelicforest.org/public_html/administrator/components/com_civicrm/civicrm/api/class.api.php');
$api = new civicrm_api3(array(
  // Specify location of "civicrm.settings.php".
  'conf_path' => '/home/trevorbi/mycodelicforest.org/public_html/administrator/components/com_civicrm/',
));  

$apiParams = array(
  'email' => $_POST['form']['email']
);

$message = "*Are you intending to camp with Mycodelic Forest in 2019?* ".$_POST['form']['attending']."
".$_POST['form']['Note'];

$plugin = JPluginHelper::getPlugin('system', 'slack_integration');
$params = new JRegistry($plugin->params);//Joomla 1.6 Onward
$token = $params->get('token');

$ch = curl_init("https://slack.com/api/chat.postMessage");
if(!empty($_POST['form']['playaname'])){
	$name = $_POST['form']['playaname']." (".$_POST['form']['fname']." ".$_POST['form']['lname'].")";	
}
else {
	$name = $_POST['form']['fname']." ".$_POST['form']['lname'];
}
$data = http_build_query([
			"token" 		=> $token,
			"channel"		=> "#monitor-rsvp", //"#mychannel",
			"text" 		=> $message, //"Hello, Foo-Bar channel message.",
			"username" 	=> $name,
			"icon_emoji"	=> ":robot_face:",
]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);