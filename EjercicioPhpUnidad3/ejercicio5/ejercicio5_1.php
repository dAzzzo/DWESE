<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5_1</title>
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


    <div class="container-sm col-sm" style="padding-top:40px;">
        <div class="container-sm pt-4 pl-4 pr-4">
            <div class="col-12 p-5">


                <p>Escriba números con espacios para separarlos</p>


                <!--El formulario envia con el metodo post los datos -->
                <form method="post" action="ejercicio5_1Recepcion.php">
                    <!-- Creamos el num con un input -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Introduzca una cantidad de números: </span>
                        <input type="text" name="num" class="form-control" placeholder="Escriba algo...">
                    </div>




                    <div class="container-sm col-12 pt-3">
                        <!-- este boton lanza el formulario al ser tipo submit -->
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>




            </div>
        </div>
    </div>


</body>


</html>

