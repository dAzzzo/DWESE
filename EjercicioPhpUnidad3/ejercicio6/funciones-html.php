<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosEjercicio6.css">
    <title>Funciones del ejercicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <!-- Formulario HTML: Deberás crear un formulario que tenga campos para ingresar las columnas, filas, color de fondo
     para una tabla. También, se deben incluir tres checkboxes para 'edad', 'sexo' y 'observaciones'.

PHP: Deberás escribir un código PHP que se ejecute al enviar el formulario. Este código PHP estará en un archivo separado llamado 
funciones-html.php. Contendrá funciones para generar diferentes partes del formulario y la tabla:

crearTabla($color, $columnas, $filas): Esta función generará una tabla con el color de fondo, columnas y filas especificadas.
crearSexo(): Generará un conjunto de radio buttons para seleccionar el sexo.
crearObservaciones($ancho, $filas): Creará un campo de texto amplio para observaciones con el ancho y filas especificados.
Generación dinámica de elementos: Dependiendo de qué checkboxes se marquen en el formulario, se invocarán las funciones correspondientes 
desde el archivo PHP funciones-html.php:

Si se marca 'edad', se generará un select en el formulario con valores de 1 a 120.
Si se marca 'sexo', se incluirá un conjunto de radio buttons para elegir entre dos opciones.
Si se marca 'observaciones', se creará un campo de texto amplio para ingresar observaciones.
Valores por defecto: En el caso del campo de observaciones, si no se especifican valores para ancho y filas, se utilizarán valores 
predefinidos de 10x10 para el campo de texto.

Restricciones: El ejercicio prohíbe el uso de etiquetas <style> o CSS dentro del archivo. Todo el formato y estilo de la tabla y los 
elementos adicionales se deben manejar desde PHP.

Una vez que todo esté configurado, al enviar el formulario, los datos deben ser procesados por el archivo PHP y generar la tabla con 
las especificaciones dadas. -->

    <?php

    function crearTabla($color, $columnas, $filas)
    {
        echo 'Esta es la tabla con los datos elegidos:';
        //Creamos el color del fondo
        $estiloTabla = "class='$color'";


        //Ahora creamos las dimensiones especificas
        $tabla = "<table $estiloTabla >";
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $tabla .= "<td> X </td>";
            }
            $tabla .= "</tr>";
        }
        $tabla .= "</table>";

        return $tabla;

    }


    function crearEdad()
    {
        //Basicamente lo que se hace en todos los casos es nombrar el nombre del html para que luego se realizarlo al imprimirlo
        echo '<br>Esta es la edad, máximo 120 años:<br>';
        $edadElegida = '<select name="edad" class="form-select col-sm-10" aria-label="Escriba algo...">
        <option selected>Selecciona tu edad</option>';

        for ($i = 1; $i < 121; $i++) {
            $edadElegida .= "<option value='$i'>$i</option>\n";
        }

        $edadElegida .= '</select>';

        return $edadElegida;
    }

    function crearSexo()
    {
        echo '<br>Eliga el sexo:<br>';
        $sexoElegido = "<label><input type='radio' name='sexo' value='masculino'>Masculino</label><br>";
        $sexoElegido .= "<label><input type='radio' name='sexo' value='femenino'>Femenino</label><br>";

        return $sexoElegido;
    }

    function crearObservaciones($ancho = 10, $filas = 10)
    {
        echo '<br>Escriba lo que quiera dentro del cuadro:<br>';
        // Generar el campo de texto amplio para observaciones
        $campoObservaciones = "<textarea name='observaciones' cols='$ancho' rows='$filas'></textarea>";

        return $campoObservaciones;
    }


    ?>

</body>

<?php
// Comprobamos si se envió el formulario para mostrar los elementos generados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Llamamos a las funciones para generar los elementos según los checkboxes marcados
    if (isset($_POST['columnas']) && isset($_POST['filas']) && isset($_POST['color'])) {
        echo crearTabla($_POST['color'], $_POST['columnas'], $_POST['filas']);
    }
    if (isset($_POST['edad'])) {
        echo crearEdad();
    }
    if (isset($_POST['sexo'])) {
        echo crearSexo();
    }
    if (isset($_POST['observaciones'])) {
        echo crearObservaciones();
    }
}
?>

</html>