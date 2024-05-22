<?php

$metros = $_POST['metros'];

$pared = $_POST['pared'];

$precio1 = $metros * 2000 + 15000;

$precio2 = $metros * 4000 + 15000;

if ($metros == "lisa"){
    echo "el precio de la pintada es $precio1";
} else {
    echo "el precio de la pintada es $precio2";
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

    <form action="ejersicio4.php" method="post">
        <label for="metros">metros</label>
        <input id="metros" type="number" placeholder="metros" name="metros">
        <br>

        <label for="pared">cotizacion</label>
        <input id="pared" type="texto" placeholder="lisa/nolisa" required name="pared">
        <br>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>