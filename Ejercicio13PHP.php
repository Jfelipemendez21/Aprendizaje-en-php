<?php
$nombre= $_POST[('nombre')];
$cargo= $_POST[('cargo')];
$salario= $_POST[('salario')];

if(isset($_POST[('mostrar')])){
echo"<p>El nombre del empleado es: </p> <br> <h2>$nombre</h2>";
echo"<p>El cargo del empleado es: </p> <br> <h2>$cargo</h2>";
echo"<p>El salario del empleado es: </p> <br> <h2>$salario</h2>";

}
?>