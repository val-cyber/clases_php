<?php
class Camper
{
    //1. atributos con modificadores de acceso:
        //private, public, protected.

        public $nombre ;
        public $email ;                                                                 
        public $numero;

    //2. metodo constructor (metodo magico)
    //en ocasiones se inicializa con valores parametrizados adentro del construct, si se ponen allí, entonces tambien se deben poner como argumento en la clase

        /* public function __construct($nombre, $email, $numero)    // dos guión de piso _ _ construct (para iniciaalizar valores propiedades)
        {

            $this->nombre = $nombre;
            $this->email = $email;
            $this->numero = $numero;

        } */

    //3. Tenemos metodos (getters and setters)
        //Metodos getter
        public function getNombre(){
            return $this->nombre ;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getNumero(){
            return $this-> numero;
        }
        //get --> obtener valores de los atributos
        //set --> modificar valores de atributos
        //metodos setter

        public function setNombre($nombre){
            $this-> nombre = $nombre;

        }

        public function setEmail($email){
            $this->email= $email;
        }

        public function setNumero($numero){
            $this-> numero = $numero;
        }

}
/* "Val", "val@gmail", "3541354354" */
$camper = new Camper ();
$camper-> setNombre("Maicol");
$camper->setEmail("maicol@gmail.com");
$camper->setNumero("32132132123");

echo $camper ->getNombre() . "<br>";
echo $camper -> getEmail() . "<br>";
echo $camper -> getNumero() . "<br>";

?>