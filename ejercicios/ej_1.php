<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ej_1.php" method="post">
    <label for="">nota 1: </label>
    <input type="text" name="nota1" id="">

    <label for="">nota 2: </label>
    <input type="text" name="nota2" id="">

    <label for="">nota 3: </label>
    <input type="text" name="nota3" id="">
    <input type="submit" value="Send">

    </form>
</body>
</html>
<?php

if($_POST){
    $nota1 = "{$_POST['nota1']}";
    $nota2 = "{$_POST['nota2']}";
    $nota3 = "{$_POST['nota3']}";
    $promedio = $nota1+$nota2+$nota3/3;

    echo "Su promedio es: {$promedio}";
    if($promedio <= 3.9){
        echo "<br> Estudie";
    }else{
        echo "<br> Becado";
    };
};

?>