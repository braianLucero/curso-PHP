<?php

/* This code is establishing a connection to a MySQL database using PDO (PHP Data Objects) in PHP. It
sets the server name, username, and password for the database connection, and then uses a try-catch
block to attempt to connect to the database. If the connection is successful, it sets an attribute
for error reporting and displays a message indicating that the connection was established. If the
connection fails, it displays an error message. */

    $servidor = "localhost"; // 127.0.0.1 
    $usuario = "root"; 
    $contrasenia ="";

    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'JUGANDO CON LA PROGRAMACION ', 'FOTO.JPG')";

    // metodo exec Ejecuta una sentencia SQL y devuelve el número de filas afectadas
        $conexion ->exec($sql);

        echo "Conexion establecida";
    }catch(PDOException $error){
        echo "Conexion erronea".$error;             
    } 
    
    
    

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="ejercicio28.html" method = "post" >
 
        <input type="submit" value = "Back">
    </form>
</body>
</html>