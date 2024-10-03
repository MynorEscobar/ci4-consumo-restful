<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consumo</title>
</head>
<body>
    <?php 
        foreach($datos as $dato):
            echo $dato['nombre'];
    ?>
        
    <?php
        endforeach;
    ?>
</body>
</html>