<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepcion de Datos</title>
</head>

<body>

    <?php


    echo "Han llegado los datos del cliente<br>";
    echo "Nombre: " . $_GET["nombre"] . ", Telefono: " . $_GET["telefono"] . ", Edad: " . $_GET["edad"];
    ?>


</body>

</html>