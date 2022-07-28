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

        <label for="">Ingrese el valor del lado del cuadrado: </label> <br>
        <input type="text" name="lado">
        <input type="submit" name= "btnCalc" value="Calcular area">
        
    </form>
</body>
</html>

<?php
$valorLado= $_POST[('lado')];
$area= intval($valorLado)*intval($valorLado);

if(isset($_POST['btnCalc'])){
    echo"El area es igual a: $area";
}


?>