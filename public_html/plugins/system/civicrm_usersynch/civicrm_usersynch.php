<?php
require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');
class plgSystemCivicrm_usersynch extends JPlugin
{
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onUserAfterSave($user,$isnew,$success,$msg)	{
        $plugin = JPluginHelper::getPlugin('system', 'slack_integration');
        $params = new JRegistry($plugin->params);//Joomla 1.6 Onward
        $token = $params->get('token');
 
        $message = "{$user['name']} wants to join the mycodelic forest!";
        $message .= "\n";
        $message .= "•They were referred by {$user['com_fields']['referred-by']}";
        $message .= "\n";
        if($user['country-drop-down']!='1228'){
            $message .= "•They are from {$user['com_fields']['country-drop-down']}";
        }
        
        

        $ch = curl_init("https://slack.com/api/chat.postMessage");
        $data = http_build_query([
                    "token" 		=> $token,
                    "channel"		=> "#monitor-rsvp", //"#mychannel",
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
        
        die("onUserAfterSave");

	}
}
?>