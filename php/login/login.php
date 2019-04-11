<?php
  require '../conexion.php';
  $error='';
  $enviar='';
  $enviado ='';

  if (isset($_POST['submit'])) {

    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $sql = $conexion->prepare('SELECT * FROM usuarios WHERE userName = :userName AND password = :password');
    $sql->execute( array(':userName' => $userName ,
    ':password'=> $password ));
    $resultado = $sql->fetch();
    if ($resultado !== false) {
      $hoy = date('Y-m-d H:i:s');
      $sql=$conexion->prepare("UPDATE usuarios SET ultimaVez=:ultimaVez, hoy=:hoy WHERE idUser = :idUser");
      $sql->execute(array(
        ':ultimaVez'=>$resultado['hoy'],
        ':hoy'=>$hoy,
        ':idUser'=>$resultado['idUser']
    ));
      session_start();
      $_SESSION['userName'] = $resultado['nombre'];
      $_SESSION['rol'] = $resultado['rol'];
      $_SESSION['idUser'] = $resultado['idUser'];
      $enviar .=  'Bienvenido '. ucwords($resultado['nombre']);
      $enviar .= '<meta http-equiv="refresh" content="2;url=../principal/index.php">';
      $enviado .= '<center><i class="fas fa-spinner fa-spin  fa-fw"></i><br>';


    } else {
      $error .= '<li> Los Datos ingresados son Incorrecto </li>';

    }

  }





 require '../../pages/login/login.php';

 ?>
