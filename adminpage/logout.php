<?php
session_start();
if(isset($_SESSION["email"])){
    unset($_SESSION);
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
