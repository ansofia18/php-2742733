<?php require('conexion.php'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Repostería</title>
    <link rel="stylesheet" href="styles.css"> <!-- Archivo de estilos personalizados -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-bottom: 30px;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/pastel_chocolate.png" class="d-block w-100" alt="Pastel de Chocolate">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/tarta_fresas.png" class="d-block w-100" alt="Tarta de Fresas">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/galletas_mantequilla.png" class="d-block w-100" alt="Galletas de Mantequilla">
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
    </div>

    <div class="container">
        <div class="row">
            <?php
            $statement = $conexion->prepare("SELECT * FROM productos_reposteria");
            $statement->execute();
            $result = $statement->fetchAll();

            foreach ($result as $item) { ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="<?php echo $item['imagen'] ?>" class="card-img-top" alt="<?php echo $item['nombre'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['nombre'] ?></h5>
                            <p class="card-text"><?php echo $item['descripcion'] ?></p>
                            <p class="card-text fw-bold">$<?php echo $item['precio'] ?></p>
                            <a href="producto.php?id=<?php echo $item['id'] ?>" class="btn btn-primary stretched-link">Ver más</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>