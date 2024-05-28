<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST'){
$usuario = $_POST['user'];
$password = $_POST['password'];

 $user_register = isset( $_SESSION['userRegister'] ) ? $_SESSION
['userRegister'] : null;
$user_register = isset( $_SESSION['userRegister'] ) ? $_SESSION
['userRegister'] : null;

//Verificacion de datos / Llenos
if( empty($usuario) or empty($password) ){
    echo 'Rellene completo el formulario';
}else{
    //echo $usuario . ' - ' . $password;
    if($usuario == $user_Register && $password == $passRegister){
    echo 'listo, iniciaste sesion 😍😍';
    header('location: user.php');
    }else{
    echo 'tu usuario no existe 😘😘';
         }
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
    <h1>Pagina de Inicio</h1>

<form action="index.php" method="POST">
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
    <a href="./registro.php">Registrate</a>
   
</body>

</html>