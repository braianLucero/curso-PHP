<?php include('cabecera.php'); ?>
<?php include('conexion.php'); ?>

<?php
if($_POST){
print_r($_POST);
$nombre = $_POST["nombre"];
$objConexion = new conexion();
$sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', 'imagen.jpg', 'es un proyecto de hace mucho tiempo ')";
$objConexion->ejecutar($sql);

}

if($_GET){
    // DELETE FROM `proyectos` WHERE `proyectos`.`id` = 55;
    $objConexion = new conexion();
    $sql = 'DELETE FROM `proyectos` WHERE `proyectos`.`id` ='.$_GET['borrar'];
    $objConexion->ejecutar($sql);
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar('SELECT * FROM `proyectos` ');
        // print_r($resultado);
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
                    Nombre del proyecto: <input class ="form-control "type="text" name="nombre" id="">
                    </br>
                    Imagen del proyecto: <input class ="form-control " type="file" name="archivo" id="">
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
                    <td><?php echo $proyecto['imagen']; ?></td>
                    <td><?php echo $proyecto['descripcion']; ?></td>
                    <td><a class="btn btn-outline-danger" href="?borrar = <?php echo $proyecto['id']; ?>">Eliminar</a></td>
                </tr>

            <?php } ?>

            </tbody>
          </table>
        </div>
    </div>
</div>




<div class="table-responsive">

</div>

<?php include('pie.php'); ?>