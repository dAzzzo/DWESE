<!DOCTYPE html>
<html>

<head>
    <title>Recepcion </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['codificacion'])) {
                $datos = $_POST['codificacion'];
                $partes = explode("-", $datos);


                //COmprobacion de que el arry tiene cuatro elementos
                //comprobacion de que el primer elemeneto tiene dos caracteres
                //in_array nos busca si el array tienen S o I
                //is_numeric lo usamos pars comprobar de que sea un int, si no seria false
                //intval se usa para combertir una cadena a un valor entero
                //range se usa para generar un rango que comprobaremos
                if (
                    count($partes) == 4 && strlen($partes[0]) == 2 && in_array($partes[0][0], ["S", "I"])
                    && is_numeric($partes[0][1]) && in_array(intval($partes[0][1]), range(1, 3))
                ) {


                    $menu = $partes[0][0];
                    $estilo = $partes[0][1];
                    $body = $partes[1];
                    $color = $partes[2];
                    $url = $partes[3];

                    // Ahora puedes hacer lo que necesites con cada parte de los datos
                    // Por ejemplo, puedes mostrarlos o realizar otras acciones
                    echo "Menú: $menu<br>";
                    echo "Estilo: $estilo<br>";
                    echo "Body: $body<br>";
                    echo "Color: $color<br>";
                    echo "URL: $url<br>";

                    //Incluimos el archivo resultado
                    include("resultadoEj8.php");
                } else {
                    echo "El formato de datos ingresado no es válido.";
                }
            } else {
                echo "No se han recibido datos.";
            }
        } else {
            echo "Acceso no autorizado.";
        }



        // Generar tabla según los checkboxes marcados
        $checkbox = $_POST['checkbox'];
        $maxAltura = $maxAnchura = 0;

        foreach ($checkbox as $fila => $columnas) {
            foreach ($columnas as $columna => $valor) {
                if ($valor == 'on') {
                    $maxAltura = max($maxAltura, $fila + 1);
                    $maxAnchura = max($maxAnchura, $columna + 1);
                }
            }
        }

        // Mostrar la tabla generada
        echo '<table class="table table-bordered mt-4">';
        for ($i = 0; $i < $maxAltura; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $maxAnchura; $j++) {
                $colorFondo = isset($checkbox[$i][$j]) && $checkbox[$i][$j] == 'on' ? 'lightblue' : 'white';
                echo '<td style="background-color: ' . $colorFondo . ';"></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </div>
</body>

</html>