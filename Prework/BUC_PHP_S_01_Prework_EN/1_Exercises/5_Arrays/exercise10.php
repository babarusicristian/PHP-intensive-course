<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 10</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$temps = [30, 29, 14, 42, -4, -10, 8, 14, 32, 11, 8, 0, 0];

for ($i = 0; $i < count($temps); $i++) {
    $temps[$i] = $temps[$i] * 1.8 + 32;
}

$avg = 0;
$sum = 0;

for ($i = 0; $i < count($temps); $i++) {
    $sum += $temps[$i];
}

$avg = $sum / count($temps);

echo "Average temperature is: " . number_format($avg, 2);

?>
<!--Write PHP code above-->
</body>
</html>