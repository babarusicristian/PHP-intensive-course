<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 3</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$numbers = [7, 96, 6, 33, 65, 43, 9, 69, 50, 8];
$sum = 0;

for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}

echo "The sum of array elements is: $sum.";

?>
<!--Write PHP code above-->
</body>
</html>