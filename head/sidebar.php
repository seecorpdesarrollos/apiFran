<?php
require '../conexion.php';

$sql = $conexion->prepare('SELECT * FROM menu');
$sql->execute();
$res=$sql->fetch();
 ?>


<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="../../images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name"><?php  echo $_SESSION['userName']; ?></p>
            <div>
              <small class="designation text-muted">
                <?php if ($_SESSION['rol'] == 1): ?>
                  Administrador
                <?php else: ?>
                  Usuario
                <?php endif; ?>
              </small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
        <button class="btn btn-success btn-block"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo usuario
          <i class="mdi mdi-plus"></i>
        </button>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../principal/index.php">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Principal</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <i class="menu-icon mdi mdi-content-copy"></i>
        <span class="menu-title">Headers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="../headers/fondo.php">Fondo pantalla</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../headers/titulos.php">Titulos fotos</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../menu/menu.php">
        <i class="menu-icon mdi mdi-sticker"></i>
        <span class="menu-title">Menú</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-restart"></i>
        <span class="menu-title">Páginas</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item">
              <a class="nav-link" href="../pagina1/pagina1.php"><?php echo $res['primero'] ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pagina2/pagina2.php"><?php echo $res['segundo'] ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pagina3/pagina3.php"><?php echo $res['tercero'] ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pagina4/pagina4.php"><?php echo $res['cuarto'] ?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pagina5/pagina5.php"><?php echo $res['quinto'] ?> </a>
            </li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
