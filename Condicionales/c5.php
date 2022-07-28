<!DOCTYPE html>
<html>
<head>
	<title>taller condicional 5</title>
</head>
<body>
<form action="c5.php" method="POST">
	
	<h3>INTRODUZCA SU ALTURA:</h3><input type="text" name="a" size="10">

	
	<input type="submit" value="Enviar">
	<br>

</form>
<?php

	$altura=$_POST['a'];


	if ($altura<=1.65) {

		echo "<h1>"."Su altura es: ".$altura."<br>"."Por lo tanto usted es una persona baja"."</h1>";
	}
	else{
		echo "<h1>"."Su altura es: ".$altura."<br>"."Por lo tanto usted es una persona alta"."</h1>";
	}


?>
</body>
</html>