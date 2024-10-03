<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consumo</title>
</head>

<body>
    <h1>Planes</h1>


    <?php
    foreach ($data as $plan):
    ?>



        <div class="card" style="width: 18rem;">
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



</body>

</html>