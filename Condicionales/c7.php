<!DOCTYPE html>
<html>
<head>
	<title>taller condicional 7</title>
</head>
<body>
	<form action="c7.php" method="POST">
	
	<h3>INTRODUZCA EL PRIMER NUMERO:</h3><input type="text" name="a" size="10">
	<h3>INTRODUZCA EL SEGUNDO NUMERO:</h3><input type="text" name="b" size="10">

	
	<input type="submit" value="Calcular">
	<br>
</form>

<?php

$num1=$_POST['a'];
$num2=$_POST['b'];

if ($num1==$num2) {

	$resultado=$num1*$num2;

	echo "<h1>"."Como los numeros son iguales estos se multiplican dando como resultado: ".$resultado."</h1>";

}
elseif ($num1>$num2) {

	$resultado=$num1-$num2;

	echo "<h1>"."Como el primer numero es mayor que el segundo estos se restan dando como resultado: ".$resultado."</h1>";
	
}
elseif ($num1<$num2) {

	$resultado=$num1+$num2;

	echo "<h1>"."Como el segundo numero es mayor que al primero estos se suman dando como resultado: ".$resultado."</h1>";
	
}



?>

</body>
</html>