<?php
    if($_POST){
        $boton = $_POST['btnValor'];
        switch($boton){
            case 1:
                echo 'el boton 1 ';
                break;
                case 2:
                    echo 'el boton 2 ';
                    break;
                    case 3:
                        echo 'el boton 3 ';
                        break;
            
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
    <form action="ejercicio9.php " method="post" >

    <input type="submit" name = ' btnValor' value = '1'>
    <br/>
    <input type="submit" name = ' btnValor' value = '2'>   
    <br/>
    <input type="submit"  name =' btnValor' value = '3'>
    </form>
</body>
</html>