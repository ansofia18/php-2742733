<?php
require('conexion.php');
require('header.php');
?>

<div class="container">
    <h2>Formulario de Registro - Recetas de Pastelería</h2>

    <?php if (isset($_SESSION['mensaje'])) { ?>
        <div class="row">
            <div class="col">
                <div class="alert alert-<?php echo $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
                    <p class="mb-0"><?php echo $_SESSION['mensaje'] ?></p>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php session_unset();
    } ?>

    <form action="agregar_receta.php" method="post" enctype="multipart/form-data">
        <label for="Imagen">Imagen...</label>
        <input type="file" id="Imagen" name="Imagen" required>

        <label for="Nombre">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" required>

        <label for="Descripcion">Descripción...</label>
        <textarea id="Descripcion" name="Descripcion" rows="4" required></textarea>

        <label for="Ingredientes">Ingredientes...</label>
        <textarea id="Ingredientes" name="Ingredientes" rows="4" required></textarea>

        <button type="submit">Registrar Receta</button>
    </form>
</div>

<h2>Tabla de Recetas de Pastelería</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Ingredientes</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $statement = $conexion->prepare("SELECT * FROM recetas");
        $statement->execute();
        $result = $statement->fetchAll();

        foreach ($result as $receta) { ?>
            <tr>
                <td><?php echo $receta['id'] ?></td>
                <td><img src="<?php echo $receta['imagen'] ?>" width="100" alt=""></td>
                <td><?php echo $receta['nombre'] ?></td>
                <td><?php echo $receta['descripcion'] ?></td>
                <td><?php echo $receta['ingredientes'] ?></td>
                <td>
                    <a class="text-success" href="editar_receta.php?id=<?php echo $receta['id'] ?>"><i class="bi bi-pencil-fill"></i></a>
                    <a class="text-danger" href="borrar_receta.php?id=<?php echo $receta['id'] ?>"><i class="bi bi-trash2-fill"></i></a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<button type="button" class="boton-tabla"><a href="./index.php">Volver a la página principal</a></button>

<?php require('footer.php'); ?>
