<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Baraja de cartas</title>

    <?php
    include "php/global.php";
    ?>

</head>

<body>

    <form action="Ejemplo5ContarCartas.php" method="post">

        <?php
        /*
        Generamos dinamicamente una tabla para seleccionar las cartas
        de una baraja de poker
        */

        echo "<table class='table'>\n";

        //En cada palo hay trce carts, cada carta en una línea
        
        for ($i = 0; $i < 13; $i++) {
            echo "<tr>\n";

            //En cada línea ponemos cuatro palos
        
            for ($j = 0; $j < 4; $j++) {
                echo "<td>\n";
                echo "<label>$nombre_carta[$i] de $nombre_palo[$j]</label>\n";
                echo "<input type='checkbox' name='lista_cartas[]' value='" . $i . "-" . $j . "' />\n";
                echo "</td>\n";
            }

            echo "</tr>\n";
        }

        echo "</table>\n";

        echo "<button class='btn btn-primary' type='submit'>ENVIAR CARTAS</button>\n";


        ?>

</body>

</html>