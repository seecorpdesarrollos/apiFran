<?php session_start();

  if (!isset($_SESSION['userName'])) {
    header('location:../login/login.php');
  }


require '../conexion.php';

$sql = $conexion->prepare('SELECT * FROM menu');
$sql->execute();
$res=$sql->fetch();

$sql1 = $conexion->prepare('SELECT * FROM pagina1');
$sql1->execute();
$pagi1=$sql1->fetch();


if (isset($_POST['pagina1'])) {
  $subtitulo = $_POST['subtitulo'];
  $titulo1 = $_POST['titulo1'];
  $titulo2 = $_POST['titulo2'];
  $titulo3 = $_POST['titulo3'];
  $desc1 = $_POST['desc1'];
  $desc2 = $_POST['desc2'];
  $desc3 = $_POST['desc3'];

  $sql=$conexion->prepare("UPDATE pagina1 SET subtitulo = :subtitulo , titulo1=:titulo1, titulo2 = :titulo2, titulo3 = :titulo3, desc1= :desc1, desc2 = :desc2, desc3 = :desc3");
  if ($sql->execute(array(
     ':subtitulo'=>$subtitulo,
     ':titulo1'=>$titulo1,
     ':titulo2'=>$titulo2,
     ':titulo3'=>$titulo3,
     ':desc1'=>$desc1,
     ':desc2'=>$desc2,
     ':desc3'=>$desc3,
  ))) {
    header('location:../../php/pagina1/pagina1.php?id=ok');
  }else{
    header('location:../../php/pagina1/pagina1.php?id=error');
  }
}





  require '../../pages/pagina1/pagina1.php';



 ?>
