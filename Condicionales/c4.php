<!DOCTYPE html>
<html>
<head>
	<title>taller condicional 4</title>
</head>
<body>
	<form action="c4.php" method="POST">
	
	<h3>INTRODUZCA SU EDAD:</h3><input type="text" name="a" size="10">

	
	<input type="submit" value="Enviar">
	<br>

</form>
<?php

	$edad=$_POST['a'];


	if ($edad<45) {

		echo "<h1>"."Su edad es: ".$edad."<br>"."Por lo tanto usted es una persona joven"."</h1>";
	}
	else{
		echo "<h1>"."Su edad es: ".$edad."<br>"."Por lo tanto usted es una persona vieja"."</h1>";
	}


?>

</body>
</html>