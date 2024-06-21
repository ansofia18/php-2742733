<?php require ('conexion.php');
if( isset($_GET['id'])){
    $id= $_GET['id'];

    #seleccionamos el registro del curso recibidopor ID
    $statement = $conexion->


}
if(isset($_POST['actualizar_curso'])){
    #echo "<h1>formulario de actualizacion enviado</h1>";
    $id = $_GET['id'];
    $tituloActualizado = $_POST['titulo_curso'];
    $descripcionActualizada = $_POST['descripcion'];
    $estudiantesActualizada = $_POST['estudiantes'];

    $statement = $conexion->prepare("UPDATE 'curso' SET 'curso'=$tituloActualizado,'descrpcion')
}

?>

<?php require('header.php');?>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="editar_curso.php">
                <label for="titulo">Titulo del curso</label>
                <input class="form-control" type="text" name="titulo_curso"
                value="<?php echo $titulo ?>">
                
            </form>
        </div
    </div>
</div>
<?php