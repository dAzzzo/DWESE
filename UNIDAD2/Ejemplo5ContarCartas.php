<?php
include "php/global.php";

if (isset($_POST["lista_cartas"])) {

    $cantidad_palo = [$nombre_palo[0] => 0, $nombre_palo[1] => 0, $nombre_palo[2] => 0, $nombre_palo[3] => 0,];

    //Asignamos el array de cartas selecionadas que recibimos del formulario
    $lista_cartas = $_POST["lista_cartas"];

    //Recorremos todo el array de cartas
    //Las cartas vienen codificadas asi numcartas-numpalo
    //por ejemplo 3 de corazones es 2-0

    foreach ($lista_cartas as $carta) {

        //Sacamos el ultimo poscion de la carta que es el palo
        $palo = substr($carta, 2, 2);
        //echo "$carta y $palo<br/>";

        //incrementamos en el array asociativo el palo de la carta actual
        $cantidad_palo[$nombre_palo[$palo]]++;
    }

    //Recorremos el array que tiene el numero de cartas de cada palo
    //Y muestro las cartas de cada palo

    var_dump($cantidad_palo);

    for ($i = 0; $i < $cantidad_palo; $i++) {
        echo "Hay " . $cantidad_palo[$cantidad_palo[$i]] . " cartas del palo $nombre_palo[$i] <br/>";
    }


}

?>