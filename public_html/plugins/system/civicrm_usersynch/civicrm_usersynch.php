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
        
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));  
        $apiParams = array('id' => $user['profile']['country']);
        if ($api->Country->Get($apiParams)) {
            //each key of the result array is an attribute of the api
            $country = $api->lastResult->values;
        }
        $country_name = $country[0]->name;
        
        $apiParams = array('email' => $user['email']);
        if ($api->Contact->Get($apiParams)) {
            //each key of the result array is an attribute of the api
            $civiUser = $api->lastResult->values;
        }
                
        if(!$civiUser){
            $name = explode (" ",$user['name']);

            $apiParams = array(
                  'contact_type' => 'individual'
                , 'first_name' => $name[0]
                , 'last_name' => $name[1]
                , 'nick_name' => $user['profile']['playaname']
                , 'source' => $user['profile']['referred_by']
                , 'email' => array ( 
                    1=> array(
                        'is_primary' => 1,
                        'email' => $user['email']
                    )
                )
            );
            if ($api->Contact->Create($apiParams)) {
                //each key of the result array is an attribute of the api
                $civiUser = $api->lastResult->values[0];
            }
            
            $apiParams = array(
                'contact_id' => $civiUser->id
            );

            if ($api->Address->Get($apiParams)) {
                //each key of the result array is an attribute of the api
                $civiUserAddress = $api->lastResult->values[0];
            }
            
            $apiParams = array(
                'contact_id' => $civiUser->id,
                'location_type_id' => 3,
                'street_address' => $user['profile']['address1'],
                'supplemental_address_1' => $user['profile']['address2'],
                'postal_code' => $user['profile']['postal_code'],
                'state_province_id' => $user['profile']['state'],
                'country_id' => $user['profile']['country'],
                'city' => $user['profile']['city'],
                'is_primary' => 1,
                'is_billing' => 1,
                'manual_geo_code' => 0,
            );

            if($civiUserAddress->id){
                $apiParams['id'] = $civiUserAddress->id;    
            }
            
            $api->Address->Create($apiParams);
            
            $apiParams = array(
                'contact_id' => $civiUser->id
            );
            //print_r($apiParams);
            if ($api->Phone->Get($apiParams)) {
                //each key of the result array is an attribute of the api
                $civiUserPhone = $api->lastResult->values[0];
            }

            $apiParams = array(
                'contact_id' => $civiUser->id,
                'phone' => $user['profile']['phone'],
                'phone_numeric' => $user['profile']['phone'],
                'phone_type_id' => 2,
                'location_type_id' => 3,
                'is_primary' => 1,
                'is_billing' => 0,
            );
            if($civiUserPhone->id){
                $apiParams['id'] = $civiUserPhone->id;    
            }
            $api->Phone->Create($apiParams);
          
        
            $site_url = $_SERVER['HTTP_HOST'];
            $scheme = $_SERVER['HTTPS']=='on'?"https":"http";

            $message = "{$user['name']} wants to join the Mycodelic Forest!";
            $message .= "\n";
            $message .= "•They were referred by: {$user['profile']['referred_by']}";
            $message .= "\n";
            $message .= "•They are from: {$country_name}";
            $message .= "\n";
            $message .= "•<$scheme://$site_url/administrator/?option=com_civicrm&task=civicrm/contact/view&reset=1&cid={$civiUser->id}|Click here to view their profile. >";


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
        }
	}
}
?>