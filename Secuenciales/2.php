<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Año de nacimiento <input type="text" name="anio">
        <input type="submit" name="btnCalcular" value="Calcular edad">
    </form>
<?php
$anioNacimiento = $_POST[('anio')];
$anioActual= 2022;
$edad = intval($anioActual) - intval($anioNacimiento);

if(isset($_POST['btnCalcular'])){
    echo "$edad";
}
?>
</body>
</html>