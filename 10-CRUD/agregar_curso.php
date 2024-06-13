<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'datos enviados';

    $tituloCurso = $_POST['tituloCurso'];
    $imageCurso = $_POST['imageCurso'];
    $descripcionCurso = $_POST['descripcionCurso'];
    $estudiantes = $_POST['estudiantesCurso'];

    $statement = $conexion->prepare("INSERT INTO `cursos`(`ID`, `imagen`, `curso`, `descripción`, `estudiantes`)
    VALUES (?,?,?,?,?)");

    $statement->execute(array($imageCurso,$tituloCurso,$descripcionCurso,$estudiantes));

    header('Location: user.php');
}
