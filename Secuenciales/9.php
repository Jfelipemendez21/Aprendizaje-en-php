<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area de un cuadrado</h1>
    <form method="post">

        <label for="">Ingrese primera edad: </label> <br>
        <input type="text" name="edadUno"><br>
        <label for="">Ingrese segunda edad: </label> <br>
        <input type="text" name="edadDos"><br>
        <label for="">Ingrese tercera edad: </label> <br>
        <input type="text" name="edadTres"><br><br>
        <input type="submit" name= "btnSum" value="Sumar edades">
        
    </form>

    <?php
    $Edad_uno= $_POST[('edadUno')];
    $Edad_dos= $_POST[('edadDos')];
    $Edad_tres= $_POST[('edadTres')];
    $sumEdades= intval($Edad_uno)+intval($Edad_dos)+intval($Edad_tres);
    if(isset($_POST[('btnSum')])){    
     echo"$sumEdades";
}


    ?>
</body>
</html>