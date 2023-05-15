<?php

// con esta session_start() nos sirve 
// para mantener imformacion en cualquier pagina mientras  el navegador este abierto  

session_start();

$_SESSION['usuario']="develoteca";
$_SESSION['estatus']="logueando";

echo "Sesion Iniciada".":<br/>";

echo 'usuario: '.$_SESSION['usuario']."<br/>"."estatus: ".$_SESSION['estatus'];
?>
