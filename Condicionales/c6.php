<!DOCTYPE html>
<html>
<head>
	<title>taller condicional 6</title>
</head>
<body>
	<form action="c6.php" method="POST">
	
	<h3>INTRODUZCA LA PRIMERA NOTA:</h3><input type="text" name="a" size="10">
	<h3>INTRODUZCA LA SEGUNDA NOTA:</h3><input type="text" name="b" size="10">
	<h3>INTRODUZCA LA TERCERA NOTA:</h3><input type="text" name="c" size="10">

	
	<input type="submit" value="Calcular">
	<br>

</form>
<?php

	$num1=$_POST['a'];
	$num2=$_POST['b'];
	$num3=$_POST['c'];
	$total=($num1+$num2+$num3)/3;


	if ($total>10.5) {

		echo "<h1>"."Su promedio total es de: ".$total."<br>"."Por lo tanto usted ha APROBADO"."</h1>";
	}
	else{
		echo "<h1>"."Su promedio total es de: ".$total."<br>"."Por lo tanto usted ha REPROBADO"."</h1>";
	}


?>

</body>
</html>