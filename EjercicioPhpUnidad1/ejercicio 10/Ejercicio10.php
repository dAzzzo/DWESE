<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario alumnos</title>
</head>

<body>

    <div class="container-sm col-sm" style="padding-top:40px;">
        <!--El formulario envía con el método POST los datos -->
        <h1>Nota media de Programación</h1>

        <form method="post" action=""> <!-- Agregamos un formulario que envíe los datos a la misma página -->

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre1" class="form-control" placeholder="Escriba algo...">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota: </span>
                <input type="text" name="nota1" class="form-control" placeholder="Escriba algo...">
            </div>

            </br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre2" class="form-control" placeholder="Escriba algo...">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota: </span>
                <input type="text" name="nota2" class="form-control" placeholder="Escriba algo...">
            </div>

            </br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre3" class="form-control" placeholder="Escriba algo...">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota: </span>
                <input type="text" name="nota3" class="form-control" placeholder="Escriba algo...">
            </div>

            </br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre4" class="form-control" placeholder="Escriba algo...">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota: </span>
                <input type="text" name="nota4" class="form-control" placeholder="Escriba algo...">
            </div>

            </br>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre5" class="form-control" placeholder="Escriba algo...">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nota: </span>
                <input type="text" name="nota5" class="form-control" placeholder="Escriba algo...">
            </div>

            </br>

            <!-- Este botón lanza el formulario al ser tipo submit -->
            <button class="btn btn-primary" type="submit">Enviar</button>

        </form> <!-- Cerramos el formulario -->

        <?php

        /*Realiza un programa que lea el nombre de las asignaturas de 5 personas y sus  notas,
         en decimal con 3 decimales y muestre la nota media con un decimal 
         redondeando.(nota:Hay que convertir de string a float ya que el formulario sólo recoge float)
        */

        if (!empty($_POST)) {

            // Recuperamos los nombres y notas de cada estudiante desde $_POST
            $nombre1 = $_POST["nombre1"];
            $nota1 = floatval($_POST["nota1"]);

            $nombre2 = $_POST["nombre2"];
            $nota2 = floatval($_POST["nota2"]);

            $nombre3 = $_POST["nombre3"];
            $nota3 = floatval($_POST["nota3"]);

            $nombre4 = $_POST["nombre4"];
            $nota4 = floatval($_POST["nota4"]);

            $nombre5 = $_POST["nombre5"];
            $nota5 = floatval($_POST["nota5"]);


            // Calcula la nota media
            $nota_media = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

            // Muestra los resultados
            echo "La nota de cada alumno en decimal es:  <br>" . $nombre1 . ": " . $nota1
                . "<br>" . $nombre2 . ": " . $nota2 . "<br>"
                . $nombre3 . ": " . $nota3 . "<br>"
                . $nombre4 . ": " . $nota4 . "<br>"
                . $nombre5 . ": " . $nota5 . "<br>"
                . "La nota media de la clase es: " . round($nota_media, 1);
       
       
                number_format($nota_media,3);
            }
        ?>

    </div>

</body>

</html>