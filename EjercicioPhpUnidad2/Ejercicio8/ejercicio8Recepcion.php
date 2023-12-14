<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</head>

<body>
    <?php

    //Lo unimos a global con un include
    include "global.php";
    // Comprobamos si se enviaron los datos del formulario
    if (isset($_POST["lista_cartas"])) {


        //Obtenemos las cartas elegidas del formulario
        $cartasSeleccionadas = $_POST["lista_cartas"];

        //Creamos esto para poder buscar la posicion del palo de la carta y más adelante sacar el color
        $PaloPrimeraCarta = $nombre_palo[explode("-", $cartasSeleccionadas[0])[1]];

        //variable para ver el color
        $esColor = true;

        // Iteramos sobre las cartas seleccionadas y mostramos las imágenes
        foreach ($cartasSeleccionadas as $carta) {
            $valores = explode("-", $carta);
            $valorCarta = $nombre_carta[$valores[0]];
            $paloCarta = $nombre_palo[$valores[1]];


            // Agregar declaraciones echo para depuración
            echo "<br><br>Carta elegida: " . $valorCarta . " de " . $paloCarta;


            // Añadimos las imágenes seleccionadas
            echo "<br><img src='img/" . $valorCarta . $paloCarta . ".png' alt='Imagen de la carta'>";


            //Comprobamos si la jugada es color
            if ($paloCarta != $PaloPrimeraCarta) {
                $esColor = false;
                echo $PaloPrimeraCarta . "-" . $paloCarta;
            }

        }

        //Con este if comprobamos si la funcion es de color o no
        if ($esColor) {
            echo "<br>La jugada es de color";
        }else{
            echo "<br>La jugada no es de color";
        }
    }


    ?>


</body>


</html>