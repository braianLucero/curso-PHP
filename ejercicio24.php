<?php


class Alumnos {
    public $nombre;
    private $edad;

    public function asignarNombre($nuevoNombre){
        $this->nombre = $nuevoNombre;
    }
    public function imprimir(){
        echo "hola me llamo ".$this->nombre;
    }
    public function edad(){
        $this->edad=20;
        return $this->edad;
    }
} 

$newName = new Alumnos();
$newName->asignarNombre('brian ');

$newName2 = new Alumnos();
$newName2->asignarNombre('');
$newName2 ->imprimir();

echo $newName2->nombre;
echo $newName2->edad();

echo $newName->nombre;



?>