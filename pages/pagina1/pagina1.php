
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
                       <li class="breadcrumb-item active">Página de <?php echo $res['primero'] ?>.</li>
                    </ol>
                  </div>
                  <hr>
         <form class=""  method="post">

           <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-8">
               <h1><?php echo $res['primero']; ?></h1>
             </div>
             <div class="col-md-3"></div>
             <div class="col-md-4">

               <input type="text" class="form-control" name="subtitulo" value="<?php echo $pagi1['subtitulo'] ?>">
             </div>

           </div>
           <br><br>
           <div class="row text-center container">
               <div class="col-md-4">
                   <span class="fa-stack fa-4x">
           <i class="fas fa-circle fa-stack-2x text-warning"></i>
           <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
         </span>
                <input required class="form-control" type="text" name="titulo1" value=" <?php echo $pagi1['titulo1'] ?>">
                 <br>
                <input required class="form-control" type="text" name="desc1" value=" <?php echo $pagi1['desc1'] ?>">

               </div>
               <div class="col-md-4">
                   <span class="fa-stack fa-4x">
           <i class="fas fa-circle fa-stack-2x text-warning"></i>
           <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
         </span>
         <input required class="form-control" type="text" name="titulo2" value=" <?php echo $pagi1['titulo2'] ?>">
          <br>
         <input required class="form-control" type="text" name="desc2" value=" <?php echo $pagi1['desc2'] ?>">
               </div>
               <div class="col-md-4">
                   <span class="fa-stack fa-4x">
           <i class="fas fa-circle fa-stack-2x text-warning"></i>
           <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
         </span>
         <input required class="form-control" type="text" name="titulo3" value=" <?php echo $pagi1['titulo3'] ?>">
          <br>
         <input required class="form-control" type="text" name="desc3" value=" <?php echo $pagi1['desc3'] ?>">
               </div>
           </div>
           <br><br>
           <div class="row">
             <div class="col-md-12">
               <button type="submit" class="btn btn-outline-primary btn-block" name="pagina1">Editar cambios</button>
             </div>
             <br><br>
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
                 setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
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
