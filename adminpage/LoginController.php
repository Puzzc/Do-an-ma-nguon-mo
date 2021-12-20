<?php

        if (count($_GET) > 0) {
        $email = $_GET["email"];
        $passwd = $_GET["passwd"];
       

    function checkValidEmail($email){
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 
    return (preg_match ($pattern, $email))?TRUE:FALSE;
    }
    
    $passwd_csdl="25d55ad283aa400af464c76d713c07ad"; 
   if(checkValidEmail($email)&&mb_strlen($passwd)>=8){

    if ( $email == "tranminhquang@gmail.com" && ($passwd_csdl==md5("12345678") )&& isset($email)) {
        session_start();
         $_SESSION["email"]=$email;
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: index.php");
        exit();
    }
   } else {
   echo"Invalid email or password";
   echo $pass_csdl;
   }
    

}
?>

