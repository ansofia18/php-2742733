<?php session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'datos enviadoshbjhj';

    echo '<br>';
    $usuario = $_POST['user'];
    $password = $_POST['password'];
    $email = $_POST['email'];



    if (empty($usuario) or empty($password) or empty($email)) {
        echo 'rellene completo el formulario';
    } else {
        //echo $usuario . ' - ' . $password;
        $_SESSION['userRegister'] = $usuario;
        $_SESSION['passRegister'] = $password;
        $_SESSION['emailRegister'] = $email;

        //echo ' - variables de sesion guardadas🥶';
        //header('location: index.php');

        try {
            $conexion = new PDO("mysql: host=localhost; dbname=focaapp;", 'root', '');
            echo "conexion OK";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }



        $statement = $conexion->prepare("INSERT INTO `userapp`( `ID`, `username`, `correo`, `contraseña`) VALUES (NULL, :username, :pass ,:correo)");


        $statement->execute(array(":username" => $usuario, ":pass" => $password, ":correo" => $email));






        /* 
                foreach ($statement as $item) {
                    echo$item['ID'] . ' - '. $item['Nombre'] . '<br>'; */
    }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            background-color: pink;
        }

        .resgistrate {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

        }
    
        .texto{
          font-size:1.5rem ;
        }
    </style>
    <h1 class="resgistrate">¡ Registrate !</h1>
    <p class="texto">Datos registrados, ya puedes iniciar sesion</p>

    <form action="registro.php" method="POST">
        <label class="usuario"  for="user">Usuario</label>
        <br>
        <input type="text" placeholder="usuario" name="user">
        <br>
        <label class="for" for="password">Contraseña</label>
        <br>
        <input type="text" placeholder="password" name="password">
        <br>
        <label class="for" for="mail">Correo</label>
        <br>
        <input type="email" placeholder="email" name="email">
        <br>
        <br>
        <button type="submit">registrate</button>


    </form>

    <?php if (isset($_SESSION['userRegister'])) : ?>

        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] ?> </p>
        <a href="index.php">iniciar sesion</a>
    <?php endif ?>

</body>

</html>