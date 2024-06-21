<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    echo 'datos enviados';
  $tituloCurso = $_POST['tituloCurso'];
  
  //Aqui capturamos datos de la imagen recibida
    $imageCurso = $_FILES['imageCurso']['top_name'];
    $nombreImagen = $_FILES['imageCurso']['name'];
    $tipoImagen = pathinfo($imageCurso, PATHINFO_EXTENSION);
    $sizeImg = $_FILES['imagenCurso']['size'];
    $directorio = "images/";}

    if($tipoImagen == 'jpg' or $tipoImagen == 'jpeg' or $tipoImagen == 'png'){
        //Hace un insert into de todos los datos recibidos excepto el de imagen
    $statement = $conexion->prepare("INSERT INTO `cursos`(`ID`, `imagen`, `curso`, `descripción`, `estudiantes`)
    VALUES (?,?,?,?,?)");
    $statement->execute(array($imageCurso,$tituloCurso,$descripcionCurso,$estudiantes)); 
    $idRegistro = $conexion->lastInsert();

    //Prepararla ruta para guardadr la imagen
    //imagen/46.jpg
    $ruta = $directorio . $idRegistro . '.' . $tipoImagen;

        $statement = $conexion->prepare("UPDATE cursos imagen = $ruta WHERE id = $idRegistro");
        $statement->execute();

        if(move_uploaded_file($imageCurso, $ruta)){
            $_SESSION['mensaje'] = 'Curso agregada exitosamente';
            $_SESSION['color'] = 'success';

            header('location: user.php');
            
        }
 
    }


    echo"El archivo que subiste se llama" . $nombreImagen . "<br>";
    echo"El formato de tu imagen es" . $tipoImagen;

    $descripcionCurso = $_POST['descripcionCurso'];
    $estudiantes = $_POST['estudiantesCurso'];

    $statement = $conexion->prepare("INSERT INTO `cursos`(`ID`, `imagen`, `curso`, `descripción`, `estudiantes`)
    VALUES (?,?,?,?,?)");
   $statement->execute(array($imageCurso,$tituloCurso,$descripcionCurso,$estudiantes));
 

    $_SESSION['mensaje'] = 'Curso agregada exitosamente';
    $_SESSION['color'] = 'success';
    
    header('Location: user.php');
}

