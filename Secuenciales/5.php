<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area de un triangulo rectangulo</h1>
    <form method="post">

        <label for="">Ingrese la base del triangulo: </label> <br>
        <input type="text" name="base"><br>
        <label for="">Ingrese la altura del triangulo: </label> <br>
        <input type="text" name="altura"> <br> <br>
        <input type="submit" name= "btnCalc" value="Calcular area">
        
    </form>
</body>
</html>

<?php
$valorBase= $_POST[('base')];
$valorAlt= $_POST[('altura')];
$area= (floatval($valorAlt)*floatval($valorBase))/2;

if(isset($_POST['btnCalc'])){
    echo"El area es igual a: $area";
}


?>