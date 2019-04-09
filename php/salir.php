<?php session_start();
session_destroy();
$_SESSION = array();
header('location:../php/login/login.php');

 ?>
