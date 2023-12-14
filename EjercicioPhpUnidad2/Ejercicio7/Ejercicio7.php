<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>


<body>


    <?php
    /*Realizar un formulario que recoja el sexo en un radio, la edad de un select, el nombre y 
    el sueldo de un range con saltos de 100 euros hasta 120mil. 
    
    El formulario cargara una pagina php que creará una tabla como la siguiente:

    NOMBRE
    pedro(del formulario)
    HOMBRE
    MUJER
    0-1200
    12000-20000
    21000-35000
    +35000
    0-25
    25-45
    45-65
    JUBILADO


    Dependiendo de los datos del formulario, se creará una tabla en la cual el color de fondo de 
    las celdas cuyos valores coincidan con lo introducido serán distintos al del resto de celdas.

    */


    ?>

    <div class="container-sm col-sm" style="padding-top:40px;">
        <div class="container-sm pt-4 pl-4 pr-4">
            <div class="row">
                <div class="col-12 p-5">


                    <div class="container-sm col-sm" style="padding-top:40px;">
                        <!--El formulario envia con el metodo post los datos -->
                        <form method="post" action="Ejercicio7Recepcion.php">

                            <!-- Con esto pedimos el nombre -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                                <input type="text" name="nombre" class="form-control" placeholder="Escriba algo...">
                            </div>


                            <!-- Esto es la eleccion del sexo por medio de un radio -->
                            <div>
                                <span class="input-group-text" style="margin-bottom:10px" id="basic-addon1">Sexo:
                                </span>
                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="sexo" value="Hombre"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Hombre
                                    </label>
                                </div>


                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="sexo" value="Mujer"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Mujer
                                    </label>
                                </div>


                            </div>


                            <!-- Con esto pedimos el sueldo con un range -->
                            <label class="input-group-text" style="margin-bottom:10px" id="basic-addon1"
                                for="customRange3" class="form-label">Sueldo:</label>
                            <input type="range" class="form-range" name="sueldo" min="0" max="120000" step="100"
                                id="customRange3">


                            <!-- Con esto pedimos la edad con un select -->

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Edad: </span>
                                <select name="edad" class="form-select col-sm-10" aria-label="Escriba algo...">
                                    <option selected>Seleciona tu edad</option>
                                    <?php
                                    //Creamos con un bucle todas las opciones
                                    for ($i = 1; $i < 801; $i++) {
                                        echo "<option value='$i'>$i</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>



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