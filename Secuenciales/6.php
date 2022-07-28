<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CALCULAR PROMEDIO</h1>
    <form action="" method="post">
        Primera nota<input type="text" name="not_uno"> <br><br>
        Segunda nota<input type="text" name="not_dos"> <br><br>
        Tercera nota<input type="text" name="not_tres"> <br><br>

        <input type="submit" name="btnCalcular" value="Calcular">
    </form>
<?php
$nota1 = $_POST[('not_uno')];
$nota2 = $_POST[('not_dos')];
$nota3 = $_POST[('not_tres')];
$Promedio = (intval($nota1) + intval($nota2) + intval($nota3)) /3;
if(isset($_POST['btnCalcular'])){
    echo "Su promedio es: $Promedio";
}
?>
</body>
</html>