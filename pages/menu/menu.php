

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
        <div class="content-wrapper">
           <div class="row">
             <div class="col-md-12">
               <div class="card">
                 <div class="card-block">
                   <ol class="breadcrumb alert alert-info">
                      <li class="breadcrumb-item active">Organización del menú.</li>
                   </ol>
                 </div>
                 <hr>

                 <form class="container"  method="post">

                   <div class="row">
                     <div class="col-md-2">
                       <div class="form-group">
                         <input type="text" required class="form-control" name="primero" aria-describedby="emailHelp" value="<?php echo $res['primero'] ?>" placeholder="Nombre del menú">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <input type="text" required class="form-control" name="segundo" aria-describedby="emailHelp" value="<?php echo $res['segundo'] ?>" placeholder="Nombre del menú">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <input type="text" required class="form-control" name="tercero" aria-describedby="emailHelp" value="<?php echo $res['tercero'] ?>" placeholder="Nombre del menú">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <input type="text" required class="form-control" name="cuarto" aria-describedby="emailHelp" value="<?php echo $res['cuarto'] ?>" placeholder="Nombre del menú">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <input type="text" required class="form-control" name="quinto" aria-describedby="emailHelp" value="<?php echo $res['quinto'] ?>" placeholder="Nombre del menú">
                       </div>
                     </div>
                     <div class="col-md-2">
                       <div class="form-group">
                         <input type="submit"  class="btn btn-outline-primary" name="guardar" aria-describedby="emailHelp" value="Cambiar">
                       </div>
                     </div>
                   </div>

                 </form>
               </div>

             </div>
           </div>
        </div>
        <div id="toast"><div id="img"><i class="far fa-laugh-beam"></i></div><div id="desc">Cambios Guardados!!</div></div>

        <?php if (isset($_GET['id'])): ?>
           <?php if ($_GET['id']== 'ok'): ?>
              <script>
              var x = document.getElementById("toast")
               x.className = "show";
                setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3500);
              </script>
           <?php endif; ?>
        <?php endif; ?>
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
