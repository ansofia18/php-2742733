<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./registro.css">
</head>

<body>
    <div class="caja_registro">
        <h1 class="resgistrate">¡ Registrate !</h1>
        <p class="texto">Datos registrados, ya puedes iniciar sesion</p>

        <form action="registro.php" method="POST">

            <div class="usuario">

                <label for="user">Usuario</label>
                <br>
                <input class="barrau" type="text" placeholder="usuario" name="user">
            </div>
            <br>
            <div class="password">
                <label for="password">Contraseña</label>
                <br>
                <input class="barrau" type="text" placeholder="password" name="password">
            </div>
            <br>
            <div class="correo">
                <label for="mail">Correo</label>
                <br>
                <input class="barrau" type="email" placeholder="email" name="email">
            </div>
            <br>
            <br>

            <button class="registrar" type="submit">Registrate</button>


        </form>
    </div>
    <?php if (isset($_SESSION['userRegister'])) : ?>

        <p> <?php echo $_SESSION['userRegister'] . ' - ' . $_SESSION['passRegister'] ?> </p>
        <a href="index.php">iniciar sesion</a>
    <?php endif ?>

</body>

</html>