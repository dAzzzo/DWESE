<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor decimal a entero</title>
</head>

<body>

    <div class="container-sm col-sm" style="padding-top: 40px;">
        <!-- El formulario envía los datos con el método POST a "FicheroEjercicio8.php" -->
        <form method="post" >

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Conversión directa: </span>
                <input type="text" name="directa" class="form-control" placeholder="Escriba algo...">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Conversión redondeada: </span>
                <input type="text" name="redondeo" class="form-control" placeholder="Escriba algo...">
            </div>
            
            <!-- La etiqueta <select> parece estar fuera de lugar y no es necesaria aquí, por lo que la he eliminado. -->

            <div class="col-12">
                <!-- Este botón lanza el formulario al ser tipo submit -->
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>

        </form> <!-- Cierra la etiqueta del formulario -->

    </div>

    <?php
    /*Realiza un programa que lea 2 números decimales desde un formulario 
    como float y los convierta a entero, el primero conversión directa y 
    el segundo redondeo. (pantallazo funcionando, el segundo número tiene 
    que ser 23.6)

    */
    if (!empty ($_POST)) {

    //Se crean las variables
    $numero1 = floatval($_POST["directa"]);
    $numero2 = floatval($_POST["redondeo"]);

    //Se convierten a entero
    $entero1 = (int) $numero1;

    //Se convierte a redondeo
    $entero2 = round($numero2);

    //Se escribe por pantalla
    
    echo "El resultado del número por conversión directa es: " . $entero1 . " y del número redondeado es: " . $entero2;



    }
    ?>

</body>

</html>
