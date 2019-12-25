<?php

$plugin = JPluginHelper::getPlugin('system', 'slack_integration');
$params = new JRegistry($plugin->params);//Joomla 1.6 Onward
$token = $params->get('token');

$submitter_name = $_POST['form']['first_name']." ".$_POST['form']['last_name'];
$total = $_POST['form']['item_total'];
$message = "$submitter_name has submitted an expense form for $total";

if($_POST['form']['donation']=='Yes'){
    $message .= "
*This is a donation. Thank you!!*";
}

$totalstrlength = 50;

function setItems($id, $message){
    $strlen = strlen($_POST['form']['item_name_'.$id]);
    $diff = $totalstrlength - $strlen;
    $filler = "";
    $i = 0 ;
    while($diff>0){
        $filler .= "-";
        $diff--;
    }

    if($_POST['form']['item_name_'.$id] && $_POST['form']['item_amount_'.$id]){
    $message .= "
    - {$_POST['form']['item_name_'.$id]}$filler\${$_POST['form']['item_amount_'.$id]}";
    }
    return $message;
}

$i = 1;
while(isset($_POST['form']['item_name_'.$i])){
    $message = setItems($i, $message);
    $i++;
}

$message .= "
";
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