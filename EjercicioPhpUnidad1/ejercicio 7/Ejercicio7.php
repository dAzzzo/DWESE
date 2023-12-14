<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas</title>
</head>
<body>
    <form method="post" >

        <?php 

        /*Crea un programa php que realice una simulación de tirada de dados, 
        tirando un dado de 10, uno de 20 y otro de 100. (Pantallazo funcionando)
        */
     

        //Dado de 10 caras
        echo "Valor del dado de 10 caras: ";
        function lanzarDado() {    
            $valor = rand (1,10);
            return $valor;
        }
        
        for ($i = 0; $i < 1; $i++){
            print(strval(lanzarDado()) . "  <br/>");
        }
        
        
        //Dado de 20 caras
        echo "Valor del dado de 20 caras: ";
        function lanzarDado2() {    
            $valor = rand (1,20);
            return $valor;
        }
        
        for ($i = 0; $i < 1; $i++){
            print(strval(lanzarDado2()) . "  <br/>");
        }
        
        //Dado de 100 caras
        echo "Valor del dado de 100 caras: ";
        function lanzarDado3() {    
            $valor = rand (1,100);
            return $valor;
        }
        
        for ($i = 0; $i < 1; $i++){
            print(strval(lanzarDado3()) . "  <br/>");
        }
    
        ?>

</body>
</html>