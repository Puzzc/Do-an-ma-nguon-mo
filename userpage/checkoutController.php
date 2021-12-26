<?php


$checkout_f_name=$_POST["checkout_f_name"];
$checkout_l_name=$_POST["checkout_l_name"];
$checkout_email=$_POST["checkout_email"];
$checkout_mobile=$_POST["checkout_mobile"];
$checkout_address=$_POST["checkout_address"];
$checkout_city=$_POST["checkout_city"];
$checkout_province=$_POST["checkout_province"];
$checkout_address=$_POST["checkout_address"];
$checkout_state=$_POST["checkout_state"];
$checkout_code=$_POST["checkout_code"];

function detect_number($checkout_mobile)
{
    if(strlen($checkout_mobile)!=10){
        return false;
    }
    if(preg_match('/((09|03|07|08|05)+([0-9]{8})\b)/g',$checkout_mobile)){
        return true;
    }
    return FALSE;
    
}

function detect_fname($checkout_f_name)
{
    if(preg_match('/^[a-zA-z]*$/',$checkout_f_name)){
        return true;
    }
    return FALSE;
    
}

function detect_lname($checkout_l_name)
{
    if(preg_match('/^[a-zA-z]*$/',$checkout_l_name)){
        return true;
    }
    return FALSE;
    
}

if(detect_fname($checkout_f_name)==FALSE){
    echo'invalid first name!!!!';
}
else if(detect_lname($checkout_l_name)==FALSE){
    echo'invalid last name!!!!';
}
else if(detect_number($checkout_mobile)==FALSE){
 
    echo'invalid phone number!!!!';
}
 else {
     echo 'Thông tin đơn hàng';
    echo $checkout_f_name.'<br>';
    echo $checkout_l_name.'<br>';
    echo $checkout_email.'<br>';
    echo $checkout_mobile.'<br>';
    echo $checkout_province.'<br>';
    echo $checkout_address.'<br>';
    echo $checkout_city.'<br>';
    echo $checkout_state.'<br>';
    echo $checkout_code.'<br>';
}
?>


