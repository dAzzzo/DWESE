<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    

</head>

<h1>Piedra, Papel o Tijera</h1>


<div class="container-sm col-sm" style="padding-top: 40px;">

    <form method="post" action="ejercicio6Recepcion.php">




        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre1: </span>
            <input type="text" name="nombre1" class="form-control" placeholder="Escriba algo...">
        </div>




        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre2: </span>
            <input type="text" name="nombre2" class="form-control" placeholder="Escriba algo...">
        </div>




        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon2">Número victorias: </span>
            <input type="text" name="victorias" class="form-control" placeholder="Escriba algo...">
        </div>


        <!-- La etiqueta <select> parece estar fuera de lugar y no es necesaria aquí, por lo que la he eliminado. -->

        <div class="col-12">
            <!-- Este botón lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>


    </form> <!-- Cierra la etiqueta del formulario -->

</div>

<body>

    <div class="container-sm col-sm" style="padding-top:40px;">

    </div>


</body>


</html>
