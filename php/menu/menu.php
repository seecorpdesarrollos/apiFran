<?php session_start();

  if (!isset($_SESSION['userName'])) {
    header('location:../login/login.php');
  }

require '../conexion.php';

$sql = $conexion->prepare('SELECT * FROM menu');
$sql->execute();
$res=$sql->fetch();

if (isset($_POST['guardar'])) {
  $primero = $_POST['primero'];
  $segundo = $_POST['segundo'];
  $tercero = $_POST['tercero'];
  $cuarto = $_POST['cuarto'];
  $quinto = $_POST['quinto'];

  $sql=$conexion->prepare("UPDATE menu SET primero = :primero , segundo = :segundo, tercero = :tercero , cuarto=:cuarto, quinto=:quinto");
 if( $sql->execute(array(
          ':primero'=>$primero,
          ':segundo'=>$segundo,
          ':tercero'=>$tercero,
          ':cuarto'=>$cuarto,
          ':quinto'=>$quinto,
  ))){
    $sql= $conexion->prepare("SELECT * FROM menu");
    $sql->execute();
    $respuesta = $sql->fetch();
   header('location:../../php/menu/menu.php?id=ok');
  }else{
    header('location:../../php/menu/menu.php?id=error');
  }
}




  require '../../pages/menu/menu.php';



 ?>
