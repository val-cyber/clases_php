<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ej_4.php" method="post">
        <label for="">nombre persona 1:</label>
        <input type="text" name="nombre1">
        <label for="">edad persona 1:</label>
        <input type="text" name="edad1" id="">

        <label for="">nombre persona 2:</label>
        <input type="text" name="nombre2">
        <label for="">edad persona 2:</label>
        <input type="text" name="edad2" id="">

        <label for="">nombre persona 3:</label>
        <input type="text" name="nombre3">
        <label for="">edad persona 3:</label>
        <input type="text" name="edad3" id="">


    </form>
</body>
</html>

<?php
$max = 0
if($_POST){
    $nombre1 = "{$_POST['nombre1']}";
    $edad1 = "{$_POST['edad1']}";

    $nombre2 = "{$_POST['nombre2']}";
    $edad2 = "{$_POST['edad2']}";

    $nombre3 = "{$_POST['nombre3']}";
    $edad3 = "{$_POST['edad3']}";
}if($edad1 >= $max){
    $max = $edad1;
};

?>