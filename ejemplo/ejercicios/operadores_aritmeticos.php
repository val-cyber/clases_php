<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*1. Aritmetics Operators */
// + - * / ** %
$x = 20;
$y = 3;
$z = null;
$z2 = null;
$z3 = null;
$z4 = null;
$z5 = null;
$z6 = null;

$z = $x + $y;
$z2 = $x - $y;
$z3 = $x * $y;
$z4 = $x ** $y;
$z5 = $x / $y;
$z6 = $x % $y;
echo "{$z}<br>";
echo "{$z2}<br>";
echo " {$z3}<br>";
echo "{$z4}<br>";
echo "{$z5}<br>";
echo "hola que tal $z6 <br>";
/* 2 - increment/decrement operators */
// ++ --

$counter = 0;
$counter++;
echo $counter;

// en 2 o mas valores

$counter += 2;
echo "<br>$counter";



/*3 - Jerarquie - precedence */
//1. ()
//2. **
//3. * / %
// 4. + -
$total = 4 + 5 * 10;
echo "<br> $total";



?>
</body>
</html>