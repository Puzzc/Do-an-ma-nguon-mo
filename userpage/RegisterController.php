<?php

$bnt_XuLy = $_POST["bnt_XuLy"];
switch ($bnt_XuLy) {
    case "login":
        header("Location: login.php");
        die;
        break;
    case "register":
        if($_POST["txt_password"]==$_POST["txt_repassword"]){
        
            
    $txt_name=$_POST["txt_name"];
    $rad_gender=$_POST["rad_gender"];
    $txt_password=$_POST["txt_password"];
    $txt_email=$_POST["txt_email"];
    $del_city=$_POST["del_city"];
 
echo 'New user'.'<br>';
echo 'Tên: '.$txt_name.'<br>';
echo 'email: '.$txt_email.'<br>';
echo 'giới tính: '.$rad_gender.'<br>';
echo 'password: '.md5($txt_password).'<br>';
echo 'Mã Tỉnh/tp: '.$del_city.'<br>';  
            
            
        //header("Location: login.php");
        //die;
        break;
        }
        echo "re-password does not match";
}
?>

