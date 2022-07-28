<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <h1>La cantidad de productos ingresados corresponde a: </h1>



</form>
    
</body>
</html>
<?php
$productos= array("Manzana","Pera","Mango","Limon","Otros");

for($i=0; $i <= count($productos) ;$i++){
echo "<h2> Productos: </h2> <br> <p> $productos[$i] </p> <br>";
} 
?>