<?php
require_once JPATH_BASE . '/administrator/components/com_civicrm/civicrm/api/class.api.php';
$api = new civicrm_api3(array(
    // Specify location of "civicrm.settings.php".
    'conf_path' => JPATH_BASE . '/administrator/components/com_civicrm/',
));

$user = &JFactory::getUser();
$userEmail = $user->get('email');

$apiParams = [
    'email' => $userEmail,
];

if ($api->Contact->Get($apiParams)) {
    // We found a user!
    $civiUser = $api->lastResult->values[0];
}

if (
    isset($_POST['form']['attending'])
    && $_POST['form']['attending'] == 'Yes'
) {
    $result = $api->GroupContact->Create([
        'contact_id' => $civiUser->id,
        'group_id' => 36,
    ]);
} else {
    $result = $api->GroupContact->Delete([
        'contact_id' => $civiUser->id,
        'group_id' => 36,
    ]);
}

$message = "*Are you intending to camp with Mycodelic Forest in 2021?* " . $_POST['form']['attending'] . "
" . $_POST['form']['Note'];

$plugin = JPluginHelper::getPlugin('system', 'slack_integration');
$params = new JRegistry($plugin->params); //Joomla 1.6 Onward
$token = $params->get('token');

$ch = curl_init("https://slack.com/api/chat.postMessage");
if (!empty($_POST['form']['playaname'])) {
   $name = "{$civiUser->nick_name } ( {$civiUser->first_name} {$civiUser->last_name} )";
} else {
   $name = "{$civiUser->first_name} {$civiUser->last_name}";
}
$data = http_build_query([
    "token" => $token,
    "channel" => "#monitor-rsvp", //"#mychannel",
    "text" => $message, //"Hello, Foo-Bar channel message.",
    "username" => $name,
    "icon_emoji" => ":robot_face:",
]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);
