<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-sm pt-4 pl-4 pr-4">
        <div class="row">
            <div class="col-12 p-5">

                <p><b>Realice tu propia página web:</b></p>

                <div class="container-sm col-sm" style="padding-top:40px;">
                    <!-- El formulario envía con el método POST los datos -->
                    <form method="post" action="ejercicio9Recepcion.php">

                        <!-- Este es el encabezado -->
                        <div class="form-group">
                            <label for="encabezado">Seleccione un encabezado:</label>
                            <select class="form-control" name="encabezado">
                                <option value="encabezado1">Encabezado 1</option>
                                <option value="encabezado2">Encabezado 2</option>
                                <option value="encabezado3">Encabezado 3</option>
                            </select>
                        </div>

                        <!-- Este es el cuerpo -->
                        <div class="form-group">
                            <label for="cuerpo">Seleccione un cuerpo:</label>
                            <select class="form-control" name="cuerpo">
                                <option value="cuerpo1">Cuerpo 1</option>
                                <option value="cuerpo2">Cuerpo 2</option>
                                <option value="cuerpo3">Cuerpo 3</option>
                            </select>
                        </div>

                        <!-- Este es el pie -->
                        <div class="form-group">
                            <label for="pie">Seleccione un pie:</label>
                            <select class="form-control" name="pie">
                                <option value="pie1">Pie 1</option>
                                <option value="pie2">Pie 2</option>
                                <option value="pie3">Pie 3</option>
                            </select>
                        </div>

                        <!-- Este es el estilo -->
                        <div class="form-group">
                            <label for="estilo">Seleccione un estilo:</label>
                            <select class="form-control" name="estilo">
                                <option value="estilo1">Estilo 1</option>
                                <option value="estilo2">Estilo 2</option>
                                <option value="estilo3">Estilo 3</option>
                            </select>
                        </div>

                        <!-- Botón de enviar -->
                        <div class="container-sm col-12 pt-3">
                            <!-- Este botón lanza el formulario al ser tipo submit -->
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
