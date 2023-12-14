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

    //Ahora lo hacemos con el menu y estilo
    // if ($menu === "S" && $estilo === 1) {
    //     include("menuS/S1.php");
    // }else if($menu === "S" && $estilo === 2){
    //     include("menuS/S2.php");
    // }else if($menu === "S" && $estilo === 3){
    //     include("menuS/S3.php");
    // }else if($menu === "I" && $estilo === 1){
    //     include("menuI/I1.php");
    // }else if($menu === "I" && $estilo === 2){
    //     include("menuI/I2.php");
    // }else if($menu === "I" && $estilo === 3){
    //     include("menuI/I3.php");
    // }
    
    //otra forma igual de valida para elegir el menu y estilo
    if ($menu === "S") {
        if ($estilo === 1) {
            include("menuS/S1.php");
        } else if ($estilo === 2) {
            include("menuS/S2.php");
        } else if ($estilo === 3) {
            include("menuS/S3.php");
        }
    } else if ($menu === "I") {
        if ($estilo === 1) {
            include("menuI/I1.php");
        } else if ($estilo === 2) {
            include("menuI/I2.php");
        } else if ($estilo === 3) {
            include("menuI/I3.php");
        }
    }

    //Ahora lo hacemos con el body
    if ($body === "BUSCAR") {
        include("body/BUSCAR.php");
    } elseif ($body === "REGISTRARSE") {
        include("body/REGISTRARSE.php");
    } elseif ($body === "IMAGEN") {
        include("body/IMAGEN.php");
    }


    // Vinculamos el css correspondiente según la opción seleccionada
    if ($color === "AZUL") {
        echo '<link rel="stylesheet" type="text/css" href="css/AZUL.css">';
    } elseif ($color === "ROJO") {
        echo '<link rel="stylesheet" type="text/css" href="css/ROJO.css">';
    } elseif ($color === "VERDE") {
        echo '<link rel="stylesheet" type="text/css" href="css/VERDE.css">';
    } elseif ($color === "AMARILLO") {
        echo '<link rel="stylesheet" type="text/css" href="css/AMARILLO.css">';
    }
    ?>
</head>

<body>

</body>

</html>