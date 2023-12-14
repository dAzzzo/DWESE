<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosEjercicio6.css">
    <title>ejercicio6</title>
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

    <!-- Campos para la tabla -->
    <!-- <form action="funciones-html.php" method="post">
        Columnas: <input type="number" name="columnas"><br>
        Filas: <input type="number" name="filas"><br>
        Color de fondo: <input type="color" name="color_fondo"><br>

        <input type="checkbox" name="edad"> Edad<br>
        <input type="checkbox" name="sexo"> Sexo<br>
        <input type="checkbox" name="observaciones"> Observaciones<br>

        <input type="submit" value="Enviar">
    </form> -->

    <form action="funciones-html.php" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Número columnas: </span>
            <input type="number" name="columnas" class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Número filas: </span>
            <input type="number" name="filas" class="form-control">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Color de fondo: </span>
            <select name="color" class="form-select col-sm-10" aria-label="Selecciona un color...">
                <option selected>Selecciona un color</option>
                <option value="red">Rojo</option>
                <option value="blue">Azul</option>
                <option value="green">Verde</option>
                <option value="yellow">Amarillo</option>
            </select>
        </div>


        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" name="edad" class="form-check-input" id="edad">
                <label class="form-check-label" for="edad">Edad</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="sexo" class="form-check-input" id="sexo">
                <label class="form-check-label" for="sexo">Sexo</label>
            </div>
            <div class="form-check">
                <input type="checkbox" name="observaciones" class="form-check-input" id="observaciones">
                <label class="form-check-label" for="observaciones">Observaciones</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>


</body>

</html>