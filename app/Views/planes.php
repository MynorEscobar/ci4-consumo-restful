<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consumo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Planes</h1>

    <div class="container text-center">
        <div class="row">


            <?php
            foreach ($data as $plan):
            ?>
                <div class="card col-3" style="width: 18rem;">
                    <img src="https://cdn-icons-png.freepik.com/512/4423/4423898.png" class="card-img-top" alt="telefono">
                    <div class="card-body">
                        <h5 class="card-title"><?= $plan['nombre']; ?></h5>
                        <p class="card-text">
                            Pago mensual:<?= $plan['pago_mensual']; ?>
                            <br>
                            Minutos:<?= $plan['cantidad_minutos']; ?>
                            <br>
                            Mensajes:<?= $plan['cantidad_mensajes']; ?>

                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>

            <?php
            endforeach;
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</body>

</html>