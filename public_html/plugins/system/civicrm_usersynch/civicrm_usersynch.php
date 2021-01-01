<?php
require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');
class plgSystemCivicrm_usersynch extends JPlugin
{
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
    function onUserAfterLogin($options) {
        $app = JFactory::getApplication();
        if(!$app->isAdmin()) {
            $app->redirect(JRoute::_('/index.php?option=com_users&view=profile&layout=edit'));
        }
    }
    function onAfterRoute()	{

       // die("111111 1234qwer");
        
        
        /*
         $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));  
        
        $apiParams = array('email' => 'frank.newguy.1@trevorbice.com');
        //$apiParams = array('email' => 'trevor.bice@burningman.org');
        
        
        if ($api->Contact->Get($apiParams)) {
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
        
        $user['profile']['address1'] = "12345 St";
        $user['profile']['address2'] = "APT 401";
        $user['profile']['country'] = "1228";
        $user['profile']['state'] = "1003";
        $user['profile']['postal_code'] = "94102";
        $user['profile']['city'] = "Nowhere";
        $user['profile']['phone'] = "5557071234";
        

        $apiParams = array(
            'location_type_id' => 3,
            'street_address' => $user['profile']['address1'],
            'supplemental_address_1' => $user['profile']['address2'],
            'postal_code' => $user['profile']['postal_code'],
            'state_province_id' => $user['profile']['state'],
            'country_id' => $user['profile']['country'],
            'city' => $user['profile']['city'],
            'is_primary' => 1,
            'is_billing' => 0,
            'manual_geo_code' => 0,
        );
        
        if($civiUserAddress->id){
            $apiParams['id'] = $civiUserAddress->id;    
        }
        
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
        
        //print_r($civiUserPhone);
        
        
        // print_r($apiParams);
       
        // $apiParams =  (array) $civiUserAddress;
        

        // $api->Address->Create($apiParams);
        
        
        //die();
        */
    }
    function onUserAfterDelete($user,$success,$msg)	{
        $plugin = JPluginHelper::getPlugin('system', 'slack_integration');
        $params = new JRegistry($plugin->params);//Joomla 1.6 Onward
        $token = $params->get('token');

        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));  
        
        $contact = $this->getContact($user['email']);
        if($contact){
            $contact_id = $contact->id;
            $this->deleteContact($contact_id);
        }
    }
    function getPhone($contact_id){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $apiParams = array(
            'contact_id' => $contact_id
        ); 
        $results = $api->Phone->Get($apiParams);
        if ($results && $results->phone) {
            //each key of the result array is an attribute of the api
            $civiUserPhone = $api->lastResult->values[0];
            return $civiUserPhone;
        }
        return false;
    }
    function createPhone($user, $contact_id){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $apiParams = array(
            'contact_id' => $contact_id,
            'phone' => $user['profile']['phone'],
            'phone_numeric' => $user['profile']['phone'],
            'phone_type_id' => 2,
            'location_type_id' => 3,
            'is_primary' => 1,
            'is_billing' => 0,
        );
        // if($civiUserPhone->id){
        //    $apiParams['id'] = $civiUserPhone->id;    
        // }
        $results = $api->Phone->Create($apiParams);
        if ($results) {
            //each key of the result array is an attribute of the api
            $civiUserPhone = $api->lastResult->values[0];
            return $civiUserPhone;
        }
        return false;
    }
    function updatePhone($user, $contact_id, $phone_id){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $apiParams = array(
            'contact_id' => $contact_id,
            'phone' => $user['profile']['phone'],
            'phone_numeric' => $user['profile']['phone'],
            'phone_type_id' => 2,
            'location_type_id' => 3,
            'is_primary' => 1,
            'is_billing' => 0,
            'id' => $phone_id
        );

        $results = $api->Phone->Create($apiParams);
        if ($results) {
            //each key of the result array is an attribute of the api
            $civiUserPhone = $api->lastResult->values[0];
            return $civiUserPhone;
        }
        return false;
    }

        

    function getContact($email){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        $apiParams = array('email' => $email);
        if ($api->Contact->Get($apiParams)) {
            // We found a user!
            $civiUser = $api->lastResult->values[0];
            return $civiUser;
        }
        return false;
    }
    function deleteContact($contact_id){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $results = $api->Contact->Delete(['id'=>$contact_id]);
    }
    function updateContact($userinfo, $id){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $apiParams = array(
              'contact_type' => 'individual'
            , 'first_name' => $name[0]
            , 'last_name' => $name[1]
            , 'nick_name' => $userInfo['profile']['playaname']
            , 'source' => $userInfouserInfo['profile']['referred_by']
            , 'street_address' => $user['profile']['address1']
            , 'email' => $userInfo['email']
            , 'id' => $id
        );
        if ($api->Contact->Update($apiParams, $id)) {
            //each key of the result array is an attribute of the api
            $civiUser = $api->lastResult->values[0];
            return true;
        }
        return false;
    }
    function createContact($userinfo){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        $name = explode (" ", $userinfo['name']);

        $apiParams = array(
              'contact_type' => 'individual'
            , 'first_name' => $name[0]
            , 'last_name' => $name[1]
            , 'nick_name' => $userInfo['profile']['playaname']
            , 'source' => $userinfo['profile']['referred_by']
            , 'street_address' => $userinfo['profile']['address1']
            , 'email' => $userinfo['email']
        );
        if ($results = $api->Contact->Create($apiParams)) {
            //each key of the result array is an attribute of the api
            $civiUser = $api->lastResult->values[0];
            return $civiUser;
        }
        return false;
    }
    function getAddress($contact_id){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $apiParams = array(
            'contact_id' => $contact_id
        );
        if ($api->Address->Get($apiParams)) {
            //each key of the result array is an attribute of the api
            $civiUserAddress = $api->lastResult->values[0];
            return $civiUserAddress;
        }        
        return false;
    }
    function createAddress($contact_id, $address){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $apiParams = array(
            'contact_id' => $contact_id,
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
            'id'=>$address->id
        );
        $results = $api->Address->Create($apiParams);
        if ($results) {
            //each key of the result array is an attribute of the api
            $civiUserAddress = $api->lastResult->values[0];
            return $civiUserAddress;
        }        
        return false;
    }
    function updateAddress($user, $address_id, $contact_id){
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
     
        $apiParams = array(
            'contact_id' => $contact_id,
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
            'id'=>$address_id
        );
        $results = $api->Address->Create($apiParams);
        if( $results ) {
            //each key of the result array is an attribute of the api
            $civiUserAddress = $api->lastResult->values[0];
            return $civiUserAddress;
        }        
        return false;
    }
    function slackNotification($user, $contact_id){
        $currentuser = JFactory::getUser();
        $name = explode (" ", $user['name']);
        $api = new civicrm_api3(array(
          // Specify location of "civicrm.settings.php".
          'conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/',
        ));
        
        $site_url = $_SERVER['HTTP_HOST'];
        $scheme = $_SERVER['HTTPS']=='on'?"https":"http";
        $message = "";
        if($isnew){
            $message .= "{$user['name']} wants to join the Mycodelic Forest!";
            $message .= "\n";
            $message .= "•They were referred by: {$user['profile']['referred_by']}";
            $message .= "\n";
            $message .= "•They are from: {$country_name}";
            $message .= "\n";
            $message .= "•<$scheme://$site_url/administrator/?option=com_civicrm&task=civicrm/contact/view&reset=1&cid={$contact_id}|Click here to view their profile. >";
        }
        else {
            if($currentuser->id != $user['id']){
                $message .= "{$currentuser->name} has just updated {$user['name']}'s' profile information.";
            }
            else {
                $message .= "{$user['name']} has just updated their profile information.";
            }
            $message .= "\n";
            $message .= "•<$scheme://$site_url/administrator/?option=com_civicrm&task=civicrm/contact/view&reset=1&cid={$contact_id}|Click here to view their profile. >";
        }

        $ch = curl_init("https://slack.com/api/chat.postMessage");
        $data = http_build_query([
                    "token" 		=> $token,
                    "channel"		=> "#monitor-rsvp", //"#mychannel",
                    "text" 		=> $message, //"Hello, Foo-Bar channel message.",
                    "username" 	=> $name[0]." ".$name[1].": ".$user['phone'],
                    "icon_emoji"	=> ":robot_face:",
        ]);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);
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
            
        // First create or update the contact
        $contact = $this->getContact($user['email']);
        if(!($contact)){
            $contact_id = $this->createContact($user);
        }
        else {
            $contact_id = $contact->id;
            $this->updateContact($user, $contact_id);
        }
        
        // Update or create the address
        $address = $this->getAddress($contact_id);
        if(!($address)){
            $address = $this->createAddress($contact_id, $user);
            $address_id = $address->id;
        }
        else {
            $address_id = $address->id;
            $this->updateAddress($user, $address_id, $contact_id);
        }
        
        // Update or create the phone
        $phone = $this->getPhone($contact_id);
        if(!($phone)){
            $phone = $this->createPhone($user, $contact_id);
            $phone_id = $phone->id;
        }
        
        if($isnew){
            $this->slackNotification($user,$contact_id);
        }
	}
}
?>