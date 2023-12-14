<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <form action="ejercicio8Recepcion.php" method="POST">
            <div class="form-group">
                <label for="codificacion">Ingrese la codificación: [S-Menu superior/I-Menu inferior][orden del
                    menú]-[nombre menu]-[Color Letra]-[url destino]
                </label>
                <p>Opciones a elegir:</p>
                <ul>
                    <li>S1 - S2 - S3</li>
                    <li>I1 - I2 - I3</li>
                    <li>Nombre del menu: BUSCAR, REGISTRARSE, IMAGEN</li>
                    <li>Color letra: AZUL, ROJO, VERDE, AMARILLO</li>
                </ul>

                <p>Ejemplo: S3-BUSCAR-AZUL-http://www.google.es
                </p>
                <input type="text" class="form-control" id="codificacion" name="codificacion">
            </div>

            <!-- Grid de checkboxes generado dinámicamente con PHP -->
            <?php
            $filas = 4;
            $columnas = 4;
            echo '<div class="form-group">';
            echo '<label>Seleccione el grid:</label><br>';
            echo '<div class="row">';
            for ($i = 0; $i < $filas; $i++) {
                echo '<div class="col">';
                for ($j = 0; $j < $columnas; $j++) {
                    echo '<input type="checkbox" name="checkbox[' . $i . '][' . $j . ']">';
                }
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';
            ?>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>