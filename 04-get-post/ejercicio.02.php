<?php

$horas = $_POST['horas'];
$valor = $_POST['valor'];
$resultado = $horas * $valor;


if($resultado >= 2200000){

    echo "hay retencion de fuente";
}
 else{

    echo "ho hay retencion";
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
    <form action="calcular_salario.php" method="POST">
<label for="horas">Horas trabajadas en el mes:</label>
<input type="number" id="horas" name="horas" required>
<label for="valor">Valor de horas</label>
<input type="number" id="valor" name="horas" required>
<button type="submit">Calcular</button>

    </form>
    
</body>
</html>