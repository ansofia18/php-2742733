<?php require('conexion.php')?>

<?php 
if( isset($_GET['id'])){
    $id = $_GET['id'];
    
    $statement = $conexion->prepare("SELECT * FROM cursos WHERE id ='$id'");
    $statement->execute();
}
    else{
        header("location: index.php");
    }

?>
<?php require('header.php')?>
<div class="row">
    <div class="col-6">
        <img class="w-100" src="<?php echo $result['imagen']?>" alt="">
    </div>
    <div class="col-6">
    <h1>Titulo del curso</h1>
    <p>Descripcion del curso</p>
    <p>Estudiantes: 23</p>
    <button class="btn btn-success">Inscribete</button>
    </div>

</div>

<?php require('footer.php')?>