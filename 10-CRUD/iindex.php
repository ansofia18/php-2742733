<?php require('conexion.php'); ?>
<?php require(''); ?>


<?php require('conexion.php'); ?>

<section id="cursos">
    <div class="container">
        <div class="row">
            <?php
            $statement = $conexion->prepare("SELECT * FROM cursos");
            $statement->execute();
            $result = $statement->fetchAll();

            print_r($result);

            foreach ($result as $item) { ?>
                <div class="col-3">
                    <a class="" href="product.php?id=<?php echo $item['id'] ?>"></a>
                    <div class="card" style="width: 18rem;">
                        <img src="<?php echo $item['imagen'] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['curso'] ?></h5>
                            <p class="card-text"><?php echo $item['descripcion'] ?></p>
                            <div><i class="bi bi-people-fill"></i><span><?php echo $item['estudiantes'] ?></span>

                            </div>
                        </div>

                    <?php } ?>
                    </div>

                </div>

</section>