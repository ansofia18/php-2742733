<?php

//superglobal GET y POST

$userName = $_POST['username'];
$userEmail = $_POST['usermail'];

echo $userName;
echo '<br>';
echo $userEmail;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:<?php echo $_POST['color'] ?>;}
    </style>
</head>
<body>
    
<form action="index.php" method="post">
    <label for="username">username</label>
    <input id="username"type="text" placeholder="username..." name="username">
    <br>
    <label for="usermail" required>usermail</label>
    <input id="usermail" type="email" placeholder="usermail..." required name="usermail">
    <br>
    <label for="color">color</label>
    <input id="color" type="text" name="color" placeholder="color para el fondo...">
    <button type="submit">enviar</button>
</form>
</body>
