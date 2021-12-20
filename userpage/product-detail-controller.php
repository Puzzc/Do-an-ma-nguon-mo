<?php

         session_start();
         $sp1=$_POST["sp1"];
        $_SESSION["sp1"]=1;


header("Location: cart.php");
        exit();

?>

