<?php

abstract class Banco {

    public $nombre = "davivienda";
    
    public function getNombre(){
        return $this->nombre;
    }
}


class Sucursal extends Banco{

    public $direccion = "carrera 40";

    public function getDireccion(){
        return $this->direccion;
    }
}

$davCabecera = new Sucursal();
echo $davCabecera->getNombre()."<br>";
echo $davCabecera->getDireccion();




?>