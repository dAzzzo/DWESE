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
    <title>Recepción formulario con funcion de cadena</title>
</head>


<body>


    <?php
    // Comprobamos si se enviaron los datos del formulario con un request
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        //Explode divide una cadena en varias cadenas más pequeñas
        //trim elimina los espacios en blanco al principio y al final de una cadena.
        $palabras = explode(" ", trim($nombre));
        

        foreach ($palabras as $NuevaPalabra => $palabra) {
            $consonantes = contarConsonantes($palabra);
            //strlen devuelve la longitud de una cadena 
            $letras = strlen($palabra);
            echo "Palabra" . ($NuevaPalabra + 1) . ": $consonantes Consonantes $letras letras<br>";
        }
    }

    function contarConsonantes($palabra) {
        //preg_replace() se usa para eliminar todas las vocales, con tilde, ñ y espacios en blanco de la inicial
        $consonantes = preg_replace("/[aeiouáéíóúüAEIOUÁÉÍÓÚÜñÑ\s]/", "", $palabra);
        return strlen($consonantes);
    }  


    
    ?>


</body>


</html>

