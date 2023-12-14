<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio dados</title>
</head>

<body>

    <div class="container-sm col-sm" style="padding-top:40px;">

        <?php
        /*Escriba un programa que cada vez que se ejecute muestre la tirada de tres dados al azar. 
        Mostrar la tirada de dados con imágenes y detectar si ha tocado escalera (tres números consecutivos) 
        pareja (dos iguales) trio (tres iguales) o poker (tres unos)*/



        // Creamos los tres dados
        echo "Valor del primer dado: ";
        $dado1 = dado1();
        print(strval($dado1) . "<br/>");

        echo "Valor del segundo dado: ";
        $dado2 = dado2();
        print(strval($dado2) . "<br/>");

        echo "Valor del tercer dado: ";
        $dado3 = dado3();
        print(strval($dado3) . "<br/>");

        function dado1()
        {
            $valor1 = rand(1, 6);
            return $valor1;
        }

        function dado2()
        {
            $valor2 = rand(1, 6);
            return $valor2;
        }

        function dado3()
        {
            $valor3 = rand(1, 6);
            return $valor3;
        }

        //Creamos un array para guardar las imagenes 
        $Dado1 = array("1.png", "2.png", "3.png", "4.png", "5.png", "6.png");
        $Dado2 = array("1.png", "2.png", "3.png", "4.png", "5.png", "6.png");
        $Dado3 = array("1.png", "2.png", "3.png", "4.png", "5.png", "6.png");

        // Obtener el nombre de la imagen basado en el valor aleatorio
        // Resta 1 para ajustar el índice del array
        $imagen1 = $Dado1[$dado1 - 1];
        $imagen2 = $Dado2[$dado2 - 1];
        $imagen3 = $Dado3[$dado3 - 1];

        // Mostrar la imagen
        echo "<img src='img/" . $imagen1 . "' alt='Imagen Dado'>";
        echo "<img src='img/" . $imagen2 . "' alt='Imagen Dado'>";
        echo "<img src='img/" . $imagen3 . "' alt='Imagen Dado'>";



        /*Para realizar la escalera sin importar el orden sería:

         if (($dado3 > $dado2 && $dado2 > $dado1) || ($dado3 < $dado2 && $dado2 < $dado1) 
         || ($dado2 < $dado3 && $dado3 < $dado1) || ($dado2 > $dado3 && $dado3 > $dado1)
            || ($dado3 < $dado1 && $dado1 < $dado2) || ($dado3 > $dado1 && $dado1 > $dado2))  {
            echo "Los dados han dado una escalera";
        */

        if (($dado3 > $dado2 && $dado2 > $dado1) || ($dado3 < $dado2 && $dado2 < $dado1)) {
            echo "<br>Los dados han dado una escalera";
        } elseif ($dado1 == $dado2 && $dado2 == $dado3) {
            echo "<br>Los dados han dado un trío";
        } elseif ($dado1 == $dado2 || $dado1 == $dado3 || $dado2 == $dado3) {
            echo "<br>Los dados han dado una pareja";
        } elseif ($dado1 == 1 && $dado2 == 1 && $dado3 == 1) {
            echo "<br>POKER!";
        } else {
            echo "<br>Lo siento, no tuviste suerte :(";
        }

        ?>

    </div>

</body>

</html>