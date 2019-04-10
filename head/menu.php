<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html">
      <img src="../../images/logo.svg" alt="logo" />
    </a>
    <a class="navbar-brand brand-logo-mini" href="index.html">
      <img src="../../images/logo-mini.svg" alt="logo" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">

    <ul class="navbar-nav navbar-nav-right">

      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text">Hola, <?php echo ' ' . $_SESSION['userName']; ?> !</span>
          <img class="img-xs rounded-circle" src="../../images/faces/face1.jpg" alt="Profile image">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item p-0">
            <div class="d-flex border-bottom">
              <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
              </div>
              <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                <i class="mdi mdi-account-outline mr-0 text-gray"></i>
              </div>
              <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
              </div>
            </div>
          </a>
          <a href="#" class="dropdown-item mt-2"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
          <i class="fas fa-user-plus"> </i>  Agregar usuario
          </a>
          <a class="dropdown-item"></a>
          <a href="../../php/salir.php" class="dropdown-item">
        <i class="fas fa-sign-out-alt"> </i>  Cerrar Sesión
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>
<!-- partia -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="../../php/usuarios/addUsuario.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
           <label for="exampleInputEmail1">Nombre usuario</label>
           <input type="text" name="userName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el nombre de usuario">
          </div>
          <div class="form-group">
           <label for="exampleInputEmail1">Nombre y Apellido</label>
           <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su nombre y apellido">
          </div>
          <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          <div class="form-group">
   <label for="exampleFormControlSelect1">Tipo de usuario</label>
   <select name="rol" class="form-control" id="exampleFormControlSelect1">
     <option value="0">Usuario</option>
     <option value="1">Administrador</option>
   </select>
 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
        <button type="submit" name="agregar" class="btn btn-primary">Agregar usuario</button>
      </div>
    </form>
    </div>
  </div>
</div>
