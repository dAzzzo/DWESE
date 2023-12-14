<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <?php
    /*Realizar un formulario en php que lea una mano de poker, muestre las cartas en la web,  cada carta en un select separado,
    y compruebe si la jugada es color,  full o (escalera de color subir nota). Las cartas se seleccionarán de un desplegable que 
    se generará dinámicamente con php utilizando los valores de un array asociativo. https://www.n54studio.net/recorrer-array-asociativo-con-php/ 

    */
    ?>


    <div class="container-sm col-sm" style="padding-top:40px;">
        <div class="container-sm pt-4 pl-4 pr-4">
            <div class="row">
                <div class="col-12 p-5">



                    <p><b>Juego de Poker</b></p>


                    <div class="container-sm col-sm" style="padding-top:40px;">
                        <!--El formulario envia con el metodo post los datos -->
                        <form method="post" action="ejercicio8Recepcion.php">

                            <!-- Esta es la carta del jugador -->
                            <div class="input-group mb-3" style="margin-top: 15px">
                                <span class="input-group-text" id="basic-addon1">Primera carta:</span>
                                <select class="form-select" name="lista_cartas[]" placeholder="Seleccione una carta...">
                                    <?php
                                    include "global.php";

                                    foreach ($nombre_palo as $i => $palo) {
                                        foreach ($nombre_carta as $j => $carta) {
                                            echo "<option value='$j-$i'>$carta de $palo</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>



                            <!-- Esta es la  2 carta del jugador -->
                            <div class="input-group mb-3" style="margin-top: 15px">
                                <span class="input-group-text" id="basic-addon1">Segunda carta:</span>
                                <select class="form-select" name="lista_cartas[]" placeholder="Seleccione una carta...">
                                    <?php
                                    include "global.php";

                                    foreach ($nombre_palo as $i => $palo) {
                                        foreach ($nombre_carta as $j => $carta) {
                                            echo "<option value='$j-$i'>$carta de $palo</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Esta es la 3 carta del jugador -->
                            <div class="input-group mb-3" style="margin-top: 15px">
                                <span class="input-group-text" id="basic-addon1">Tercera carta:</span>
                                <select class="form-select" name="lista_cartas[]" placeholder="Seleccione una carta...">
                                    <?php
                                    include "global.php";

                                    foreach ($nombre_palo as $i => $palo) {
                                        foreach ($nombre_carta as $j => $carta) {
                                            echo "<option value='$j-$i'>$carta de $palo</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Esta es la 4 carta del jugador -->
                            <div class="input-group mb-3" style="margin-top: 15px">
                                <span class="input-group-text" id="basic-addon1">Cuarta carta:</span>
                                <select class="form-select" name="lista_cartas[]" placeholder="Seleccione una carta...">
                                    <?php
                                    include "global.php";

                                    foreach ($nombre_palo as $i => $palo) {
                                        foreach ($nombre_carta as $j => $carta) {
                                            echo "<option value='$j-$i'>$carta de $palo</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>

                            <!-- Esta es la 5 carta del jugador -->
                            <div class="input-group mb-3" style="margin-top: 15px">
                                <span class="input-group-text" id="basic-addon1">Quinta carta:</span>
                                <select class="form-select" name="lista_cartas[]" placeholder="Seleccione una carta...">
                                    <?php
                                    include "global.php";

                                    foreach ($nombre_palo as $i => $palo) {
                                        foreach ($nombre_carta as $j => $carta) {
                                            echo "<option value='$j-$i'>$carta de $palo</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>




                            <!-- Botón de enviar -->
                            <div class="container-sm col-12 pt-3">
                                <!-- este boton lanza el formulario al ser tipo submit -->
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>


</body>


</html>