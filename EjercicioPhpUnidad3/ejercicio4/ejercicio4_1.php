<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sin funcion de cadena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>




<!-- Realizar un formulario en php que lea un nombre completo de una persona y se llame a sí mismo, debajo del formulario
deberá sacar la cantidad de consonantes que tiene la cadena en cada palabra, así cómo el número de letras. Realizar dos
versiones, una utilizando funciones de cadena y otra sin utilizarlas. Puede existir más de un espacio entre palabras, y
al principio y final de la cadena.(Investigar trim r y ltrim).
Ejemplo de entrada: Victor Pablo Galvan Florez
salida: Palabra1:4 Consonantes 6 letras, palabra2:3 Consonantes 5 letras, … -->




<body>


    <div class="container-sm col-sm" style="padding-top:40px;">
        <div class="container-sm pt-4 pl-4 pr-4">
            <div class="col-12 p-5">




                <!--El formulario envia con el metodo post los datos -->
                <form method="post" action="ejercicio4_1Recepcion.php">
                    <!-- Creamos el nombre del usuario con un input -->
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nombre del usuario: </span>
                        <input type="text" name="nombre" class="form-control" placeholder="Escriba algo...">
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
