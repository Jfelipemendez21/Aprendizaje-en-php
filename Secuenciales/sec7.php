<!DOCTYPE html>
<html>
<head>
	<title>taller secuencial 7</title>
</head>
<body>

	<form action="sec7.php" method="POST">
	
	INTRODUZCA UN NUMERO DE 4 CIFRAS:<input type="text" name="num" size="10"> <br><br>

	<input type="submit" name="enviar" value="Calcular">

</form>



	<?php
if (isset($_POST['enviar'])) {

	$num=$_POST['num'];

	

	$C4= $num %10;
	$C3= $num %100/10;
	$C2= $num %1000/100;
	$C1= $num %10000/1000;

	$c4=$C4;
	$c3=$C3;
	$c2=$C2;
	$c1=$C1;


	echo "Los numeros centrales son:".$C2.$C3;




}



	?>

</body>
</html>