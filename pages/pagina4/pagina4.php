
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
                       <li class="breadcrumb-item active">Página de <?php echo $res['cuarto'] ?>.</li>
                    </ol>
                  </div>
                  <hr>
         <form class=""  method="post" enctype="multipart/form-data">

           <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-8">
               <h1><?php echo $res['cuarto']; ?></h1>
             </div>
             <div class="col-md-2"></div>
             <div class="col-md-4">
               <input required type="text" class="form-control" name="subtitulo" value="<?php echo $pagi22['subtitulo'] ?>">
             </div>
             <div class="col-md-4">
               <textarea required name="desc" rows="5" cols="80" class="form-control">
                 <?php echo $pagi22['desc1'] ?>
               </textarea>
             </div>

           </div>
           <br><br>
           <div class="row container">
             <div class="col-md-2">
               <label for="exampleFormControlFile1">Foto del primero </label>
                <input type="file" name="imagen" class="form-control" >
             </div>
             <div class="col-md-2">
                <label for="exampleFormControlFile1">Nombre y apellido</label>
                <input type="text"  name="nombre" class="form-control" required value="<?php echo $pagi22['nombre']; ?>">
             </div>
             <div class="col-md-2">
                <label for="exampleFormControlFile1">Cargo ocupado </label>
                <input type="text" name="cargo" class="form-control" required value="<?php echo $pagi22['cargo']; ?>">
             </div>
             <div class="col-md-2">
                <label for="exampleFormControlFile1">Foto del segundo </label>
                <input type="file" name="imagen2" class="form-control" >
             </div>
             <div class="col-md-2">
               <label for="exampleFormControlFile1">Nombre y apellido</label>
                <input type="text"  name="nombre2" class="form-control" required value="<?php echo $pagi2['nombre']; ?>">
             </div>
             <div class="col-md-2">
               <label for="exampleFormControlFile1">Cargo ocupado </label>
                <input type="text" name="cargo2" class="form-control" required value="<?php echo $pagi2['cargo']; ?>">
             </div>
           </div>

           <br><br>
           <div class="row">
             <div class="col-md-12">
               <button type="submit" class="btn btn-primary btn-block" name="pagina4">Cambiar </button>
             </div>
             <br><br>
           </div>
           <?php if (isset($_GET['id'])): ?>
              <?php if ($_GET['id']== 'error'): ?>
             <div class="alert alert-danger">
               <?php echo $error; ?>
             </div>
           <?php endif; ?>
           <?php endif; ?>
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

         <?php if (isset($_GET['id'])): ?>
            <?php if ($_GET['id']== 'eliminado'): ?>
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

         <!--modal para eliminar productos  -->
         <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-lg">
         <div class="modal-content container">
           <table class="table table-bordered table-sm">
             <thead>
               <tr>
                 <td>titulo</td>
                 <td>subTitulo</td>
                 <td>foto</td>
                 <td>Eliminar</td>
               </tr>
             </thead>
             <tbody>
               <?php foreach ($pagi2 as $foto): ?>
                 <tr>
                   <td><?php echo $foto['subtitulo'];  ?></td>
                   <td><?php echo $foto['subtitulo1'];  ?></td>
                   <td> <img src="http://localhost/webFran/<?php echo $foto['foto'] ?>" alt="" width="200"></td>
                   <td> <a href="../../php/pagina2/delete.php?idEliminar=<?php echo $foto['id']; ?>"><i class="fas fa-trash btn btn-danger" onclick="return confirm('¿Estas seguro?');">   </i></a> </td>
                 </tr>
               <?php endforeach; ?>

             </tbody>
           </table>
         </div>
       </div>
     </div>
 </body>

 </html>
