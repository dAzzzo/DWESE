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
    // Comprobamos si se enviaron los datos del formulario
    if (isset($_POST["nombre1"]) && isset($_POST["nombre2"]) && isset($_POST["victorias"])) {
        $nombre1 = $_POST["nombre1"];
        $nombre2 = $_POST["nombre2"];
        $victorias = (int) $_POST["victorias"];


        echo "<br>¡Han llegado los datos de los jugadores!<br>";
        echo "<br>-> Nombre1: $nombre1";
        echo "<br>-> Nombre2: $nombre2";
        echo "<br>-> Número de Victorias: $victorias";


        $jugador1 = rand(1, 3);
        $jugador2 = rand(1, 3);


        // Arrays asociativos para mapear números a imágenes
         // define(DERECHA) = 1;
        //define(IZQUIERDA) = 0;
        $opciones = array(
            1 => ["piedraIzq.png", "piedraDer.png"],
            2 => ["papelIzq.png", "papelDer.png"],
            3 => ["tijeraIzq.png", "tijeraDer.png"]
        );




        // Juego hasta que uno de los jugadores alcance el número de victorias especificado
        $puntuacionJugador1 = 0;
        $puntuacionJugador2 = 0;


        while ($puntuacionJugador1 < $victorias && $puntuacionJugador2 < $victorias) {
            $jugadaJugador1 = $opciones[rand(1, 3)][0];
            $jugadaJugador2 = $opciones[rand(1, 3)][1];

            echo "<div>";
            echo "<img src='img/" . $jugadaJugador1 . "' alt='Imagen mano izq'>";
            echo "<img src='img/" . $jugadaJugador2 . "' alt='Imagen mano der'>";
            echo "</div>";

            // Determinar el ganador de la ronda
            if (
                $jugadaJugador1 == $opciones[1][0] && $jugadaJugador2 == $opciones[3][1] ||
                $jugadaJugador1 == $opciones[2][0] && $jugadaJugador2 == $opciones[1][1] ||
                $jugadaJugador1 == $opciones[3][0] && $jugadaJugador2 == $opciones[2][1]
            ) {
                $puntuacionJugador1++;
            } elseif (
                $jugadaJugador2 == $opciones[1][1] && $jugadaJugador1 == $opciones[3][0] ||
                $jugadaJugador2 == $opciones[2][1] && $jugadaJugador1 == $opciones[1][0] ||
                $jugadaJugador2 == $opciones[3][1] && $jugadaJugador1 == $opciones[2][0]
            ) {
                $puntuacionJugador2++;
            }
        }


        // Determinar el ganador del juego
        if ($puntuacionJugador1 > $puntuacionJugador2) {
            echo "<b>$nombre1 gana el juego con $puntuacionJugador1 victorias.</b>";
        } elseif ($puntuacionJugador2 > $puntuacionJugador1) {
            echo "<b>$nombre2 gana el juego con $puntuacionJugador2 victorias.</b>";
        } else {
            echo "<b>¡Es un empate!</b>";
        }
    } else {
        echo "No se enviaron datos del formulario.";
    }
    ?>
</body>


</html>



