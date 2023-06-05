<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="facturas.php" method="post">
    <label>Type Curency:</label>
    <select name="currency" id="">
        <option value="BTC">BTC</option>
        <option value="ETH">ETH</option>
        <option value="USDT">USDT</option>
    </select>
    <label>Amount:</label>
    <input type="number" name="amount" id="">

    <label>Price:</label>
    <input type="number" name="price" id="">

    <label>Total:</label>
    <input type="submit" value="Send">

    </form>
</body>
</html>

<?php
if($_POST){
$currency = "{$_POST['currency']}";
$amount = "{$_POST['amount']}";
$price = "{$_POST['price']}";   


$total = $amount * $price;


echo "Currency: {$currency}<br>";
echo "Amount: {$amount}<br>";   
echo "Price: {$price}<br>";
echo "Su total es: {$total}<br>";


};


?>
