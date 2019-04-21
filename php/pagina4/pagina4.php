<?php session_start();

  if (!isset($_SESSION['userName'])) {
    header('location:../login/login.php');
  }


require '../conexion.php';

$sql = $conexion->prepare('SELECT * FROM menu');
$sql->execute();
$res=$sql->fetch();

$sql1 = $conexion->prepare('SELECT * FROM pagina4');
$sql1->execute();
$pagi2=$sql1->fetchAll();

$sql1 = $conexion->prepare('SELECT * FROM pagina4 WHERE id = 1');
$sql1->execute();
$pagi22=$sql1->fetch();

$sql2 = $conexion->prepare('SELECT * FROM pagina4 WHERE id = 2');
$sql2->execute();
$pagi2=$sql2->fetch();


if (isset($_POST['pagina4'])) {
   if (!empty( $_POST['subtitulo'])) {
     $subtitulo = $_POST['subtitulo'];
     $desc = $_POST['desc'];
     $sqlEdit=$conexion->prepare('UPDATE pagina4 SET subtitulo=:su,desc1 =:desc1 WHERE id=1');
     $sqlEdit->execute(array(':su'=>$subtitulo, ':desc1'=>$desc));
   }

     $nombre = $_POST['nombre'];
     $cargo = $_POST['cargo'];
     $nombre2 = $_POST['nombre2'];
     $cargo2 = $_POST['cargo2'];

     $file_name = $_FILES['imagen']['name'];
     $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/equipo/";
     $foto = "1.jpg";
     move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta .$foto );

     $file_name1 = $_FILES['imagen2']['name'];
     $carpeta2 = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/equipo/";
     $foto2 = "2.jpg";
     move_uploaded_file($_FILES['imagen2']['tmp_name'], $carpeta .$foto2 );

     $sql=$conexion->prepare('UPDATE  pagina4 SET nombre =:nombre, cargo= :cargo WHERE id =:id');
     if ($sql->execute(array(
       ':nombre'=>$nombre,
       ':cargo'=>$cargo,
       ':id'=>1,

     ))) {
       $sql=$conexion->prepare('UPDATE  pagina4 SET nombre =:nombre, cargo =:cargo WHERE id =:id');
       if ($sql->execute(array(
         ':nombre'=>$nombre2,
         ':cargo'=>$cargo2,
          ':id'=>2,
       ))){
         header('location:../../php/pagina4/pagina4.php?id=ok');

       }

     }else{
       header('location:../../php/pagina4/pagina4.php?id=error');
     }




}





  require '../../pages/pagina4/pagina4.php';



 ?>
