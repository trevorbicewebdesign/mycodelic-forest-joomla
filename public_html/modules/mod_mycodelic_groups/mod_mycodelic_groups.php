<?php
defined('_JEXEC') or die('Restricted access');
require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');

$api = new civicrm_api3(array('conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/'));  
$group_id = $params->get('civi_crm_groupid');


// Need to refactor this to get a single specific group
$groups = civicrm_api3('Group', 'get', array());

$result = civicrm_api3('Contact', 'get', array(   
  'return'          => "id",   
  'filter.group_id' => array(0 => $group_id)
));
foreach($result['values'] as $index=>$val){
	$apiParams = array(
	  'id' => $val['contact_id']
	);
	if ($api->Contact->Get($apiParams)) {
	  //each key of the result array is an attribute of the api
		$civiUser = $api->lastResult->values[0];
	}
    $contacts[] = $civiUser;	
}

?>

<h3><?php echo $groups['values'][$group_id]['title']; ?></h3>
<div class="container">
<?php 
if(is_array($contacts) && count($contacts)>0):
    foreach($contacts as $index=>$contact): 
        if(empty($contact->nick_name)){
            $name = $contact->display_name;
        }
        else {
            $name = "{$contact->nick_name} ({$contact->display_name})";
        }
        ?>
        <div class='col-lg-3'><?php echo $name; ?></div>
    <?php endforeach; ?>   
<?php else : ?>
    <div>No contacts found.</div>
<?php endif; ?>
</div>
