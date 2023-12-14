<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio7 recepcion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body>

    <!-- Crear un formulario que lea los datos del cumpleaños de una persona, con un campo nombre, otro fecha , otro 
    de hora (utilizando los campos de html5) y un botón. Investigar las funciones de fecha de la siguiente
    https://www.mclibre.org/consultar/php/lecciones/php-fecha-hora.html .
    Crea una función que reciba la fecha y la hora como dos parametros string y devuelva un mensaje con el siguiente
    formato:
    “Bienvenido [nombre], estás en [primavera/otoño/verano/invierno] quedan xx días para las vacaciones de navidad y 
    xxx dias xxx horas para vacaciones de semana santa [del año que viene]. Tu cumpleaños [no] cae en fin de semana 
    y es el día [jueves, 3 de octubre del 22]”
    Siendo la fecha que se introduce en el formulario el cumpleaños del usuario. -->

    <?php
    // Comprobamos si se envió el formulario para mostrar los elementos generados
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nombre']) && isset($_POST['fechaCumple']) && isset($_POST['hora'])) {
            $nombre = $_POST['nombre'];
            $fecha = $_POST['fechaCumple'];
            $hora = $_POST['hora'];
            $mensaje = cumple($nombre, $fecha, $hora);
            echo $mensaje;
        }

    }


    function cumple($nombre, $fecha, $hora)
    {

        //Convertir la fecha a un objeto de fecha de PHP
        //obtenmos la fecha actual y su hora
        $fechaActual = new DateTime();
        $horaActual = new DateTime();


        //Esto sirve para sacar la estación
        //Obtener el número del mes de la fecha
        $mes = $fechaActual->format('n');

        //Aqui determinaos la estación del año basándote en el número del mes
        if ($mes >= 3 && $mes <= 5) {
            $estacion = 'Primavera';
        } elseif ($mes >= 6 && $mes <= 8) {
            $estacion = 'Verano';
        } elseif ($mes >= 9 && $mes <= 11) {
            $estacion = 'Otoño';
        } else {
            $estacion = 'Invierno';
        }


        //Comprobemos si el cumple cae en fin de semana, la N es para la semana y n es para el mes
        $finSemana = $fechaActual->format('N');

        if ($finSemana >= 6 && $finSemana <= 7) {
            $resultadoFinde = 'Si';
        } else {
            $resultadoFinde = 'No';
        }

        //Tenemos que ver y marcar las vacaciones de navidad y de semana santa
        //Fecha de Navidad de este año y semana santa
        //Para las horas que faltan calculamos cuanto falta para la media noche
        $fechaNavidad = new DateTime(date('Y') . '-12-25');
        $fechaSemanaSanta = new DateTime('2024-03-24');

        $mediaNoche = new DateTime('today 23:59:59');

        //Calcula la diferencia entre las fechas
        $diferenciaN = $fechaActual->diff($fechaNavidad);
        $diferenciaSS = $fechaActual->diff($fechaSemanaSanta);
        $diferenciaHSS = $horaActual->diff($mediaNoche);

        //Mostrar las horas restantes hasta la medianoche
        $horasRestantes = $diferenciaHSS->format('%H');

        //Obtener los días restantes
        $diasFaltantesN = $diferenciaN->format('%a');
        $diasFaltantesSS = $diferenciaSS->format('%a');

        //Ahora voy a sacar el año que viene, se usa un localtime para sacar el acutal y para sacar 
        //el el año en concreto se le añade 1901 porque empieza el formato x 123
        $fecha_actual = localtime(time(), 1);
        $anyo_siguiente = $fecha_actual["tm_year"] + 1901;


        return 'Bienvenido ' . $nombre . ', estás en ' . $estacion . ' quedan ' . $diasFaltantesN . ' días para 
        las vacaciones de navidad y ' . $diasFaltantesSS . ' días con ' . $horasRestantes . ' horas para las vacaciones 
        de semana santa del año ' . $anyo_siguiente . '. Tu cumpleaños ' . $resultadoFinde . ' cae en fin de semana y es el día ' . $fecha;
    }

    ?>

</body>

</html>