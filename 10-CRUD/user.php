<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <?php if (isset($_SESSION['userRegister'])) : ?>



        <h1> Bienvenido 🥺 <?php echo $_SESSION['userRegister']; ?> </h1>
        <a href="./cerrar.php">cerrar sesion </a>
        <a href="./index.php">Home</a>

    <?php else : ?>

        <h1>no has iniciado sesion</h1>
        <a href="./index.php">iniciar sesion</a>

    <?php endif ?>


    <form action="agregar_curso.php">

        <label for="titulocurso">Agregar curso</label>
        <input type="text" name="titulocurso" id="titulo curso" placeholder="Agregar curso">
        <label for="imagencurso">Agregar imagen</label>
        <input type="text" name="imagencurso" id="imagencurso" placeholder="Agregar imagen">
        <label for="descripcion">Descripcion imagen</label>
        <input type="text" name="descripcioncurso" id="descripcion" placeholder="descripcioncurso">
        <label for="Estudiantes">Estudiantes</label>
        <input type="text" name="Estudiantes" id="Estudiantes" placeholder="Estudiantes">

    </form>

</body>

</html>