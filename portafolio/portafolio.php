<?php include('cabecera.php'); ?>
<?php include('conexion.php'); ?>

<?php

if($_POST){
    // print_r($_POST); 
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



</br>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Datos del proyecto
                </div>
                <div class="card-body">
                <form action="portafolio.php" method="post" enctype ="multipart/form-data">
                    Nombre del proyecto: <input required class ="form-control "type="text" name="nombre" id="">
                    </br>
                    Imagen del proyecto: <input required class ="form-control " type="file" name="archivo" id="">
                    </br>
                    Descripcion:
                    <textarea class = "form-control"name="descripcion" id="" cols="30" rows="3"></textarea>
                    </br>
                    <input class ="btn btn-success " type="submit" value="Enviar">
                </form>
                </div>

            </div>
        </div>

        <div class="col-md-6">
         <table class="table table-primary">
            <thead>
                
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Description</th>
                    <th>Acciones</th>
                </tr>

            </thead>

            <tbody>
                
            <?php foreach($proyectos as $proyecto){ ?>

                <tr>
                    <td><?php echo $proyecto['id']; ?></td>
                    <td><?php echo $proyecto['nombre']; ?></td>

                    <td>
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