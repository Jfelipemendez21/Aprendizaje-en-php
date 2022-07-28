<!DOCTYPE html>
<html>
<head>
	<title>taller condicional 8</title>
</head>
<body>

<form action="c8.php" method="POST">
	
	<h3>INTRODUZCA EL NUMERO:</h3><input type="text" name="a" size="10">
	

	
	<input type="submit" value="Calcular">
	<br>
</form>

<?php
$num1=$_POST['a'];

if ($num1>0) {
	echo "<h1>"."El numero: ".$num1."</h1>";
	echo "<br>";
	echo "<h1>"."ES POSITIVO"."</h1>";
}
elseif ($num1<0) {
	echo "<h1>"."El numero: ".$num1."</h1>";
	echo "<br>";
	echo "<h1>"."ES NEGATIVO"."</h1>";
}
elseif ($num1==0) {
	echo "<h1>"."El numero: ".$num1."</h1>";
	echo "<br>";
	echo "<h1>"."ES NEUTRO"."</h1>";
}


?>

</body>
</html>