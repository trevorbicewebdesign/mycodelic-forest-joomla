<?php

if($_POST['form']['donation']=='Yes'){
    $adminEmail['text'] .= "This is a donation. No reimbursement is required.";
}
else {
    $adminEmail['text'] .= "{$_POST['form']['donation']} is requesting Paypal reimbursement to {$_POST['form']['paypal_email']} for {$_POST['form']['item_total']}";
}
?>