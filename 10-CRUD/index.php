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
            <div class="usuario">
                <label for="user">Usuario</label>
                <br>

                <input class="barrau" type="text" placeholder="usuario" name="user">
            </div>
            <div class="password">
                <label for="password">Contraseña</label>
                <br>
                <input class="barrau" type="text" placeholder="password" name="password">

            </div>
            <button class="sesion" type="submit">Inicio sesion</button>
            <a class="tboton" href="./registro.php">Registrate</a>


        </form>


    </div>
</body>

</html>