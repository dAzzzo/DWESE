<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepcion de Datos</title>
</head>

<body>



    <?php


    // Comprobamos si se enviaron los datos del formulario
    if (
        isset($_POST["clase"]) && isset($_POST["transfondo"]) && isset($_POST["nombre"])
        && isset($_POST["raza"]) && isset($_POST["alineamiento"]) && isset($_POST["xp"])
        && isset($_POST["edad"]) && isset($_POST["altura"]) && isset($_POST["peso"])
        && isset($_POST["ojos"]) && isset($_POST["piel"]) && isset($_POST["pelo"])
        && isset($_POST["AptitudMagica"]) && isset($_POST["TiradaSalvacion"])
        && isset($_POST["BonificadorAtaque"])
    ) {
        // Crear un array asociativo con la información
        $personaje = array(
            "Clase" => $_POST["clase"][0],
            "Transfondo" => $_POST["transfondo"],
            "Nombre" => $_POST["nombre"],
            "Raza" => $_POST["raza"],
            "Alineamiento" => $_POST["alineamiento"],
            "XP" => $_POST["xp"],
            "Edad" => $_POST["edad"],
            "Altura" => $_POST["altura"],
            "Peso" => $_POST["peso"],
            "Ojos" => $_POST["ojos"],
            "Piel" => $_POST["piel"],
            "Pelo" => $_POST["pelo"],
            "Aptitud Mágica" => $_POST["AptitudMagica"],
            "CD Tirada de salvación de conjuros" => $_POST["TiradaSalvacion"],
            "Bonificador de ataque de conjuros" => $_POST["BonificadorAtaque"]
        );

        echo "Han llegado los datos de la cabecera del personaje<br>";
        foreach ($personaje as $clave => $valor) {
            echo "->$clave: $valor<br>";
        }

        echo "<br>Han llegado los datos de las características del personaje: <br>";
        $caracteristicas = array(
            "Fuerza" => $_POST["fuerza"],
            "Destreza" => $_POST["destreza"],
            "Constitución" => $_POST["constitucion"],
            "Inteligencia" => $_POST["inteligencia"],
            "Sabiduría" => $_POST["sabiduria"],
            "Carisma" => $_POST["carisma"]
        );
        foreach ($caracteristicas as $clave => $valor) {
            echo "->$clave: $valor<br>";
        }
    } else {
        echo "No se han recibido todos los datos necesarios del formulario.";
    }


    //Calculamos la media
    //Forma antigua
    // $media = ($_POST["fuerza"] + $_POST["destreza"] + $_POST["constitucion"] 
    // + $_POST["inteligencia"] + $_POST["sabiduria"] + $_POST["carisma"])/6;
    // echo "<br><br>La media de las características es: $media";
    
    //forma nueva
    $suma = array_sum($caracteristicas);
    $media = $suma / count($caracteristicas);
    echo "<br><br>La media de las características es: $media";

    //Calculamos el rango
    $maximo = max($caracteristicas);
    $minimo = min($caracteristicas);

    $rango = $maximo - $minimo;

    echo "<br>El rango de las características es: $rango";

    /*La media de las características no sea mayor de 15. Debe de comprobarse también 
    que el rango de las características, no debe superar 20 ninguna.
     */
    if ($media <= 15 && $rango <= 20){
        echo "<br>Las estadísticas son correctas, tu personaje esta listo para ser usado :)";
    }else {
        echo "<br>Lo siento, pero tu personaje no cumple con las estadísticas adecuadas :(";
    }


    //Introducimos las imagenes
    if ($_POST['raza'] == 'enano' || $_POST['raza'] == 'humano') {
        //Este es para el caso del humano o enano
        echo "<br/><img src='img/" . $_POST['raza'] . $_POST["clase"][0] . ".jpg' alt='Imagen de la raza y clase'>";
    } else {
        //Añadimos la imagen dependiendo de su raza
        echo "<br/><img src='img/" . $_POST['raza'] . ".jpg' alt='Imagen de la raza'>";
    }

    ?>


</body>

</html>