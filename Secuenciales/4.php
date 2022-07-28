<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Area de un circulo</h1>
    <form method="post">

        <label for="">Ingrese el valor del radio del circulo: </label> <br>
        <input type="text" name="radio">
        <input type="submit" name= "btnCalc" value="Calcular area">
        
    </form>
</body>
</html>

<?php
$valorRad= $_POST[('radio')];
$valorRadio= intval($valorRad);
$area= ($valorRadio*$valorRadio)*3.14;

if(isset($_POST['btnCalc'])){
    echo"El area es igual a: $area ^2";
}else if(($_POST[('radio')])==""){
    echo"error, intentelo de nuevo";
}


?>