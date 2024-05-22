<?php

//leer: functions PHP w3School
echo "ejecutando.php";

//crear una función que me diga si es una persona mayor o menor de edad

function validarEdad($edad){
    if($edad >= 18){
        echo "<br> mayor de edad";
    } else if ($edad < 18){
        echo "<br> menor de edad";
    }
    else{
        echo "<br> no sé que decir";
    }
}

//Llamado de la función
//validarEdad(12);//???
validarEdad( isset($_POST['edad']) ? $_POST['edad'] : 12 );

//Operador ternario: abreviación del if, else
// condición ? true : f
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>
<body>
    
    <h1>Funciones PHP 🥵</h1>

    <form action="<?php $_SERVER["PHP_SELF"]"></form>
    
</body>
</html>