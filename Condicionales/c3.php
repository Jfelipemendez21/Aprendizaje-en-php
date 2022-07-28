<!DOCTYPE html>
<html>
<head>
	<title>taller condicional 3</title>
</head>
<body>
<form action="c3.php" method="POST">
	
	INTRODUZCA EL PRIMER NUMERO:<input type="text" name="a" size="10"> <br><br>
	INTRODUZCA EL SEGUNDO NUMERO:<input type="text" name="b" size="10"> <br><br>
	
	<input type="submit" value="enviar">
	<br>

</form>
<?php

	$num1=$_POST['a'];
	$num2=$_POST['b'];

	if ($num1>$num2) {

		echo "<h1>"."El numero mayor es: ".$num1."</h1>";
	}
	else{
		echo "<h1>"."El numero mayor es: ".$num2."</h1>";
	}


?>
</body>
</html>