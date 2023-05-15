<?php
    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];


        if($valorA > $valorB){
            echo "el valor de A es mayor que el valor de B ";
        }else{
            echo "el valor de B es mayor que el de A ";
        }   
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio7.php" method="post">
    valor A:
    <input type="text " name = "valorA">
    valor B:
    <input type="text " name = "valorB">
    <br/>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>