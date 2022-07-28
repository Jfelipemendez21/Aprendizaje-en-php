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

        <h1>Articulo:</h1>
        <p>Jabon en barra</p>
        <h2>precio:</h2>
        <p>$3.000</p>
        <input type="submit" name="btnCalc" value="Calcular descuento">

    </form>
</body>
</html>

<?php
$precio= 3000;    
$Descuento= $precio*0.5;
$total= $precio-$Descuento;

if(isset($_POST[('btnCalc')])){
echo "<h1>Descuento</h1><p>$Descuento </p>";
echo "<h1>Total</h1> <br> <p>$total</p>";
}

?>