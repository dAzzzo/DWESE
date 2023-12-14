<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercio7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <!-- Crear un formulario que lea los datos del cumpleaños de una persona, con un campo nombre, otro fecha , 
    otro de hora (utilizando los campos de html5) y un botón. Investigar las funciones de fecha de la siguiente
    https://www.mclibre.org/consultar/php/lecciones/php-fecha-hora.html .
    Crea una función que reciba la fecha y la hora como dos parametros string y devuelva un mensaje con el siguiente
    formato:
    “Bienvenido [nombre], estás en [primavera/otoño/verano/invierno] quedan xx días para las vacaciones de navidad y 
    xxx dias xxx horas para vacaciones de semana santa [del año que viene]. Tu cumpleaños [no] cae en fin de semana 
    y es el día [jueves, 3 de octubre del 22]”
    Siendo la fecha que se introduce en el formulario el cumpleaños del usuario. -->

    <form action="ejercicio7Recepcion.php" method="post">

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nombre: </span>
            <input type="text" name="nombre" class="form-control" placeholder="Escriba algo...">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Fecha de cumpleaños: </span>
            <input type="date" name="fechaCumple" class="form-control" placeholder="Escriba algo...">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Hora: </span>
            <input type="time" name="hora" class="form-control" placeholder="Escriba algo...">
        </div>



        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>



</body>

</html>