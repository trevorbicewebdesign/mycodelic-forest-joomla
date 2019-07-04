<?php
require_once(JPATH_ROOT."/administrator/components/com_civicrm/civicrm/api/class.api.php");
use Twilio\Rest\Client;


class plgSystemMf_twilio extends JPlugin
{
	function __construct(&$subject, $config) {
		parent::__construct($subject, $config);
	}
	function onAfterInitialise()	{
		
		$doc 		= JFactory::getDocument();
		$mainframe 	= JFactory::getApplication();	
		$jinput 		= JFactory::getApplication()->input;
		
		$task 	= $jinput->get('task', 	$_REQUEST['task'], 		'RAW');
		$key		= $jinput->get('key', 	$_REQUEST['key'], 		'RAW');
		$from	= $jinput->get('From', 	$_REQUEST['From'], 		'RAW');
		$body	= $jinput->get('Body', 	$_REQUEST['Body'], 		'RAW');
		
		
		
		
		if($task == 'twilio.insertSlack' ){
			
			require_once(JPATH_ROOT."/administrator/components/com_civicrm/civicrm/api/class.api.php");
			$api = new civicrm_api3(array(
			  // Specify location of "civicrm.settings.php".
			  'conf_path' => JPATH_ROOT."/administrator/components/com_civicrm/",
			));
			echo $from;
			
				$formatted = sprintf("(%s) %s-%s",
			    substr($from, 2, 3),
			    substr($from, 5, 3),
			    substr($from, 8));
			  
			$apiParams = array(
			  'phone' => $formatted
			 
			);
			if ($api->Contact->Get($apiParams)) {
			  //each key of the result array is an attribute of the api
			  echo "\n contacts found ".$api->count;
			  $civiUser = $api->lastResult->values[0];
			  $this->slack($body." <!everyone>",$civiUser->first_name." ".$civiUser->last_name.": ".$civiUser->phone, "#leadership");
			}
			else {
			  echo $api->errorMsg();
			}
			
			
		}
		else if($task == 'slack.eventManager') {
			$data = json_decode(file_get_contents('php://input'), true);
			echo $data["challenge"];
			if($data["event"]['subtype'] !='bot_message'){
				if( !empty($data["event"]['thread_ts']))  {
					
					
					$message = json_decode($this->slack_message("G9J7R2ZLG", $data["event"]['thread_ts']));
					
					if($message->messages[0]->subtype == 'bot_message') {
						$username = explode(":",$message->messages[0]->username);
						$phone	= $username[1];
					}
					
					/*
					curl -X POST 'https://api.twilio.com/2010-04-01/Accounts/AC7dab6b08735f18f6466332f2c5ee9293/Messages.json' \
					--data-urlencode 'To=+15558675310'  \
					--data-urlencode 'From=+15017122661'  \
					--data-urlencode 'Body=This is the ship that made the Kessel Run in fourteen parsecs?'  \
					-u AC7dab6b08735f18f6466332f2c5ee9293:your_auth_token
					*/
					// $this->slack( "Send a message to ".$phone,"SLACK TESTING", "#leadership");
					$this->twilio_message($phone,$data["event"]['text']);
				}
				
			}
			die();
			
		}
	}
	function twilio_message($destination, $message)	{	
		// Require the bundled autoload file - the path may need to change
		// based on where you downloaded and unzipped the SDK
		
		$destination = preg_replace('/[^0-9]/', '', $destination);
		$destination = "+1".$destination;

		
		// Your Account SID and Auth Token from twilio.com/console
		$sid 		= 'AC7dab6b08735f18f6466332f2c5ee9293';
		$token 		= 'e8a3ae06c40f7eb4e0b633609eed9edc';
		$client 		= new Client($sid, $token);
		
		// Use the client to do fun stuff like send text messages!
		$client->messages->create(
		    // the number you'd like to send the message to
		   $destination,
		    array(
			   // A Twilio phone number you purchased at twilio.com/console
			   'from' => '+14158180287',
			   // the body of the text message you'd like to send
			   'body' => $message
		    )
		);
		return;
	}
	function slack_message($channel, $thread_ts)	{
		$token = 'xoxp-210734806581-210559729555-339562354386-23221f85ba6756a31cbd5e0ddf3f38e0';
		
		
		$ch = curl_init("https://slack.com/api/groups.replies");
		$data = http_build_query([
			"token" 		=> $token,
			"channel"		=> $channel, //"#mychannel",
			"thread_ts" 	=> $thread_ts, //"Hello, Foo-Bar channel message.",
			
		]);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
		
		
		
		return $result;
	}
	
	function slack($message, $username, $channel)	{
		$token = 'xoxp-210734806581-210559729555-339562354386-23221f85ba6756a31cbd5e0ddf3f38e0';
		
		
		$ch = curl_init("https://slack.com/api/chat.postMessage");
		$data = http_build_query([
			"token" 		=> $token,
			"channel"		=> $channel, //"#mychannel",
			"text" 		=> $message, //"Hello, Foo-Bar channel message.",
			"username" 	=> $username,
			"icon_emoji"	=> ":robot_face:",
		]);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		curl_close($ch);
		
		
		
		return $result;
	}

}
?>