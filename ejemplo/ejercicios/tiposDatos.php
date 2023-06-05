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
  /*1. String - Serie de caracteré*/
  $customer = "falcao";
  echo "the customer {$customer}<br>";
  $favorite_food = "Panzerotti and Pizza";
  echo "{$customer} favorite food it's {$favorite_food} <br>";
  /*2 integer. Es un numero */
  $prices = 5000;
  echo "that cost {$prices} <br>";

  /* Floating point number - float- doubles - real numbers */

  $goal_rate_per_game = 4.5;
  echo "and now he is celebrating his goal rate per futbol game of {$goal_rate_per_game}<br>";

  /*4. Boolean . Tiene 2 valores true o false. */
  $state = true;
    echo "<br> Is falcao a champio? he is the number {$state}<br>";

 /* Accerder Tipos de datos */
 $type_data = gettype($state);
 echo $type_data;

?>
</body>
</html>