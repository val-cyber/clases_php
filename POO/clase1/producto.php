<?php

class Producto
{
    public $nombre;
    public $cilindraje;
    public $marca;
    public $color;
    public $tipo;
    public $puestos;
    public $combustible;

    public function getNombre(){
        return $this-> nombre;
    }
    public function getCilindraje(){
        return  $this-> cilindraje;
    }
    public function getMarca(){
        return  $this-> marca;
    }
    public function getColor(){
        return $this->color;
    }
    public function getTipo(){
        return $this->tipo;
        
    }   
    public function getPuestos(){
        return $this->puestos;
    }
    public function getCombustible(){
        return $this->combustible;
    }
    //setters

    public function setNombre($nombre){
        $this-> nombre= $nombre;
    }
    public function setCilindraje($cilindraje){
        $this-> cilindraje = $cilindraje;
    }
    public function setMarca($marca){
        $this-> marca= $marca;
    }
    public function setColor($color){
        $this-> color = $color;
    }
    public function setTipo($tipo){
        $this-> tipo= $tipo;
    }
    public function setPuestos($puestos){
        $this->puestos= $puestos;
    }
    public function setCombustible($combustible){
        $this-> combustible = $combustible;
    }

}
$Sportage = new Producto();
$Sportage->setNombre("Kia Sportage Revolution");
$Sportage->setCilindraje("1.5");
$Sportage->setMarca("Kia");
$Sportage->setColor("Negro");
$Sportage->setTipo("Campero");
$Sportage->setPuestos("5");
$Sportage->setCombustible("ACPM");

echo $Sportage->getNombre(). "<br>";
echo $Sportage->getCilindraje()."<br>";
echo $Sportage->getMarca()."<br>";
echo $Sportage->getColor()."<br>";
echo $Sportage->getTipo()."<br>";
echo $Sportage->getPuestos()."<br>";
echo $Sportage->getCombustible()."<br>" ;
////////////////////////////////////////////////


$Merc = new Producto();
$Merc->setNombre("Mercedes SLR 300");
$Merc->setCilindraje("2982");
$Merc->setMarca("Mercedes Benz");
$Merc->setColor("Plata");
$Merc->setTipo("Deportivo");
$Merc->setPuestos("2");
$Merc->setCombustible("gasolina");

echo $Merc->getNombre(). "<br>";
echo $Merc->getCilindraje()."<br>";
echo $Merc->getMarca()."<br>";
echo $Merc->getColor()."<br>";
echo $Merc->getTipo()."<br>";
echo $Merc->getPuestos()."<br>";
echo $Merc->getCombustible()."<br>" ;




?>