<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="menu.php" method="post">

    <h1 for="">-----MENÚ-------</h1><br>
    1. Lectura de datos<br>
    2. Crear Objeto<br>
    3. Mostrar Objeto<br>
    4. Crear Array<br>
    5. Mostrar Array<br>
    6. Elimine el primer elemento del array<br>
    7. Elimine el último elemento del array<br>
    8. Eliminar cualquier elemento del Array<br>
    9. Agregar elemento al comienzo del array<br>
    10. Agregar elemento al final del array<br>
    11. Crear array con Objetos<br>
    12. Iterar array con Objetos con FOR <br>
    13. Iterar array con objetos con ForEach <br>
    14. Iterar array con objetos con Map y crear copia <br>
    15. Reiniciar <br>
    <input type="number" name="opcion" id=""> ingrese la opcion 
    <input type="submit" value="Send">
    


    <?php
    
    if(isset($_POST)){
        $opcion = $_POST['opcion'];

        switch ($opcion) {
        case '1':
            echo "hey";
            /* echo "<br> pon tu nombre:<input type='text' name='name'> <input type='submit' value='Saludar'><input type='hidden' name='opcion' value='1'>";
            $name = $_POST['name'];
            if($name != ''){

                echo "Hola $name, ¿cómo estás?";
            }else{
                echo "hey escribe tu nombre!";
            } */
            break;
        case '2':


            
              

            echo "Creaste el objeto Automoviles";
            break;
        case '3':
          

          class Carro {
            private $marca;
            private $modelo;
            private $color;
          
            public function __construct($marca, $modelo, $color) {
              $this->marca = $marca;
              $this->modelo = $modelo;
              $this->color = $color;
            }
          
            public function obtenerMarca() {
              return $this->marca;
            }
          
            public function obtenerModelo() {
              return $this->modelo;
            }
          
            public function obtenerColor() {
              return $this->color;
            }
          
            public function imprimirDetalles() {
              echo "<br>Marca: " . $this->marca . "<br> Modelo: " . $this->modelo . "<br> Color: " . $this->color . "<br>"  ;
            }
          }
          
          // Crear un objeto Carro
          $miCarro = new Carro("Toyota", "Corolla", "Rojo");
          
          // Obtener y mostrar los detalles del carro
          /* echo $miCarro->obtenerMarca() . "\n";
          echo $miCarro->obtenerModelo() . "\n";
          echo $miCarro->obtenerColor() . "\n"; */
          
          // Imprimir los detalles del carro
          $miCarro->imprimirDetalles();
          
          
          
        default:
            # code...
            break;
    }
        
    }
    

    ?>

    </form>
</body>
</html>
