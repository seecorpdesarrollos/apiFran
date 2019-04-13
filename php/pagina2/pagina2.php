<?php session_start();

  if (!isset($_SESSION['userName'])) {
    header('location:../login/login.php');
  }


require '../conexion.php';

$sql = $conexion->prepare('SELECT * FROM menu');
$sql->execute();
$res=$sql->fetch();

$sql1 = $conexion->prepare('SELECT * FROM pagina2');
$sql1->execute();
$pagi2=$sql1->fetchAll();

$sql1 = $conexion->prepare('SELECT * FROM pagina2');
$sql1->execute();
$pagi22=$sql1->fetch();
$error = "";

if (isset($_POST['pagina2'])) {
   if (!empty( $_POST['subpagina'])) {
     $subpagina = $_POST['subpagina'];
     $sqlEdit=$conexion->prepare('UPDATE pagina2 SET subpagina=:subpagina WHERE id=1');
     $sqlEdit->execute(array(':subpagina'=>$subpagina));
   }
     $subtitulo = $_POST['subtitulo'];
     if (strpos($subtitulo, " ")) {
      header('location:../../php/pagina2/pagina2.php?id=error');
     }
     $subtitulo1 = $_POST['subtitulo1'];
     $tituloFoto = $_POST['tituloFoto'];
     $subtitulofoto = $_POST['subtitulofoto'];
     $descfoto = $_POST['descfoto'];

     $file_name = $_FILES['imagen']['name'];
     $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/productos/";
     $foto = "img/productos/".$file_name;
     move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta .$file_name );

     $sql=$conexion->prepare("INSERT INTO  pagina2  (subtitulo, subtitulo1,foto ,tituloFoto, subtitulofoto,descfoto) VALUES (:subtitulo, :subtitulo1, :foto, :tituloFoto,  :subtitulofoto,  :descfoto)");
     if ($sql->execute(array(
       ':subtitulo'=>$subtitulo,
       ':subtitulo1'=>$subtitulo1,
       ':tituloFoto'=>$tituloFoto,
       ':subtitulofoto'=>$subtitulofoto,
       ':descfoto'=>$descfoto,
       ':foto'=>$foto,
     ))) {
       header('location:../../php/pagina2/pagina2.php?id=ok');
     }else{
       header('location:../../php/pagina2/pagina2.php?id=error');
     }




}





  require '../../pages/pagina2/pagina2.php';



 ?>
