<?php


$numero1 = $_POST['numero1'];

$numero2 = $_POST['numero2'];

$numero3 = $_POST['numero3'];

$mayor = $numero1;

if ($numero2 > $mayor) {
    $mayor = $numero2;
}

if ($numero3 > $mayor) {
    $mayor = $numero3;
    echo "El mayor es: ". $mayor;
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

    <form action="calcular_salario.php" method="post">
        <label for="numero1">primer numero</label><br>
        <input type="number" id="numero1" name="numero1" required><br>

        <label for="numero2">segundo numero</label><br>
        <input type="number" id="numero2" name="numero2" required><br>

        <label for="numero3">tercer numero</label><br>
        <input type="number" id="numero3" name="numero3" required><br>


        <button type="submit">Calcular</button>
    </form>


</body>
</html>