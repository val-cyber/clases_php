<?php
class Jugador{
 
    private static $goles =5;



    public static function info(){
        return self::$goles;
    }
    
}
/* 
$jugador1 = new Jugador();
echo $jugador1->info(); 
echo $jugador1->infoN(); */
echo Jugador::info();



?>