<?php

try {
    $conexion = new PDO("mysql: host=localhost; dbname=colegio", 'root', '');
    echo "conexion OK";
} catch (PDOException $e) {
    echo  "Error: " . $e->getMessage();
}

$nombre = 'Alberto';
$estado = 'Soltero';
$materia = 'Deporte';
$edad = 'edad';
$documento = 1356527;

//Vamos a preparar una sentecia SQL y la guardamos en una variable

$statement = $conexion->prepare("INSERT INTO `profesores`(`ID`, `Nombre`, `Edad`, `Estado civil`, `Materia`,
 `Documento`) VALUES ('7','camilo','20','soltero','ingles','127454');");



//ejecutar al statememt
$statement->execute();
$statement->execute(array(":nombre"=>$nombre,":edad"=>$edad,":estado"=>$estado,":materia"=>$materia,":documento"=>$documento));
//fetch() regresa solo un resultado       feachALL() regresa todos los resultados
$statement = $statement->fetchAll();

//print_r($statement);

foreach ($statement as $item) {
    echo $item['ID'] . ' - ' . $item['Nombre'] . '<br>';
}
