<?php include('cabecera.php'); ?>
<?php include('conexion.php'); ?>

<?php


$objConexion = new conexion();  
$proyectos = $objConexion->consultar('SELECT * FROM `proyectos`'); 


?>



<div class="row align-items-md-stretch">
    
    <div class="row align-items-md-stretch">
    <div class="col-12">
        <div class="h-100 p-5 bg-light border rounded-3">
            <h2>Add borders</h2>
            <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure
                to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both
                column's content for equal-height.</p>
            <button class="btn btn-primary" type="button">Example button</button>
        </div>
    </div>
</div>





<div class="row row-cols-1 row-cols-md-3 g-4">

<?php foreach($proyectos as $proyecto){ ?>

    <div class="col">
    <div class="card">
      <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      </div>
    </div>
  </div>

<?php } ?>

</div>

<?php include('pie.php'); ?>

