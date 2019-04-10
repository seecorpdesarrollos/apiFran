<?php session_start();
  if (!isset($_SESSION['userName'])) {
     header('location:../../php/login/login.php');
  }
$error="";
$exito="";


if (isset($_POST['subirImagen'])) {
    $file_name = $_FILES['imagen']['name'];

    $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/archivosSubidos/";
    $i = 'fondo-bg.jpg';


    if (  move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $i)) {
      $exito="<br>";

     $exito .="<span class='alert alert-success'>La foto se ha cagado correctamente </span>";
    }else{
      $error="<br>";

      $error .= "<span class='alert alert-danger'>se ha producido un error</span>";
    }

}


 require '../../pages/headers/fondo.php'; 

 ?>
