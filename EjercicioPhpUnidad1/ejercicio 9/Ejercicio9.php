<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lector de strings</title>
</head>
<body>

<div class="container-sm col-sm" style="padding-top:40px;">
        <!--El formulario envia con el metodo post los datos -->
        <form method="post" >

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nombre: </span>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba algo...">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Dirección: </span>
                <input type="text" name="direccion" class="form-control" placeholder="Escriba algo...">
            </div>

            </select>
    </div>

    <div class="col-12">
        <!-- este boton lanza el formulario al ser tipo submit -->
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>

    </div>

    <?php 
    /*Realiza un programa que lea el nombre y la dirección de una persona 
    en un formulario html y muestre la frase “_nombre_’s adress is _dirección_”. 
    Sin utilizar la concatenación. (Pantallazos del formulario y 
    funcionando)
    */
    
    if (!empty ($_POST)) {

     echo "</br>", $_POST["nombre"], "'s adress is ", $_POST["direccion"];
    
    }
    ?>

</body>
</html>