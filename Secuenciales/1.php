
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
        Nombre<input type="text" name="nombre">
        Apellido<input type="text" name="apellido">
        <input type="submit" name="btnMostrar" value="Mostrar">
    </form>
<?php
$name = $_POST[('nombre')];
$lastname = $_POST[('apellido')];

if(isset($_POST['btnMostrar'])){
    echo "$lastname  ";
    echo $name;
}
?>
</body>
</html>
