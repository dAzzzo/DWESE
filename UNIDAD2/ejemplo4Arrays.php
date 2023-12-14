<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo Arrays</title>
</head>

<body>

    <?php

    $num_alumnos = random_int(15, 35);

    //Creamos las edades de los alumnos y les asignamos una edad
    for ($i = 0; $i < $num_alumnos; $i++) {
        //Asignamos una edad aleatoria a cada alumno
        $edad_alumnos[$i] = random_int(1, 120);
    }
    //suponemos que no sabemos cuantos alumnos tenemos utilizamos  count
    //para saber la longitud del array
    //Sabiendo la cantidad también se podría usar el num_alumnos
    for ($i = 0; $i < count($edad_alumnos); $i++) {
        if ($edad_alumnos[$i] >= 65)
            echo "El alumno" . ($i + 1) . " tiene  $edad_alumnos[$i] años.<br/>";
    }

    //Como un for pero no usa un contador, recorre automaticamente el bucle edad_alumnos
    //En la variable $edad se van asignando los valores del array
    //en cada repetición/iteración cambia el valor de $edad al de a siguiente posición
    foreach ($edad_alumnos as $edad) {

        echo "El alumno tiene  $edad años.<br/>";

        if ($edad <= 18)
            echo "Es menor de edad<br/>";
    }


    ?>

</body>

</html>