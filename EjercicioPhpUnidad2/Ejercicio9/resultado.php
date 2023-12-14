<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado final</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

    <?php

    //Ahora lo hacemos con el encabezado
    if ($encabezado === "encabezado1") {
        include("encabezado1.php");
    } elseif ($encabezado === "encabezado2") {
        include("encabezado2.php");
    } elseif ($encabezado === "encabezado3") {
        include("encabezado3.php");
    }

    //Ahora lo hacemos con el cuerpo
    if ($cuerpo === "cuerpo1") {
        include("cuerpo1.php");
    } elseif ($cuerpo === "cuerpo2") {
        include("cuerpo2.php");
    } elseif ($cuerpo === "cuerpo3") {
        include("cuerpo3.php");
    }


    //Ahora lo hacemos con el pie
    if ($pie === "pie1") {
        include("pie1.php");
    } elseif ($pie === "pie2") {
        include("pie2.php");
    } elseif ($pie === "pie3") {
        include("pie3.php");
    }

    // Vinculamos el css correspondiente según la opción seleccionada
    if ($estilo === "estilo1") {
        echo '<link rel="stylesheet" type="text/css" href="estilo1.css">';
    } elseif ($estilo === "estilo2") {
        echo '<link rel="stylesheet" type="text/css" href="estilo2.css">';
    } elseif ($estilo === "estilo3") {
        echo '<link rel="stylesheet" type="text/css" href="estilo3.css">';
    }
    ?>
</head>

<body>

</body>

</html>