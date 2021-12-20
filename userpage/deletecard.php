<?php
session_start();
if(isset($_SESSION["sp1"])){
    unset($_SESSION);
    session_destroy();
    header("Location: cart.php");
    exit();
}
?>
