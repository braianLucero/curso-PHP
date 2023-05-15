<?php
// crando archivo de texto

    $nombreArchivo = 'archivo.txt';
    $contenidoArchivo = 'hola , saludos';

    $archivoAcrear = fopen($nombreArchivo,'w');

    fwrite($archivoAcrear,$contenidoArchivo);

    fclose($archivoAcrear);

?>