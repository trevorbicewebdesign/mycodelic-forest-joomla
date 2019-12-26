<?php
$user = JFactory::getUser();
$names = explode(" ",$user->name);
// Set the user email
$_POST['form']['user_email'] = $user->email;

$i = 1;
while($_POST['form']['item_amount_'.$i]){
    $total += floatval($_POST['form']['item_amount_'.$i]) 
        
    $_POST['form']['item_amount_'.$i] = empty($_POST['form']['item_amount_'.$i])? "": number_format($_POST['form']['item_amount_'.$i], 2);
    
    $i++;
}
$total += floatval($_POST['form']['tax']);

$_POST['form']['tax'] = empty($_POST['form']['tax'])? "": number_format($_POST['form']['tax'], 2);

$_POST['form']['item_total'] = number_format($total,2);
?>