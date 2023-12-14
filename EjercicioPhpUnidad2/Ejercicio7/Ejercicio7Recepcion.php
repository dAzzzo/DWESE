<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script> 
    <style>
        th,
        td {
            padding: 10px;
            text-align: center;
        }

        .highlight {
            background-color: yellow;
        }
    </style>
</head>



<body>



    <?php
    // Comprobamos si se enviaron los datos del formulario
    if (isset($_POST["nombre"]) && isset($_POST["sexo"]) && isset($_POST["sueldo"]) && isset($_POST["edad"])) {
        $Nombre = $_POST["nombre"];
        $Sexo = $_POST["sexo"];
        $Sueldo = (int) $_POST["sueldo"];
        $Edad = (int) $_POST["edad"];

        echo "<br>Han llegado los datos del usuario<br>";
        echo "<br>-> Nombre: $Nombre";
        echo "<br>-> Sexo: $Sexo";
        echo "<br>-> Sueldo: $Sueldo";
        echo "<br>-> Edad: $Edad";

    }


    ?>

    <table border="1">
        <tr>
            <!-- El nombre no tiene porque resaltarse -->
            <td colspan="2">Nombre</td>
            <td colspan="2"><?php echo $Nombre ?></td>
        </tr>
        <tr>
            <?php
            //Creamos la tabla, donde para que funcione el resaltado tenemos que escrirbir todo
            //De esta manera, detecta los diferentes caso y solo resalta el correspondiente dependiendo del if
            if ($Sexo == "Hombre") {
                echo '<td class="highlight" colspan="2">HOMBRE</td>';
                echo '<td colspan="2">MUJER</td>';
            } else if ($Sexo == "Mujer") {
                echo '<td colspan="2">HOMBRE</td>';
                echo '<td class="highlight" colspan="2">MUJER</td>';
            } else {
                echo 'VALOR SEXO: ' . $Sexo;
                echo '<td>ERROR: Sexo inválido</td>';
            }
            ?>

        </tr>
        <tr>
            <?php
            //Lo mismo parasaria en el caso del salario
            if ($Sueldo <= 12000) {

                echo '<td class="highlight">0-12000</td>';
                echo '<td >12000-20000</td>';
                echo '<td >21000-35000</td>';
                echo '<td >+35000</td>';

            } elseif ($Sueldo > 12000 && $Sueldo <= 20000) {

                echo '<td>0-12000</td>';
                echo '<td class="highlight">12000-20000</td>';
                echo '<td>21000-35000</td>';
                echo '<td >+35000</td>';

            } elseif ($Sueldo > 21000 && $Sueldo <= 35000) {

                echo '<td>0-12000</td>';
                echo '<td>12000-20000</td>';
                echo '<td class="highlight">21000-35000</td>';
                echo '<td >+35000</td>';

            } else {

                echo '<td>0-12000</td>';
                echo '<td>12000-20000</td>';
                echo '<td>21000-35000</td>';
                echo '<td class="highlight">+35000</td>';

            }
            ?>
        </tr>
        <tr>


            <?php
            //Y también en el caso de la edad
            if ($Edad <= 25) {

                echo '<td class="highlight">0-25</td>';
                echo '<td>25-45</td>';
                echo '<td>45-65</td>';
                echo '<td>JUBILADO</td>';

            } elseif ($Edad > 25 && $Edad <= 45) {

                echo '<td>0-25</td>';
                echo '<td class="highlight">25-45</td>';
                echo '<td>45-65</td>';
                echo '<td>JUBILADO</td>';

            } elseif ($Edad > 45 && $Edad <= 65) {

                echo '<td>0-25</td>';
                echo '<td>25-45</td>';
                echo '<td class="highlight">45-65</td>';
                echo '<td>JUBILADO</td>';

            } else {

                echo '<td>0-25</td>';
                echo '<td>25-45</td>';
                echo '<td>45-65</td>';
                echo '<td class="highlight">JUBILADO</td>';

            }
            ?>
        </tr>
    </table>
</body>

</html>