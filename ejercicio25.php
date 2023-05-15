<?php


class Alumnos {
    public $nombre;
    private $edad;
    protected $altura;

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


class trabajador extends persona{
    public $puesto;

    public function presentarseComoTrabajador(){
        echo 'hola me llamo '.$this->nombre.'y soy '.$this->puesto;
    }
}

$newTrabajador = new trabajador();
$newTrabajador->asignarNombre('brian');
$newTrabajador->puesto="desarrollador";

$newTrabajador->presentarseComoTrabajador();


?>