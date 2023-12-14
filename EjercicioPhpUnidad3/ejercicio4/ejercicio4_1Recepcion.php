<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Recepcion sin funcion de cadena</title>
</head>

<body>

    <?php
    // Comprobamos si se enviaron los datos del formulario con un request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $palabras = obtenerPalabras($nombre);

        foreach ($palabras as $NuevaPalabra => $palabra) {
            $consonantes = contarConsonantesSinFunciones($palabra);
            $letras = contarLetrasSinFunciones($palabra);
            echo "Palabra" . ($NuevaPalabra + 1) . ": $consonantes Consonantes $letras letras<br>";
        }
    }

    function obtenerPalabras($nombre){
        $palabras = [];
        $palabra = '';
        // Retira espacios en blanco (u otros caracteres) del inicio de un string
        $nombre = ltrim($nombre);
        //Obtiene la longitud de un string
        for ($i = 0; $i < strlen($nombre); $i++){
            if ($nombre[$i] !== ' '){
                $palabra .= $nombre[$i];
            }else{
                $palabras[] = $palabra;
                $palabra = '';
            }
        }
        if (!empty($palabra)){
            $palabras[] = $palabra;
        }
        return $palabras;
    }

    function contarConsonantesSinFunciones($palabra){
        //Realiza una búsqueda y sustitución de una expresión regular
        $consonante = preg_replace("/[aeiouáéíóúAEIOUÁÉÍÓÚñÑ\s]/", "", $palabra);
        return strlen($consonante);
    }

    function contarLetrasSinFunciones($palabra){
        $letras = 0;
        for ($i = 0; $i < strlen($palabra); $i++){
            if($palabra[$i] !== ' '){
                $letras++;
            }
        }
        return $letras;
    }
    ?>

</body>

</html>