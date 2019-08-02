<?php

$plugin = JPluginHelper::getPlugin('system', 'slack_integration');
$params = new JRegistry($plugin->params);//Joomla 1.6 Onward
$token = $params->get('token');

$submitter_name = $_POST['form']['first_name']." ".$_POST['form']['last_name'];
$total = $_POST['form']['item_total'];
$message = "$submitter_name has submitted an expense form for $total";

if($_POST['form']['donation']=='Yes'){
    $message = "
*This is a donation*";
}

$totalstrlength = 50;

$strlen = strlen($_POST['form']['item_name_1']);
$diff = $totalstrlength - $strlen;
$filler = "";
$i = 0 ;
while($diff>0){
    $filler .= "-";
    $diff--;
}

if($_POST['form']['item_name_1'] && $_POST['form']['item_amount_1']){
$message .= "
- {$_POST['form']['item_name_1']}$filler\${$_POST['form']['item_amount_1']}";
}

$strlen = strlen($_POST['form']['item_name_2']);
$diff = $totalstrlength - $strlen;
$filler = "";
while($diff>0){
    $filler .= "-";
    $diff--;
}

if($_POST['form']['item_name_2'] && $_POST['form']['item_amount_2']){
$message .= "
- {$_POST['form']['item_name_2']}$filler\${$_POST['form']['item_amount_2']}";
}

$strlen = strlen($_POST['form']['item_name_3']);
$diff = $totalstrlength - $strlen;
$filler = "";
while($diff>0){
    $filler .= "-";
    $diff--;
}

if($_POST['form']['item_name_3'] && $_POST['form']['item_amount_3']){
$message .= "
- {$_POST['form']['item_name_3']}$filler\${$_POST['form']['item_amount_3']}";
}

$strlen = strlen($_POST['form']['item_name_4']);
$diff = $totalstrlength - $strlen;
$filler = "";
while($diff>0){
    $filler .= "-";
    $diff--;
}

if($_POST['form']['item_name_4'] && $_POST['form']['item_amount_4']){
$message .= "
- {$_POST['form']['item_name_4']}$filler\${$_POST['form']['item_amount_4']}";
}

// Only include the note if its set
$message .= $_POST['form']['note']?"*{$_POST['form']['note']}*":"";

$ch = curl_init("https://slack.com/api/chat.postMessage");
$data = http_build_query([
    "token"         => $token,
    "channel"       => "#bookkeeping", //"#mychannel",
    "text"          => $message, //"Hello, Foo-Bar channel message.",
    "username"      => "Mycodelic Forest Website",
    "icon_emoji"    => ":robot_face:",
]);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);