<!doctype html>
<html lang="en">

<head>
    <title>Recepción Datos Tienda 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php
    if (isset($_POST['nombre'])) {

        //Número de Volumenes Totales (suma de stocks): X
        function volumenes_totoles($datos_tomos)
        {

            $cant_volumenes = 0;

            foreach ($datos_tomos as $tomo) {
                $datos_tomo = explode(",", trim($tomo));

                $cant_volumenes += $datos_tomo[3];
            }
            return $cant_volumenes;
        }

        //Cantidad de Unidades XLS Disponibles(Más de 300pag y ed colecionista):X
        function cantidad_unidades_xls($datos_tomos)
        {

            $cant_xmls = 0;

            foreach ($datos_tomos as $tomo) {
                $datos_tomo = explode(",", trim($tomo));

                if ($datos_tomo[2] > 300 && $datos_tomo[5] == "S") {
                    $cant_xmls += $datos_tomo[3];
                }
            }
            return $cant_xmls;
        }

        /*Hay Stock Colecionista: La función recibirá los almacenes, devolverá true si hay mas de
       10 tomos coleccionista en cada provincia y es tienda física.*/
        function hay_stock_coleccionista($datos_tomos)
        {

            $result = true;

            $arr_stock_coleccionista = [
                "cadiz" => 0,
                "malaga" => 0,
                "granada" => 0,
                "almeria" => 0,
                "huelva" => 0,
                "sevilla" => 0,
                "cordoba" => 0,
                "jaen" => 0
            ];


            if (isset($_POST['fisica'])) {
                foreach ($datos_tomos as $tomo) {
                    $datos_tomo = explode(",", trim($tomo));

                    if ($datos_tomo[5] == "S")
                        $arr_stock_coleccionista[$datos_tomo[6]] += $datos_tomo[3];
                }

                foreach ($arr_stock_coleccionista as $provincia => $stock) {
                    if ($stock < 10)
                        $stock = false;
                }
            } else {
                $result = false;
                return $result;
            }
        }


        /* Stock por Provincia: (calculará y la suma de los stock de los tomos de cada provincia, se
            calculará utilizando una función que reciba los datos de los tomos y devuelva un array
            asociativo del tipo [“jaen” =&gt;230,”sevilla”=&gt;400,”almeria”=&gt;320]. No tienen porque estar
            todas las provincias)*/
        function stock_por_provincia($datos_tomos)
        {
            $arr_stock = [
                "cadiz" => 0,
                "malaga" => 0,
                "granada" => 0,
                "almeria" => 0,
                "huelva" => 0,
                "sevilla" => 0,
                "cordoba" => 0,
                "jaen" => 0
            ];

            foreach ($datos_tomos as $tomo) {
                $datos_tomo = explode(",", trim($tomo));

                $arr_stock[strtolower($datos_tomo[6])] += $datos_tomo[3];
            }
            return $arr_stock;
        }



        /* Cumple Cercanía : Utilizar una función que recibe los datos de los tomos y la provincia de
        la tienda y devuelva true si sólo hay tomos en provincias colindantes con la tienda*/
        function cumple_cercania($datos_tomos, $provincia_tienda)
        {

            $cumple = true;

            $arr_cercanias = [
                "cadiz" => ["huelva", "sevilla", "malaga"],
                "malaga" => ["cadiz", "sevilla", "cordoba", "granada"],
                "granada" => ["malaga", "cordoba", "jaen", "almeria"],
                "almeria" => ["granada"],
                "huelva" => ["cadiz", "sevilla"],
                "sevilla" => ["huelva", "cadiz", "malaga", "cordoba"],
                "cordoba" => ["sevilla", "malaga", "granada", "jaen"],
                "jaen" => ["cordoba", "granada"]
            ];

            foreach ($datos_tomos as $tomo) {
                $datos_tomo = explode(",", trim($tomo));

                if (!in_array(strtolower($datos_tomo[6]), $arr_cercanias[$provincia_tienda]) || strtolower($datos_tomo[6]) == $provincia_tienda)
                    $cumple = false;
            }
            return $cumple;

        }


        /*Stock Tomo: La función recibe los datos de los tomos ,la provincia y el nombre de un
    manga y comprueba si en los almacenes de las provincias colindantes a la tienda hay stock
    de dicho manga, para saber si es el manga, tiene que buscar el nombre del manga y estar
    presente en el nombre o en la descripción. Devuelve el número de stock disponible.*/
        function stock_tomo($datos_tomos, $provincia, $nombre_tomo)
        {

            $stock_disponible = 0;

            $arr_cercanias = [
                "cadiz" => ["huelva", "sevilla", "malaga"],
                "malaga" => ["cadiz", "sevilla", "cordoba", "granada"],
                "granada" => ["malaga", "cordoba", "jaen", "almeria"],
                "almeria" => ["granada"],
                "huelva" => ["cadiz", "sevilla"],
                "sevilla" => ["huelva", "cadiz", "malaga", "cordoba"],
                "cordoba" => ["sevilla", "malaga", "granada", "jaen"],
                "jaen" => ["cordoba", "granada"]
            ];

            foreach ($datos_tomos as $tomo) {
                $datos_tomo = explode(",", trim($tomo));

                if (str_contains($datos_tomo[0], $nombre_tomo) || str_contains($datos_tomo[1], $nombre_tomo)) {
                    if ($datos_tomo[6] == $provincia || in_array($datos_tomo[6], $arr_cercanias[$provincia]))
                        $stock_disponible += $datos_tomo[3];
                    echo $provincia . "|" . $datos_tomo[6];
                }
                return $stock_disponible;
            }
        }
        echo "<h1>Recepción de datos</h1>";

        // Recojo los datos de todos los tomos
        $datos_tomos = explode("\n", $_POST["tomos"]);

        // Muestro por pantalla las pruebas de las funciones usando los datos de la tienda recibidos
        echo "<p>Número de volúmenes totales: " . volumenes_totales($datos_tomos) . ".</p>";

        echo "<p>Cantidad de unidades XLS (+300 pág y de edición coleccionista): " . cantidad_unidades_xls($datos_tomos) . ".</p>";

        if (hay_stock_coleccionista($datos_tomos))
            echo "<p>Sí hay stock coleccionista.</p>";
        else
            echo "<p>No hay stock coleccionista.</p>";

        echo "<p>Stock por provincia:";
        foreach (stock_por_provincia($datos_tomos) as $provincia => $stock) {
            if ($stock > 0)
                echo "<br/>$provincia: $stock.";
        }
        echo "</p>";

        if (cumple_cercania($datos_tomos, $_POST["provincia"]))
            echo "<p>Sí cumple cercanía.</p>";
        else
            echo "<p>No cumple cercanía.</p>";

        echo "<p>Si desea probar la última función, le he dejado en el código fuente, el código necesario comentado para realizar la prueba.</p>";

        $nombre_tomo = "juan";

    } else {
        echo "<h1>ERROR: No se ha accedido a la página correctamente.</h1>";
        echo "<p>Introduzca los datos de la tienda en el siguiente <a href=\"./formulario-tienda.php\">formulario</a>";
    }
    ?>



    <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
        </script>
</body>

</html>