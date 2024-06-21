<?php
require('header.php');
?>
<table class="table">
</table>
</thead>
<tbody>
<?php
$statement = $conexion->prepare("SELECT * FROM cursos");
$statement->execute();
$result = $statement->fetchALL();
foreach ($result as $item) { ?>
<tr>
    <th $cope="row"> <?php echo $item['id']?> </th>
    <td> <img src="<?php echo $item['imagen']?>" width="100%" alt=""> </td>
    <td> <?php echo $item['curso']?> </td>
    <td> <?php echo $item['descripcion']?> </td>
    <td> <?php echo $item['estudiantes']?> </td>
    <td class="d-flex gap-4"> 
        <a href=""><i class="bi bi-pencil-fill"></i></a>
        <a href=""><i class="bi bi-transh3-fill"></i></a>
    </td>
</tr>
<?php } ?>
}
</tbody>