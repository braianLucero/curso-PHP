<?php


    $servidor = "localhost"; // 127.0.0.1 
    $usuario = "root"; 
    $contrasenia ="";

    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM `fotos`";

        $sentencia = $conexion->prepare($sql);
        $sentencia->execute();
        
        // el metodo fetchall te trae todo en formato de un arreglo 

        $resultado = $sentencia->fetchall();

        foreach ($resultado as $foto) {
           echo $foto['nombre'].'<br/>';
        }

        // print_r($resultado);
        echo "Conexion establecida";
    }catch(PDOException $error){
        echo "Conexion erronea".$error;             
    } 
    
    
    

?>
