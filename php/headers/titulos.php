<?php session_start();
  if (!isset($_SESSION['userName'])) {
     header('location:php/login/login.php');
  }

  require '../conexion.php';


  $sql= $conexion->prepare("SELECT * FROM header");
  $sql->execute();
  $respuesta = $sql->fetch();


  if (isset($_POST['cambiar'])) {
    $primero = $_POST['primero'];
    $segundo = $_POST['segundo'];
    $tercero = $_POST['tercero'];
     $sql=$conexion->prepare("UPDATE header SET primero = :primero , segundo = :segundo, tercero = :tercero");
    if( $sql->execute(array(
             ':primero'=>$primero,
             ':segundo'=>$segundo,
             ':tercero'=>$tercero
     ))){
       $sql= $conexion->prepare("SELECT * FROM header");
       $sql->execute();
       $respuesta = $sql->fetch();
      header('location:../../php/headers/titulos.php?id=ok');
     }else{
       header('location:../../php/headers/titulos.php?id=error');
     }
  }


require '../../pages/headers/titulos.php';
   ?>
