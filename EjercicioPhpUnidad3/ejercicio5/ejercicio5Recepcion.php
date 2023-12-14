<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5 recepcion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>


<body>


    <!-- Realizar un programa que lea de un formulario una serie de números de cualquier longitud en un campo único de texto,
    separados por espacios. El programa debe tener una función que reciba el texto y debe de devolver un array
    asociativo con las claves “nprimos”, “media” y “mínimo” asociados a los valores respectivos. La función tendrá un
    segundo parámetro opcional denominado $orden, si es cierto el array resultante primero devolverá “nprimos”, “media”
    y “mínimo”, si es falso será el orden contrario, si no se introduce el valor de $orden, por defecto será cierto.


    Deberá mostrarlos en una tabla, con labels que pongan las claves y sus respectivos valores. Realizar 2 versiones de
    la función, en uno utilizando funciones para realizar el cálculo (explode, max, min) y otro sin utilizar ninguna
    función. -->

    <style>
        table {
            justify-content: space-between;
            width: 100%;
        }

        tr,
        td {
            border: 2px solid #444444;
            text-align: left;
            padding: 1em;
        }

        tr {
            background-color: #dddddd;
            color: black;
        }
    </style>

    <?php
    // Comprobamos si se enviaron los datos del formulario con un request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function ejercicio($Num, $orden = true)
        {
            //Explode divide una cadena en varias cadenas más pequeñas
            $CantidadNumeros = explode(" ", $Num);

            echo "El número original es: " . $Num;

            // Primero encontrar la cantidad de números primos
            $cantidad_primos = 0;
            foreach ($CantidadNumeros as $numero_actual) {
                $i = 2;
                $es_primo = true;
                while ($es_primo && $i < $numero_actual / 2) {
                    if ($numero_actual % $i == 0) {
                        $es_primo = false;
                    }
                    $i++;
                }
                if ($es_primo) {
                    $cantidad_primos++;
                }
            }


            // Calcular media
    
            $media = 0;
            $cantNum = count($CantidadNumeros);
            foreach ($CantidadNumeros as $nuevo_numero) {
                $media += $nuevo_numero;
            }

            $media = $media / $cantNum;

            // Calcular mínimo
            $min = min($CantidadNumeros);



            // Crear el array asociativo
            $arrResultado = [
                "nprimos" => $cantidad_primos,
                "media" => $media,
                "minimo" => $min
            ];

            if (!$orden) {
                //array_reverse invierte la posicion de los valores
                $arrResultado = array_reverse($arrResultado, true);
            }

            return $arrResultado;

        }

        //Obtenemos los datos del formulario
        $Num = $_POST['num'];

        $arrResultado = ejercicio($Num, $orden = true);

        foreach ($arrResultado as $clave => $valor) {
            echo "<table>
                    <tr>
                        <td>" . $clave . ": 
                         </td>
                        <td>$valor<br>
                        </td>
                    </tr>
                    </table>";
        }
    }
    ?>



</body>

</html>