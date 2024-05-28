    <?php

    if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    $usuario = $_POST['user'];
    $password = $_POST['password'];
   
    
    //Verificacion de datos / Llenos
    if( empty($usuario) or empty ($password) ){
        echo 'Rellene completo el formulario';
    }else{
        echo $usuario . ' - ' . $password;
        $_SESSION['userRegistre'] = $usuario;
        $_SESSION['passRegistre'] = $password;
        

        //echo ' - variables de sesion guardadas😒
        //header('location: index.php');
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
    <h1>Registrate</h1>

    <form action="registro.php" method="POST">
    <br>
    <label for="user">user</label>
    <input type="text" placeholder="user" name="user">
    <br>
    <br>
    <label for="password">password</label>
    <input type="password" placeholder="password" name="password">
    <br>
    <br>
    <button type="submit">Registro</button>
    <br>
    <br>
    </form>
    <?php if( isset($_SESSION['userRegister'])):?>
        <p>Datos registrado, ya puedes iniciar</p>
        <p> <?php echo $_SESSION['userRegister']. ' - ' . $_SESSION  ['passRegister'];?> </p>
        <a href="index.php">Iniciar sesión</a>
    <?php endif ?>
</body>
</html>