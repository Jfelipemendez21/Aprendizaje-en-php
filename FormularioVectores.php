<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario vectores</title>
</head>
<body>
<form action="" method="post">
     <label for="">0</label>
     <input type="text" name="numero0"> <br>
     <label for="">1</label>
     <input type="text" name="numero1"> <br>
     <label for="">2</label>
     <input type="text" name="numero2"> <br>
     <label for="">3</label>
     <input type="text" name="numero3"> <br>
     <label for="">4</label>
     <input type="text" name="numero4"> <br>
     <label for="">5</label>
     <input type="text" name="numero5"> <br>
     <label for="">6</label>
     <input type="text" name="numero6"> <br>
     <label for="">7</label>
     <input type="text" name="numero7"> <br>
     <input type="submit" name="btnEnviar" value="Enviar">
  
    </form>
</body>
</html>

<?php

$numeroCero= $_POST[('numero0')];
$numeroUno= $_POST[('numero1')];
$numeroDos= $_POST[('numero2')];
$numeroTres= $_POST[('numero3')];
$numeroCuatro= $_POST[('numero4')];
$numeroCinco= $_POST[('numero5')];
$numeroSeis= $_POST[('numero6')];
$numeroSiete= $_POST[('numero7')];


if(isset($_POST[('btnEnviar')])){
$Suma= $numeroCero+$numeroUno+$numeroDos+$numeroTres+$numeroCuatro+$numeroCinco+$numeroSeis+$numeroSiete;
echo "<h1> El vector tiene 8 elementos </h1> ";
echo "0= $numeroCero <br> 1= $numeroUno <br> 2= $numeroDos <br> 3= $numeroTres <br> 4= $numeroCuatro <br> 5= $numeroCinco <br> 6= $numeroSeis <br> 7= $numeroSiete <br>" ;
echo "<br> La suma es igual a: $Suma";
}
?>