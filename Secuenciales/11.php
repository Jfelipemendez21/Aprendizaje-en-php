<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

       Ingrese el precio de la primera camisa: <input type="text" name="camisa1"> <br><br>
       Ingrese el precio de la segunda camisa: <input type="text" name="camisa2"> <br><br>
       Ingrese el precio de la tercera camisa: <input type="text" name="camisa3"> <br><br>

       <input type="submit" name="btnCalc" value="Calcular total">

    </form>
</body>
</html>

<?php

$camisa_uno= $_POST[('camisa1')];
$camisa_dos= $_POST[('camisa2')];
$camisa_tres= $_POST[('camisa3')];
$descuento= (intval($camisa_uno)+intval($camisa_dos)+intval($camisa_tres))*0.20;


if(isset($_POST[('btnCalc')])){

$total= (intval($camisa_uno)+intval($camisa_dos)+intval($camisa_tres))-$descuento; 
echo"El precio total con descuento incluido es: $total";

}

?>