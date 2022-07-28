<!DOCTYPE html>
<html>
<head>
	<title>taller secuencial 8</title>
</head>
<body>

	<form action="sec8.php" method="POST">
	
	INTRODUZCA UN NUMERO DE 4 CIFRAS: <input type="text" name="num" size="10">

	<input type="submit" name="enviar" value="Calcular"><br><br>

</form>

<?php
if (isset($_POST['enviar'])) {

	$num=$_POST['num'];

	

	$C4= $num %10;
	$C3= $num %100/10;
	$C2= $num %1000/100;
	$C1= $num %10000/1000;

	$primer=($C1+$C2);
	$segundo=($C3+$C4);


	echo "La suma de los primeros dos numeros es: ".$primer;
	echo "<br>";
	echo "<br>";
	echo "la suma de los ultimos dos numeros es: ".$segundo;




}
?>
</body>
</html>