<?php include('cabecera.php'); ?>
<?php include('conexion.php'); ?>

<?php
    if($_POST){
    $nombre = $_POST["nombre"];
    $descripcion = $_POST['descripcion'];

    $fecha= new DateTime();

    $img= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagen_temporal = $_FILES['archivo']['tmp_name'];

    move_uploaded_file($imagen_temporal,"imagenes/".$img);

    $objConexion = new conexion();

    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$img', '$descripcion')";

    $objConexion->ejecutar($sql);

    header("location:portafolio.php");  // redirreccionar la url cuando hace alguna accion (funcion)
}

// Verificar si se ha enviado un parámetro 'borrar' a través de $_GET
if (isset($_GET['borrar'])) {
    $id = $_GET['borrar'];
    $objConexion = new conexion();

    $imagen=$objConexion->consultar('SELECT imagen FROM `proyectos` WHERE id='.$id);

   unlink("imagenes/".$imagen[0]['imagen']);  
   $sql = 'DELETE FROM `proyectos` WHERE `proyectos`.`id` ='.$id;
   $objConexion->ejecutar($sql);
   header("location:portafolio.php");
}


$objConexion = new conexion();  
$proyectos = $objConexion->consultar('SELECT * FROM `proyectos`');


?>

<style>
        body {
            background-image: url('fondo.avif');
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


</br>

<div class="container"> 
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="border: 0.1em solid #000;">
                <div class="card-header bg-dark text-white" >
                    Datos del proyecto
                </div>
                <div class="card-body" style="background:rgb(0,0,0,0.1);">
                <form action="portafolio.php" method="post" enctype ="multipart/form-data">
                    Nombre del proyecto: <input required class ="form-control " style="background:#e9ecef;" type="text" name="nombre" id="">
                    </br>
                    Imagen del proyecto: <input required class ="form-control " style="background:#f1f1f1;" type="file" name="archivo" id="">
                    </br>
                    Descripcion:
                    <textarea class = "form-control"name="descripcion" id="" style="background:#e9ecef;" cols="30" rows="3"></textarea>
                    </br>
                    <input class ="btn btn-dark" type="submit" value="Enviar">
                </form>
                </div>      

            </div>
        </div>

        <div class="col-md-6">
            <table class="table ">
                <thead class = "thead-dark">
                    
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Description</th>
                        <th scope="col">Acciones</th>
                    </tr>
    
                </thead>

                <tbody>
                    <?php foreach($proyectos as $proyecto){ ?>
                        <tr>
                            <td scope="row"><?php echo $proyecto['id']; ?></td>
                            <td scope="row"><?php echo $proyecto['nombre']; ?></td>

                            <td scope="row">
                                <img class="img-fluid w-80 rounded" width="100%" src="imagenes/<?php echo $proyecto['imagen']; ?>" alt=""> 
                            </td>

                            <td><?php echo $proyecto['descripcion']; ?></td>
                            <td><a class="btn btn-outline-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<?php include('pie.php'); ?>