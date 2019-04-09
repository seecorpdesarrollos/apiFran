<?php session_start();

echo $_SESSION['rol'];
  if (isset($_SESSION['rol'])) {
     if ($_SESSION['rol'] == 0 ) {
       header('location:../../index.php?id=error');

     }elseif (isset($_POST['agregar'])) {
       include '../conexion.php';

        $nombre = $_POST['nombre'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $rol =$_POST['rol'];

        $sql = "INSERT INTO usuarios ( nombre ,userName ,password ,rol) VALUES (  :nombre , :userName , :password , :rol)";
        		$insertar = $conexion->prepare($sql);
        		$insertar->execute(array(':nombre'=>$nombre,
        			                     ':nombre'=>$nombre,
        			                     ':userName'=>$userName,
        			                     ':password'=>$password,
        			                     ':rol'=>$rol  ));

        		header('location:../../index.php?id=ok');
     }
  }



 ?>
