<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>La botiga d'informàtica i mòbils del centre d'Olot</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="shortcut icon" href="../../images/logo.jpg" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <form action="#" method="post">
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input autocomplete="off" type="text" class="form-control" name="userName" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="*********">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>


                <?php

      if(!isset($_SESSION['userName'])){
             include 'btn_enviar.php'; } ?>
         <?php if(!empty($enviar)): ?>
             <div class=" text-center alert alert-success">
                 <?php echo $enviar;  ?>
                 <?php echo $enviado; ?>
             </div>
        <?php endif; ?>
        <?php if(!empty($error)): ?>
            <div class=" alert alert-danger">
             <div class="heading ">
                 <?php echo $error ?>
             </div>
           </div>
        <?php endif; ?>

      <?php if (empty($enviar)): ?>
        <div class="text-block text-center my-3">
          <span class="text-small font-weight-semibold">¿No tienes cuenta ?</span>
          <a href="#" class="text-black text-small">Ponte en contacto con el administrador.</a>
        </div>

      <?php endif; ?>
              </form>
            </div>

            <p class="footer-text text-center">copyright © <?php echo date('Y'); ?>. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
</body>

</html>
