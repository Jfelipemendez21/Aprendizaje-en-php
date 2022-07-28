<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculaaaaaaa</h1>
    <form action="" method="post">
     <label for="">A:</label>
     <input type="text" name="numeroUno" id="numeroUno">
     <label for="">B:</label>
     <input type="text" name="numeroDos" id="numeroDos"> <br>
     <input type="submit" name="btnSum" value="Sumar">
     <input type="submit" name="btnRes" value="Restar">
     <input type="submit" name="btnMul" value="Multiplicar">
     <input type="submit" name="btnDiv" value="Dividir">
    </form>

</body>
</html>

<?php

$numeroUno= $_POST[('numeroUno')];
$numeroDos= $_POST[('numeroDos')];


if(isset($_POST[('btnSum')])){
$Suma= $numeroUno+$numeroDos;
echo"<h1>$numeroUno + $numeroDos</h1> <br> Es igual a: $Suma";
}else if(isset($_POST[('btnRes')])){
$Resta= $numeroUno-$numeroDos;
echo"<h1>$numeroUno - $numeroDos</h1> <br> Es igual a: $Resta";
}else if(isset($_POST[('btnMul')])){
$Multiplicacion= $numeroUno*$numeroDos;
echo"<h1>$numeroUno - $numeroDos</h1> <br> Es igual a: $Multiplicacion";
}else if(isset($_POST[('btnDiv')])){
$Division= $numeroUno/$numeroDos;
echo"<h1>$numeroUno / $numeroDos</h1> <br> Es igual a: $Division";
}else{
    echo"error";
}

?>
