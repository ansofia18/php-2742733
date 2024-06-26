<?php

require('conexion.php');
require('header.php')

?>



<div class="container">
    <h2>Formulario de Registro - Cursos de Reposteria</h2>

    <?php if (isset($_SESSION['mensaje'])) { ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-<?php echo $_SESSION['color'] ?>  alert-dismissible fade show" role="alert">
                    <p class="mb-0"> <?php echo $_SESSION['mensaje'] ?> </p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php session_unset();
    } ?>

    <form action="agregar_curso.php" method="post" enctype="multipart/form-data">
        <label for="Imagen">Imagen...</label>
        <input type="file" id="Imagen" name="Imagen" required>

        <label for="Titulo">Titulo</label>
        <input type="text" id="Titulo" name="Titulo" required>

        <label for="Descripcion">Descripcion...</label>
        <input type="text" id="Descripcion" name="Descripcion" required>

        <label for="Estudiantes">Estudiantes...</label>
        <input type="text" id="Estudiantes" name="Estudiantes" required>

        <button type="submit">Registrarse</button>
    </form>
</div>


<h2> Cursos de Reposteria</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Estudiantes</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $statement = $conexion->prepare("SELECT * FROM cursos");
        $statement->execute();
        $result = $statement->fetchAll();

        foreach ($result as $item) { ?>
            <tr>
                <td scope="row"><?php echo $item['id'] ?></td>
                <td> <img src="<?php echo $item['imagen'] ?>" width="100" alt=""></td>
                <td><?php echo $item['titulo'] ?></td>
                <td><?php echo $item['descripcion'] ?></td>
                <td><?php echo $item['estudiantes'] ?></td>
                <td class="d-flex gap-4">
                    <a class="text-success" href="editar_curso.php?id=<?php echo $item['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class="text-danger" href="borrar_curso.php?id=<?php echo $item['id'] ?>"><i class="bi bi-trash2-fill"></i></a>
                </td>
            </tr>
        <?php } ?>


    </tbody>
</table>

<button link="index.php" type="button" class="boton-tabla"><a href="./index.php">Administra</a></button>

<?php require('footer.php') ?>