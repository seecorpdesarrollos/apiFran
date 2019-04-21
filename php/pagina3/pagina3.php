<?php session_start();

  if (!isset($_SESSION['userName'])) {
    header('location:../login/login.php');
  }


require '../conexion.php';

$sql = $conexion->prepare('SELECT * FROM menu');
$sql->execute();
$res=$sql->fetch();



$sql1 = $conexion->prepare('SELECT * FROM pagina3 WHERE id = 1');
$sql1->execute();
$pagi1=$sql1->fetch();

// Segundo
$sql2 = $conexion->prepare('SELECT * FROM pagina3 WHERE id = 2');
$sql2->execute();
$pagi2=$sql2->fetch();

// Tercero
$sql3 = $conexion->prepare('SELECT * FROM pagina3 WHERE id = 3');
$sql3->execute();
$pagi3=$sql3->fetch();


// Cuarto
$sql4 = $conexion->prepare('SELECT * FROM pagina3 WHERE id = 4');
$sql4->execute();
$pagi4=$sql4->fetch();


if (isset($_POST['tituloChange'])) {
   if (!empty( $_POST['subtitulo'])) {
     $subtitulo = $_POST['subtitulo'];
     $sqlEdit=$conexion->prepare('UPDATE pagina3 SET subtitulo=:subtitulo WHERE id=1');
     $sqlEdit->execute(array(':subtitulo'=>$subtitulo));
     header('location:../../php/pagina3/pagina3.php?id=ok');

   }
 }

 if (isset($_POST['primero'])) {
    $file_name = $_FILES['imagen']['name'];
    $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/nosotros/";
    $i="1.jpg";
     move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $i);
   $titulo1 = $_POST['titulo1'];
   $titulo2 = $_POST['titulo2'];
   $descfoto = $_POST['descFoto'];

    $sql=$conexion->prepare('UPDATE pagina3 SET  titulo1 = :titulo1, titulo2=:titulo2, descFoto=:descFoto WHERE id = 1');
    $sql->execute(array(
      ':titulo1'=>$titulo1,
      ':titulo2'=>$titulo2,
      ':descFoto'=>$descfoto,
  ));
    header('location:../../php/pagina3/pagina3.php?id=ok');
  }
  if (isset($_POST['segundo'])) {
     $file_name = $_FILES['imagen']['name'];
     $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/nosotros/";
     $i="2.jpg";
      move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $i);
    $titulo1 = $_POST['titulo1'];
    $titulo2 = $_POST['titulo2'];
    $descfoto = $_POST['descFoto'];

     $sql=$conexion->prepare('UPDATE pagina3 SET  titulo1 = :titulo1, titulo2=:titulo2, descFoto=:descFoto WHERE id = 2');
     $sql->execute(array(
       ':titulo1'=>$titulo1,
       ':titulo2'=>$titulo2,
       ':descFoto'=>$descfoto,
   ));
     header('location:../../php/pagina3/pagina3.php?id=ok');
   }

   if (isset($_POST['tercero'])) {
      $file_name = $_FILES['imagen']['name'];
      $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/nosotros/";
      $i="3.jpg";
       move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $i);
     $titulo1 = $_POST['titulo1'];
     $titulo2 = $_POST['titulo2'];
     $descfoto = $_POST['descFoto'];

      $sql=$conexion->prepare('UPDATE pagina3 SET  titulo1 = :titulo1, titulo2=:titulo2, descFoto=:descFoto WHERE id = 3');
      $sql->execute(array(
        ':titulo1'=>$titulo1,
        ':titulo2'=>$titulo2,
        ':descFoto'=>$descfoto,
    ));
      header('location:../../php/pagina3/pagina3.php?id=ok');
    }
    if (isset($_POST['cuarto'])) {
       $file_name = $_FILES['imagen']['name'];
       $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/nosotros/";
       $i="4.jpg";
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta . $i);
      $titulo1 = $_POST['titulo1'];
      $titulo2 = $_POST['titulo2'];
      $descfoto = $_POST['descFoto'];

       $sql=$conexion->prepare('UPDATE pagina3 SET  titulo1 = :titulo1, titulo2=:titulo2, descFoto=:descFoto WHERE id = 4');
       $sql->execute(array(
         ':titulo1'=>$titulo1,
         ':titulo2'=>$titulo2,
         ':descFoto'=>$descfoto,
     ));
       header('location:../../php/pagina3/pagina3.php?id=ok');
     }

     // $subtitulo1 = $_POST['subtitulo1'];
     // $tituloFoto = $_POST['tituloFoto'];
     // $subtitulofoto = $_POST['subtitulofoto'];
     // $descfoto = $_POST['descfoto'];
     //
     // $file_name = $_FILES['imagen']['name'];
     // $carpeta = $_SERVER['DOCUMENT_ROOT'] . "/webFran/img/productos/";
     // $foto = "img/productos/".$file_name;
     // move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta .$file_name );

     // $sql=$conexion->prepare("INSERT INTO  pagina2  (subtitulo, subtitulo1,foto ,tituloFoto, subtitulofoto,descfoto) VALUES (:subtitulo, :subtitulo1, :foto, :tituloFoto,  :subtitulofoto,  :descfoto)");
     // if ($sql->execute(array(
     //   ':subtitulo'=>$subtitulo,
     //   ':subtitulo1'=>$subtitulo1,
     //   ':tituloFoto'=>$tituloFoto,
     //   ':subtitulofoto'=>$subtitulofoto,
     //   ':descfoto'=>$descfoto,
     //   ':foto'=>$foto,
     // ))) {
     //   header('location:../../php/pagina3/pagina3.php?id=ok');
     // }else{
     //   header('location:../../php/pagina3/pagina3.php?id=error');
     // }









  require '../../pages/pagina3/pagina3.php';



 ?>
