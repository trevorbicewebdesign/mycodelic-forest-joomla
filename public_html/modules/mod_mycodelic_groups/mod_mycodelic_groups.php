<?php
defined('_JEXEC') or die('Restricted access');
require_once(JPATH_ROOT.'/administrator/components/com_civicrm/civicrm/api/class.api.php');

$api = new civicrm_api3(array('conf_path' => JPATH_ROOT.'/administrator/components/com_civicrm/'));  
$group_id = $params->get('civi_crm_groupid');
$contacts = [];

// Need to refactor this to get a single specific group
$groups = civicrm_api3('Group', 'get', array(
    'options'         => array(
        'limit'           => 100
    )
));

$result = civicrm_api3('Contact', 'get', array(   
    'return'          => "id",   
    'filter.group_id' => array(0 => $group_id),
    'options'         => array(
        'limit'           => 100
    )
));
foreach($result['values'] as $index=>$val){
	$apiParams = array(
	  'id' => $val['contact_id']
	);
	if ($api->Contact->Get($apiParams)) {
	  //each key of the result array is an attribute of the api
		$civiUser = $api->lastResult->values[0];
	}
    $contacts[$civiUser->id] = $civiUser;	
}

$contributions = civicrm_api3('Contribution', 'get', array(
    'options'         => array(
        'limit'           => 100
    )
));

foreach($contributions['values'] as $index=>$contribution){
    $contact_id = $contribution['contact_id'];
    preg_match("#[0-9][0-9][0-9][0-9]#", $groups['values'][$group_id]['title'], $tmp);
    $year = $tmp[0];
    if(
           strtotime($contribution['receive_date']) <= strtotime("01/01/".(date("Y", mktime(1,1,1,1,1,$year))+1))
        && strtotime($contribution['receive_date']) > strtotime("01/01/".(date("Y",mktime(1,1,1,1,1,$year))))
        && isset($contacts[$contact_id])
        && $contacts[$contact_id]
    ) {
        $contacts[$contact_id]->contributions = $contribution;
        if( isset($contribution['soft_credit']) && is_array($contribution['soft_credit']) && count($contribution['soft_credit'])>0) {
            foreach($contribution['soft_credit'] as $index2=>$contribution2){
                $contacts[$contribution2['contact_id']]->contributions = $contribution2;
            }
        }
    }
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
            $name = "{$contact->nick_name} <span style='font-size:12px;'>({$contact->display_name})</span>";
        }
    
        $camp_dues_paid = ( isset($contact->contributions) && is_array($contact->contributions) && count($contact->contributions))?'<i class="fa fa-heart" aria-hidden="true" style="color:green;"></i> ':"";
        ?>
        <div class='col-lg-3'><?php echo $camp_dues_paid; ?><?php echo $name; ?></div>
    <?php endforeach; ?>   
<?php else : ?>
    <div>No contacts found.</div>
<?php endif; ?>
</div>
