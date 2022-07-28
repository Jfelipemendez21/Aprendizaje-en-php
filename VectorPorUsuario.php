<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
if(isset($_POST['vec'])){

    $vector= $_POST['vec'];
    $n= count($vector);
    $suma=0;
    echo"EL VECTOR TIENE $n ELEMENTOS <br>";
    for($i=0; $i<$n; $i++){
    echo "$i=$vector[$i] <br>" ;
    $suma= $suma+ $vector[$i];
    }
    echo"LA SUMA ES $suma <br>";
}
    ?>
    <form action="VectorPorUsuario.php" method="get">
     NUMERO DE ELEMENTOS: 
     <input type="text" name="n" size="5">
     <input type="submit" value="Aceptar" >
    </form>
    <br><br>
    <form action="VectorPorUsuario.php" method="post">
     <?php
     if(isset($_GET['n'])){
         $n=$_GET['n'];    
     }else{

        $n=3;
     }
     for($i=0;$i<$n; $i++){
         echo $i;
         echo "<input type='text' name='vec[]' size='10'>";
         echo "<br>";
     }
     

     ?>
     <input type="submit">
    </form>
</body>
</html>