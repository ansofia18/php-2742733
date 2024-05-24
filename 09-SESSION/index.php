<?php

//&session_start(); //Inicializa uja sesion

//$_SESSION['nombre'] = 'Wendy';
//$_SESSION['pais'] = 'arabia';
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

<form action="registro.php" method="POST">
<br>
<label for="user">user</label>
<input type="user" placeholder="user" name="user">
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
    <a href="./user.php">User page</a>
    <a href="./cerrar.php">cerrar</a>
</body>

</html>