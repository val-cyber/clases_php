<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ej_3.php" method="post">
    <label for="">intensidad</label>
    <input type="number" name="intensidad" id="">

    <label for="">resistencia</label>
    <input type="number" name="resistencia" id="">
    <input type="submit" value="Calcular">

    

    </form>
</body>
</html>

<?php
if($_POST){
    $intensidad = "{$_POST['intensidad']}";
    $resistencia = "{$_POST['resistencia']}";
    $voltaje = $intensidad*$resistencia;
    echo "el voltaje es: $voltaje V";
};

?>
