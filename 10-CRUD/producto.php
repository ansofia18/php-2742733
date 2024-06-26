<?php require('conexion.php'); ?>

<?php

if (isset($_GET['id'])){
    $id = $_GET['id'];

    $statement = $conexion->prepare("SELECT * FROM cursos WHERE id = '$id'");
    $statement->execute();

    $result = $statement->fetch();


}else{
    header("Location: index.php");
}


?>

<?php require('header.php'); ?>

<div class="conteiner">
    <div class="row">
        <div class="col-6">
            <img class="w-100" src="<?php echo $result['imagen'] ?>" alt="">
        </div>
        <div class="col-6">
            <h1><?php echo $result['titulo'] ?></h1>
            <p><?php echo $result['descripcion'] ?></p>
            <p><?php echo $result['estudiantes'] ?></p>
            <button class="btn btn-success" > Inscribete </button>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>