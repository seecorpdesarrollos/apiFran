

<?php require '../../head/head.php'; ?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php require '../../head/menu.php'; ?>
 <!-- -->
    <div class="container-fluid page-body-wrapper">
      <!-- insertamos el sadibar -->
      <?php require '../../head/sidebar.php'; ?>
      <!-- fin de sidebar -->

      <div class="main-panel">
        <div class="content-wrapper row">

          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-header">
   <img class="card-img-top" src="<?php echo '/webFran/img/archivosSubidos/fondo-bg.jpg' ?>"  alt="Card image cap" height="300">
 </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data" >
                      <input type="file" name="imagen" class="btn btn-outline-danger su">
                      <input type="submit" class="btn btn-danger subir" name="subirImagen" value="Cambiar foto">
                </form>
                <?php if (!empty($error)): ?>
                  <?php echo $error; ?>
                <?php endif; ?>
                <?php if (!empty($exito)): ?>
                  <?php echo $exito; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php include '../../head/footer.php'; ?>
        <!-- partial -->
      </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
</body>

</html>
