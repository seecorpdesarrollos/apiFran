

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
              <div class="card-body">
                  <div class="card-header">
                    Títulos de la imagen principal.
                 </div>
                 <div >
                   <iframe class="iframe" width="100%" frameborder="no" Scrolling="no" height="700" src="http://localhost/webFran/"></iframe>
                 </div>
                 <hr>
                 <form  method="post">
                 <div class="row">
                   <div class="col-md-4">
                     <div class="form-group row">
                       <div class="col-sm-12">
                         <input type="text" class="form-control" name="primero" required value="<?php echo $respuesta['primero'] ?>" />
                       </div>
                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group row">
                       <div class="col-sm-12">
                         <input type="text" class="form-control" name="segundo" required value="<?php echo $respuesta['segundo'] ?>" />
                       </div>
                     </div>
                   </div>
                   <div class="col-md-4">
                     <div class="form-group row">
                       <div class="col-sm-12">
                         <input type="text" class="form-control" name="tercero" required value="<?php echo $respuesta['tercero'] ?>" />
                       </div>
                     </div>
                   </div>
                   <div class="col-md-5"></div>
                   <div class="col-md-4">
                     <button type="submit" name="cambiar" class="btn btn-outline-primary">Cambiar</button>
                   </div>
                 </div>
               </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Flexbox container for aligning the toasts -->
          <div id="toast"><div id="img"><i class="far fa-laugh-beam"></i></div><div id="desc">Cambios Realizados...</div></div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <?php if (isset($_GET['id'])): ?>
           <?php if ($_GET['id']== 'ok'): ?>
              <script>
              var x = document.getElementById("toast")
               x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
              </script>
           <?php endif; ?>
        <?php endif; ?>

        <?php include '../../head/footer.php'; ?>
        <!-- partial -->
      </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
</body>

</html>
