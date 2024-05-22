<?php

$edad = $_GET["edad"];

if ($edad >= 18){

    echo 'eres mayor de edad';
}

else if ($edad < 18){

    echo 'eres menor';
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
    <h1>Verifique su edad</h1>
    <form action="ejercicio.01.php">
    <label for="edad">Indrese su edad</label>
    <input type="number" id="edad" name="edad" required>
    <button type="submit">Verificar</button>

    </form>
    
</body>
</html>