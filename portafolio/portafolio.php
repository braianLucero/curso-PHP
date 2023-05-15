<?php include('cabecera.php'); ?>
</br>
<div class="card">
    <div class="card-header">
        Datos del proyecto
    </div>
    <div class="card-body">
    <form action="portafolio.php" method="post">
        Nombre del proyecto: <input class ="form-control "type="text" name="nombre" id="">
        </br>
        Imagen del proyecto: <input class ="form-control " type="file" name="archivo" id="">
        </br>
        <input class ="btn btn-success " type="submit" value="Enviar">
    </form>
    </div>

</div>


<?php include('pie.php'); ?>