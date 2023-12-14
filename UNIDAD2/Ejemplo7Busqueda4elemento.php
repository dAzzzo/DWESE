<?php

$texto = "En este gran dia nos encontramos un dia soleado pero a la vez es un dia ventoso";

//str_word_count() nos cuenta todas las palabreas que hay en un texto
$num_palabras = str_word_count($texto);
echo "En el texto hay $num_palabras palabras <br/>",

    //Con substr_count noos dice cuentos elementos buscados hay en el texto
    $num_ocurrencias = substr_count($texto, "dia");
echo "En el texto hay $num_ocurrencias de la palabra  'dia' <br/>";

//Ejemplo buscamos la posicion dentro del texto donde esta la tercera palabra

$pos_ant = 0;

for ($i = 0; $i < 3; $i++) {
    //Buscamos en el texto la palabra dia a partir de la posicion indicada
    //Nos devuelve la posicion en la que lla encontro en pos_ant
    $pos_ant = strpos($texto, "dia", $pos_ant);
    //para la siguiente busqueda partimos de la poscion siguiente soy gay
    $pos_ant++;
}

echo "La primera ocurrencia de dia esta en la posicion $pos_ant";

?>