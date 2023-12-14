<!--  http://localhost/DES/DesEntServidor/UNIDAD1/ -->
<!--  Para ordenar todo hay que darle alt + shift + f -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario de ejemplo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-sm pt-4 pl-4 pr-4">
        <div class="row">
            <div class="col-7 p-5">

                <div class="container-sm col-sm" style="padding-top:40px;">
                    <!--El formulario envia con el metodo post los datos -->
                    <form method="post" action="Ejemplo3Recepcion.php">

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Nombre: </span>
                            <input type="text" name="nombre" class="form-control" placeholder="Nombre Usuario">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Telefono: </span>
                            <input type="text" name="telefono" class="form-control" placeholder="Telefono">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Edad: </span>
                            <select name="edad" class="form-select col-sm-10" aria-label="edad">
                                <option selected>Seleciona tu edad</option>
                                <?php
                                //Creamos con un bucle todas las opciones
                                for ($i = 1; $i < 141; $i++) {
                                    echo "<option value='$i'>$i</option>\n";
                                }
                                ?>
                            </select>
                        </div>
                        <span class="input-group-text" id="basic-addon1">Profesión: </span>
                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="profesion" value="mago"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Mago
                            </label>
                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="profesion" value="paladin"
                                id="flexRadioDefault1" checked="checked">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Paladín
                            </label>
                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="profesion" value="picaro"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Picaro
                            </label>
                        </div>

                        <div class="form-check">

                            <input class="form-check-input" type="radio" name="profesion" value="ladron"
                                id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Ladrón
                            </label>
                        </div>

                        <label for="customRange3" class="form-label">Puntos de vida</label>
                        <input type="range" class="form-range" name="Pvida" min="0" max="40" step="5" id="customRange3">

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Foto personaje</label>
                            <input class="form-control" type="file" name="imagenPerfil" id="formFile">
                        </div>
                        <div class="mb-3">
                            <label for="exampleColorInput" class="form-label">Color picker</label>
                            <input type="color" name="colorPerfil" class="form-control form-control-color"
                                id="exampleColorInput" value="#563d7c" title="Choose your color">
                        </div>

                        <label for="exampleDataList" class="form-label">Raza personaje</label>
                        <input class="form-control" name="razaPerfil" list="datalistOptions" id="exampleDataList"
                            placeholder="Type to search...">
                        <datalist id="datalistOptions">
                            <option value="Elfo">
                            <option value="Orko">
                            <option value="Duende">
                            <option value="Humano">
                            <option value="Trasgo" selected=selected>
                        </datalist>

                        <div class="container-sm col-12 pt-3">
                            <!-- este boton lanza el formulario al ser tipo submit -->
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>


    </div>

</body>

</html>