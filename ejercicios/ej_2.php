<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ej_2.php" method="post">
    <label for="">Ingrese Numero:</label>
    <input type="number" name="numero" id="">
    <input type="submit" value="Send">

    </form>
</body>
</html>


<?php
if($_POST){
    $numero = $_POST['numero'];
    if($numero % 2 == 0  && $numero > 10){
        echo "Si es par y es mayor a Diez";
    }else{
        echo "el numero no es par ni mayor a diez";
    };
};

?>