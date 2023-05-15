
<?php 

if($_POST){
    $txtNombre=$_POST['txtNombre'];
    $txtLasname = $_POST['txtLasname'];

    echo 'hola '.$txtNombre." ".$txtLasname;

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
<form action="ejercicio4.php" method="post">
        Name:
        <input type="text" name="txtNombre" id="">
        <br/>
        Lasname:
        <input type="text" name= "txtLasname" id="">
        <br/>
        <input type="submit" value="enviar">

    </form>
</body>
</html>