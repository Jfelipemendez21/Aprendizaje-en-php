<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="ingresoLetra"> Presione la letra "Y" <br> 
        <input type="submit" value="Mostrar si es correcto"> <br> 
        <?php

        $letra= $_POST[('ingresoLetra')];

        if($letra==="y" || $letra==="Y"){
        echo"Eres inteligente";
        }else{
        echo"No sea bruto ome";
        }

        ?>




    </form>
    
</body>
</html>

