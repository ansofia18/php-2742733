<?php session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $usuario = $_POST['user'];
    $password = $_POST['password'];

    $user_register = isset($_SESSION['userRegister']) ? $_SESSION['userRegister'] : null;
    $pass_register = isset($_SESSION['passRegister']) ? $_SESSION['passRegister'] : null;

    if (empty($usuario) or empty($password)) {
        echo 'rellene completo el formulario';
    } else {
        /*  echo $usuario . ' - ' . $password;
            if( $usuario == $user_register && $password == $pass_register){
                echo 'listo, iniciaste sesion 👻';
                header('location: user.php');
            }else{  echo 'Tu usuario no existe😴';} */

        //CONEXION CON LA BASE DE DATOS......
        //entrega final



        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root', '');
            echo "conexion OK";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare("SELECT * FROM userapp
            WHERE username = :user AND contraseña = :pass");

        $statement->execute(array(':user' => $usuario, ':pass' => $password));

        $result = $statement->fetchAll();

        if ($result) {
            $_SESSION['userRegister'] = $usuario;
            $_SESSION['passRegister'] = $password;
            header('location:user.php');
        } else {
            echo 'false';
        }
    }
}
//$_SESSION['pais'] = 'colombia';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="caja">

        <h1 class="inicio">Pagina de inicio</h1>

        <form class="info" action="index.php" method="POST">

        <label for="user">usuario</label>
                <br>

                <input class="barrau" type="text" placeholder="usuario" name="user">

                <div class="password">
                    <label for="password">contraseña</label>
                    <br>
                    <input class="barrau" type="text" placeholder="password" name="password">

                </div>
                <button class="sesion" type="submit">Inicio sesion</button>
                <a class="tboton" href="./registro.php">registrate</a>
        </form>


    </div>

<video width="100%" autoplay loop muted>
    <source src="./2235524_man_baking_making_3840x2160.mp4" type="video/mp4">
</video>


</body>

</html>