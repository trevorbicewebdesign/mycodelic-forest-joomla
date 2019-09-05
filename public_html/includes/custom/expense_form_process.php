<?php
$user = JFactory::getUser();
$names = explode(" ",$user->name);
// Set the user email
$_POST['form']['user_email'] = $user->email;

$total = 
      floatval($_POST['form']['item_amount_1']) 
    + floatval($_POST['form']['item_amount_2'])
    + floatval($_POST['form']['item_amount_3'])
    + floatval($_POST['form']['item_amount_4'])
    + floatval($_POST['form']['tax'])
;
$_POST['form']['item_amount_1'] = empty($_POST['form']['item_amount_1'])? "": number_format($_POST['form']['item_amount_1'], 2);
$_POST['form']['item_amount_2'] = empty($_POST['form']['item_amount_2'])? "": number_format($_POST['form']['item_amount_2'], 2);
$_POST['form']['item_amount_3'] = empty($_POST['form']['item_amount_3'])? "": number_format($_POST['form']['item_amount_3'], 2);
$_POST['form']['item_amount_4'] = empty($_POST['form']['item_amount_4'])? "": number_format($_POST['form']['item_amount_4'], 2);
$_POST['form']['tax'] = empty($_POST['form']['tax'])? "": number_format($_POST['form']['tax'], 2);

$_POST['form']['item_total'] = number_format($total,2);
?>