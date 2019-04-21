
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
                       <li class="breadcrumb-item active">Página de <?php echo $res['tercero'] ?>.</li>
                    </ol>
                  </div>
                  <hr>
         <form class=""  method="post" enctype="multipart/form-data">
           <div class="row">
             <div class="col-md-4"></div>
             <div class="col-md-8">
               <h1><?php echo $res['tercero']; ?></h1>
             </div>
             <div class="col-md-3"></div>
             <div class="col-md-4">
               <input type="text" class="form-control" name="subtitulo" value="<?php echo $pagi1['subtitulo'] ?>">
             </div>
             <div class="col-md-4">
               <input type="submit" class="btn btn-primary" name="tituloChange" value="Cambiar">
             </div>

           </div>
           <br><br>
           <br><br>
           <?php if (isset($_GET['id'])): ?>
              <?php if ($_GET['id']== 'error'): ?>
             <div class="alert alert-danger">
               <?php echo $error; ?>
             </div>
           <?php endif; ?>
           <?php endif; ?>
         </form>

         <ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
 <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Primero</a>
</li>
<li class="nav-item">
 <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Segundo</a>
</li>
<li class="nav-item">
 <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Tercero</a>
</li>
<li class="nav-item">
 <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Cuarto</a>
</li>
</ul>

<div class="tab-content">
<div class="tab-pane active container" id="home" role="tabpanel" aria-labelledby="home-tab">
<hr>
  <br>
   <form class=""  method="post" enctype="multipart/form-data">
       <div class="row">
         <div class="col-md-4">
           <div class="form-group">
    <label for="exampleFormControlFile1">Seleccione una foto</label>
    <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
  </div>
         </div>
         <div class="col-md-2">
           <div class="form-group">
            <label for="exampleInputPassword1">Título 1</label>
            <input required type="text" name="titulo1" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi1['titulo1']; ?>">
         </div>
         </div>
         <div class="col-md-2">
           <div class="form-group">
            <label for="exampleInputPassword1">Título 2</label>
            <input required type="text" name="titulo2" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi1['titulo2']; ?>">
         </div>
         </div>
         <div class="col-md-4">
           <div class="form-group">
            <label for="exampleFormControlTextarea1">Descripción de la foto</label>
           <textarea required name="descFoto" class="form-control" id="exampleFormControlTextarea1" rows="5">
            <?php echo $pagi1['descFoto']; ?>
           </textarea>
           </div>
         </div>
         <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block" name="primero">Guardar</button>
         </div>
       </div>
       <br>
   </form>
</div>
<!--segundo formulario  -->
<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <hr>
    <br>
     <form class=""  method="post" enctype="multipart/form-data">
         <div class="row">
           <div class="col-md-4">
             <div class="form-group">
      <label for="exampleFormControlFile1">Seleccione una foto</label>
      <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
    </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
              <label for="exampleInputPassword1">Título 1</label>
              <input required type="text" name="titulo1" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi2['titulo1']; ?>">
           </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
              <label for="exampleInputPassword1">Título 2</label>
              <input required type="text" name="titulo2" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi2['titulo2']; ?>">
           </div>
           </div>
           <div class="col-md-4">
             <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción de la foto</label>
             <textarea required name="descFoto" class="form-control" id="exampleFormControlTextarea1" rows="5">
              <?php echo $pagi2['descFoto']; ?>
             </textarea>
             </div>
           </div>
           <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-block" name="segundo">Guardar</button>
           </div>
         </div>
         <br>
     </form>
</div>
<div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
  <hr>
    <br>
     <form class=""  method="post" enctype="multipart/form-data">
         <div class="row">
           <div class="col-md-4">
             <div class="form-group">
      <label for="exampleFormControlFile1">Seleccione una foto</label>
      <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
    </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
              <label for="exampleInputPassword1">Título 1</label>
              <input required type="text" name="titulo1" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi3['titulo1']; ?>">
           </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
              <label for="exampleInputPassword1">Título 2</label>
              <input required type="text" name="titulo2" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi3['titulo2']; ?>">
           </div>
           </div>
           <div class="col-md-4">
             <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción de la foto</label>
             <textarea required name="descFoto" class="form-control" id="exampleFormControlTextarea1" rows="5">
              <?php echo $pagi3['descFoto']; ?>
             </textarea>
             </div>
           </div>
           <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-block" name="tercero">Guardar</button>
           </div>
         </div>
         <br>
     </form>
</div>
<div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">
  <hr>
    <br>
     <form class=""  method="post" enctype="multipart/form-data">
         <div class="row">
           <div class="col-md-4">
             <div class="form-group">
      <label for="exampleFormControlFile1">Seleccione una foto</label>
      <input type="file" name="imagen" class="form-control-file" id="exampleFormControlFile1">
    </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
              <label for="exampleInputPassword1">Título 1</label>
              <input required type="text" name="titulo1" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi4['titulo1']; ?>">
           </div>
           </div>
           <div class="col-md-2">
             <div class="form-group">
              <label for="exampleInputPassword1">Título 2</label>
              <input required type="text" name="titulo2" class="form-control" id="exampleInputPassword1" value="<?php echo $pagi4['titulo2']; ?>">
           </div>
           </div>
           <div class="col-md-4">
             <div class="form-group">
              <label for="exampleFormControlTextarea1">Descripción de la foto</label>
             <textarea required name="descFoto" class="form-control" id="exampleFormControlTextarea1" rows="5">
              <?php echo $pagi4['descFoto']; ?>
             </textarea>
             </div>
           </div>
           <div class="col-md-12">
              <button type="submit" class="btn btn-primary btn-block" name="cuarto">Guardar</button>
           </div>
         </div>
         <br>
     </form>
</div>
</div>

<script>
$(function () {
 $('#myTab li:last-child a').tab('show')
})
</script>
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
