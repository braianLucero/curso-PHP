<?php
    if($_POST){
        $valorA = $_POST['valorA'];
        $valorB = $_POST['valorB'];

        $division = $valorA/$valorB;

        echo $division;
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
    <form action="ejercicio6.php" method="post">
    valor A:
    <input type="text " name = "valorA">
    valor B:
    <input type="text " name = "valorB">
    <br/>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>