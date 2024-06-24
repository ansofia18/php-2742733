<?php

require('conexion.php');
require('header.php');

?>

<?php if (isset($_SESSION['userRegister']))   ?>

<h1>AGREGAR CURSO</h1>

<hr>

<?php if (isset($_SESSION['mensaje'])) {  ?>

  <div class="row">
    <div class="col">
      <div class="alert alert-<?php echo $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
        <p class="mb-0"><?php echo $_SESSION['mensaje'] ?></p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>

<?php } ?>


  <form action="agregar_curso.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3" style="width: 12rem;">
      <label for="titulo_curso" class="form-label">Titulo curso</label>
      <input type="text" name="titulo_curso" class="form-control" id="titulo_curso" aria-describedby="emailHelp" placeholder="agregar">
    </div>
    <div class="mb-3" style="width: 25rem; position:relative; left: 14rem; bottom: 5.4rem;">
      <label for="imagen_curso" class="form-label">Imagen</label>
      <input type="file" name="imagen_curso" class="form-control" id="imagen_curso" placeholder="agregar">
    </div>
    <div class="mb-3" style="width: 12rem; position:relative; left: 41rem; bottom: 10.8rem;">
      <label for="descripcion" class="form-label">Descripcion curso</label>
      <input type="text" name="descripcion_curso" class="form-control" id="descripcion" placeholder="descripcion">
    </div>
    <div class="mb-3" style="width: 20rem; position:relative; left: 55rem; bottom: 16.2rem;">
      <label for="estudiantes" class="form-label" >Estudiantes</label>
      <input type="text" name="estudiantes" class="form-control" id="estudiantes" placeholder="estudiantes">
    </div>
    <input type="submit" value="Registrar_curso" style="position:relative; bottom: 15rem">
  </form>



<table class="table" style="position: relative; bottom: 15rem;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Curso</th>
      <th scope="col">Imagen</th>
      <th scope="col">Descripcion del curso</th>
      <th scope="col">Estudiantes</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<?php require('footer.php'); ?>
