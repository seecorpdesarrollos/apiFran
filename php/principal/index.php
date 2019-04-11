<?php session_start();
if (!isset($_SESSION['userName'])) {
   header('location:../../php/login/login.php');
}


 require '../conexion.php';

 $sql=$conexion->prepare("SELECT * FROM usuarios WHERE idUser=:idUser");
 $sql->execute(array(':idUser'=>$_SESSION['idUser']));
 $res = $sql->fetch();
 $ultima =  date("d-m-Y", strtotime($res['ultimaVez']));
 $hora =  date(" H:i:s", strtotime($res['ultimaVez']));

$cantUsuarios=$conexion->prepare("SELECT COUNT(*) AS total FROM  usuarios");
$cantUsuarios->execute();
$res=$cantUsuarios->fetch();
$res1 = $res['total'];
  require '../../pages/principal/index.php';





?>
