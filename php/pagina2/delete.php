<?php

require '../conexion.php';

if (isset($_GET['idEliminar'])) {
  $id = $_GET['idEliminar'];
  var_dump($id);
  $sql=$conexion->prepare('DELETE FROM pagina2 WHERE id = :id');
  if($sql->execute(array(':id'=>$id))){
    header('location:../../php/pagina2/pagina2.php?id=eliminado');

  }
}

 ?>
