<?php require('conexion.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div>
        <div id="carouselExampleIndicators" class="carousel slide" style="margin-bottom: 30px;">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <div class="container">

        <div class="container text-center">
            <div class="row align-items-center">
                <?php
                $statement = $conexion->prepare("SELECT * FROM cursos");
                $statement->execute();
                $result = $statement->fetchAll();


                foreach ($result as $item) { ?>

                    <div class="col">
                        <a class="no-link" href="producto.php?id=<?php echo $item['id'] ?>">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo $item['imagen'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"> <?php echo $item['titulo'] ?> </h5>
                                    <p class="card-text"> <?php echo $item['descripcion'] ?> </p>
                                    <div><i class="bi bi-people-fill"></i><span><?php echo $item['estudiantes'] ?></span></div>
                                </div>
                        </a>

            
                    </div>
            </div>

        <?php }  ?>

        <button class="boton" link="curso.php" type="button" ><a href="./curso.php">Administra</a></button>

        </div>
    </div>

    </div>
    <div class="container text-center" style="margin-top: 30px; background-color: white;">
        <div class="row align-items-center">
            <div class="col">

                <h1>REPOSTERIA</h1>

                Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nisi quidem vero iusto fugit dignissimos non accusamus soluta autem perspiciatis aperiam magnam sapiente culpa incidunt, quod nemo facere cupiditate eos? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti qui assumenda omnis veritatis alias, temporibus quod doloribus aspernatur consequuntur dicta perspiciatis, expedita corporis suscipit eum, unde eaque aliquam at repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni ut a ducimus repudiandae voluptatem nihil excepturi facere, temporibus, at perferendis cupiditate consectetur saepe, animi hic consequuntur placeat dolore quae minus.
            </div>
            <div class="col" style="padding: 20px;">
                <img src="./img/" alt="">
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>