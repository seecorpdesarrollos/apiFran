<?php session_start();
if (!isset($_SESSION['userName'])) {
   header('location:../../php/login/login.php');
}
  require '../../pages/principal/index.php';





?>
