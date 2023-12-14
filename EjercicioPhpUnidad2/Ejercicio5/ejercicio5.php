<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>


<body>

    <?php
    /*Escriba una web que utilice un formulario para crear un jugador de d&d5 utilizando la hoja de personaje como base
    https://media.wizards.com/2021/dnd/downloads/dnd_blankcharactersheet_es.pdf. Cómo mínimo permitirá  introducir los datos
    las cabeceras de las dos hojas y las características básicas (fuerza,destreza,...). Utilizar bootstrap 5.3. Utilizar los controles
    range, text, select, radio, checkbox en el formulario. La raza sera un radio y la clase un checkbox, deben utilizarse las originales de d&d.
    Escribir la parte servidora que reciba los datos y compruebe lo siguiente;
    La media de las características no sea mayor de 15. Debe de comprobarse también que el rango de las características, no debe superar 20 ninguna.

    El nombre, la clase, la raza y las características deberá de guardarse en un array asociativo.
    Si hay errores, volverá a cargar el formulario original, sino cargara una hoja de personaje en una tabla con los datos del array asociativo.
    Con una imagen distinta para cada combinación de raza y clas(combinacion solo humano y enano con clase, el resto de razas una imagen unica).


    */

    ?>

    <div class="container-sm col-sm" style="padding-top:40px;">
        <div class="container-sm pt-4 pl-4 pr-4">
            <div class="row">
                <div class="col-12 p-5">


                    <div class="container-sm col-sm" style="padding-top:40px;">
                        <!--El formulario envia con el metodo post los datos -->
                        <form method="post" action="ejercicio5Recepcion.php">

                            <!-- Creamos la cabecera -->
                            <h2>Cabecera</h2>


                            <!-- En el checkbox hay que poner un name obligatoriamente y el value debe ser el mismo que el texto para que se pueda guardar -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" style="margin-bottom:10px" id="basic-addon1">Clase:
                                </span>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox1" name="clase[]"
                                        value="Artificiero" /> Artificiero</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox2" name="clase[]"
                                        value="Barbaro" /> Barbaro</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox3" name="clase[]"
                                        value="Bardo" /> Bardo</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox4" name="clase[]"
                                        value="Clerigo" /> Clerigo</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox5" name="clase[]"
                                        value="Druida" /> Druida</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox6" name="clase[]"
                                        value="Luchador" /> Luchador</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox7" name="clase[]"
                                        value="Monge" /> Monge</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox8" name="clase[]"
                                        value="Paladin" /> Paladín</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox9" name="clase[]"
                                        value="Explorador" /> Explorador</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox10" name="clase[]"
                                        value="Picaro" /> Pícaro</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox11" name="clase[]"
                                        value="Sacerdote" /> Sacerdote</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox12" name="clase[]"
                                        value="Brujo" /> Brujo</label><br>
                                <label><input class="form-check-input px-2" type="checkbox" id="cbox13" name="clase[]"
                                        value="Mago" /> Mago</label><br>




                            </div>


                            <!-- Creamos el transfondo con un input -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Transfondo: </span>
                                <input type="text" name="transfondo" class="form-control" placeholder="Escriba algo...">
                            </div>



                            <!-- Creamos el nombre con un input -->
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                                <input type="text" name="nombre" class="form-control" placeholder="Escriba algo...">
                            </div>



                            <!-- Esto es la eleccion de la raza por medio d e un radio -->
                            <div>
                                <span class="input-group-text" style="margin-bottom:10px" id="basic-addon1">Raza:
                                </span>
                                <div class="form-check">



                                    <input class="form-check-input" type="radio" name="raza" value="elfo"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Elfo
                                    </label>
                                    <!-- <img src="elfo.jpg" alt="elfo"> -->
                                </div>


                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="orco"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Orco
                                    </label>
                                    <!-- <img src="orco.jpg" alt="orco"> -->
                                </div>

                                <div class="form-check">

                                    <input class="form-check-input" type="radio" name="raza" value="humano"
                                        id="flexRadioDefault1" checked="checked">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Humano
                                    </label>


                                </div>

                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="mediano"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Mediano
                                    </label>
                                    <!-- <img src="mediano.jpg" alt="medinao"> -->
                                </div>


                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="enano"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Enano
                                    </label>


                                </div>

                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="duende"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Duende
                                    </label>
                                    <!-- <img src="duende.jpg" alt="duende"> -->
                                </div>


                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="goblin"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Goblin
                                    </label>
                                    <!-- <img src="goblin.jpg" alt="goblin"> -->
                                </div>


                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="gnomo"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Gnomo
                                    </label>
                                    <!-- <img src="gnomo.jpg" alt="gnomo"> -->
                                </div>

                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="trasgo"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Trasgo
                                    </label>
                                    <!-- <img src="trasgo.jpg" alt="trasgo"> -->
                                </div>


                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="centauro"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Centauro
                                    </label>
                                    <!-- <img src="centauro.jpg" alt="centuaro"> -->
                                </div>


                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="golem"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Golem
                                    </label>
                                    <!-- <img src="golem.jpg" alt="golem"> -->
                                </div>


                                <div class="form-check">


                                    <input class="form-check-input" type="radio" name="raza" value="dragonBorn"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        DragonBorn
                                    </label>
                                    <!-- <img src="dragonBorn.jpg" alt="dragonBorn"> -->
                                </div>


                            </div>


                            <!-- Aquí creamos la alineamiento psicológico-->
                            <div class="input-group mb-3" style="margin-top:15px">
                                <span class="input-group-text" style="" id="basic-addon1">Alineamiento: </span>
                                <input class="form-control" name="alineamiento" list="datalistOptions2"
                                    id="exampleDataList" placeholder="Seleccione algo...">
                                <datalist id="datalistOptions2">


                                    <option value="Lawful Good">
                                    <option value="Neutral Good">
                                    <option value="Chaotic Good">
                                    <option value="Lawful Neutral">
                                    <option value="True Neutral" selected=selected>
                                    <option value="Chaotic Neutral">
                                    <option value="Lawful Evil">
                                    <option value="Neutral Evil">
                                    <option value="Chaotic Evil">


                                </datalist>
                           </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">XP: </span>
                                <select name="xp" class="form-select col-sm-10" aria-label="Escriba algo...">
                                    <option selected>Seleciona tu exp.</option>
                                    <?php
                                    //Creamos con un bucle todas las opciones
                                    for ($i = 1; $i < 101; $i++) {
                                        echo "<option value='$i'>$i</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Edad: </span>
                                <select name="edad" class="form-select col-sm-10" aria-label="Escriba algo...">
                                    <option selected>Seleciona tu edad</option>
                                    <?php
                                    //Creamos con un bucle todas las opciones
                                    for ($i = 1; $i < 801; $i++) {
                                        echo "<option value='$i'>$i</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Altura: </span>
                                <input type="text" name="altura" class="form-control" placeholder="Escriba algo...">
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Peso: </span>
                                <input type="text" name="peso" class="form-control" placeholder="Escriba algo...">
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Ojos: </span>
                                <input type="text" name="ojos" class="form-control" placeholder="Escriba algo...">
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Piel: </span>
                                <input type="text" name="piel" class="form-control" placeholder="Escriba algo...">
                            </div>




                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Pelo: </span>
                                <input type="text" name="pelo" class="form-control" placeholder="Escriba algo...">
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Aptitud Mágica: </span>
                                <select name="AptitudMagica" class="form-select col-sm-10" aria-label="Escriba algo...">
                                    <option selected>Cantidad...</option>
                                    <?php
                                    //Creamos con un bucle todas las opciones
                                    for ($i = 1; $i < 11; $i++) {
                                        echo "<option value='$i'>$i</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">CD Tirada de salvación de conjuros:
                                </span>
                                <select name="TiradaSalvacion" class="form-select col-sm-10"
                                    aria-label="Escriba algo...">
                                    <option selected>Cantidad...</option>
                                    <?php
                                    //Creamos con un bucle todas las opciones
                                    for ($i = 1; $i < 11; $i++) {
                                        echo "<option value='$i'>$i</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>


                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Bonificador de ataque de conjuros:
                                </span>
                                <select name="BonificadorAtaque" class="form-select col-sm-10"
                                    aria-label="Escriba algo...">
                                    <option selected>Cantidad...</option>
                                    <?php
                                    //Creamos con un bucle todas las opciones
                                    for ($i = 1; $i < 11; $i++) {
                                        echo "<option value='$i'>$i</option>\n";
                                    }
                                    ?>
                                </select>
                            </div>
                            <h2>Características</h2>


                            <label for="customRange3" class="form-label">Fuerza</label>
                            <input type="range" class="form-range" name="fuerza" min="0" max="20" step="1"
                                id="customRange3">




                            <label for="customRange3" class="form-label">Destreza</label>
                            <input type="range" class="form-range" name="destreza" min="0" max="20" step="1"
                                id="customRange3">




                            <label for="customRange3" class="form-label">Constitución</label>
                            <input type="range" class="form-range" name="constitucion" min="0" max="20" step="1"
                                id="customRange3">




                            <label for="customRange3" class="form-label">Inteligencia</label>
                            <input type="range" class="form-range" name="inteligencia" min="0" max="20" step="1"
                                id="customRange3">




                            <label for="customRange3" class="form-label">Sabiduria</label>
                            <input type="range" class="form-range" name="sabiduria" min="0" max="20" step="1"
                                id="customRange3">




                            <label for="customRange3" class="form-label">Carisma</label>
                            <input type="range" class="form-range" name="carisma" min="0" max="20" step="1"
                                id="customRange3">




                            <div class="container-sm col-12 pt-3">
                                <!-- este boton lanza el formulario al ser tipo submit -->
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>


                        </form>




                    </div>
                </div>
            </div>


        </div>


    </div>

</body>


</html>