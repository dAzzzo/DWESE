<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    define("MAXHP", 3000);
    //Función para depurar variables: var_dump(x)
    
    $nombre = "Pedro";
    $edad = "34";
    $pi = 3.14;
    $casado = true;
    $ciudades = ['sevillla', 'cai', 'soria'];

    //Mostramos por pantalla el tipo de dato y valor
    echo var_dump($nombre) . "<br/>";
    echo var_dump($edad) . "<br/>";
    echo var_dump($pi) . "<br/>";
    echo var_dump($casado) . "<br/>";
    echo var_dump($ciudades) . "<br/>";

    //strlen nos muestra la longitd de un string
    echo "Longitud posicion 2" . strlen($ciudades[1]) . "<br/>";

    //str_word_count nos dice cuantas palabras 
    echo "Palabras en posición 2: " . str_word_count($ciudades[1]) . "<br/>";

    //Num aleatorio entre 10 y 35
    echo rand(10.0, 35.0) . "<br/>"


        ?>

</body>

</html>