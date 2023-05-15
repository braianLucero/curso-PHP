<?php
$jsonArchivo = '[
    {"name": "brian" , "lastname":"lucero"},
    {"name":"pedro" , "lastname":"lorenzo"}
]';

$resultado = json_decode($jsonArchivo);

// print_r($resultado);
foreach ($resultado as  $personaCompleta) {
  echo ($personaCompleta->name)." ".($personaCompleta->lastname)."<br/>";
}
?>