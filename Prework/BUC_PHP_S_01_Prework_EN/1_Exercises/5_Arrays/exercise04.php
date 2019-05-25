<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 4</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$numbers = [46, 53, 54, 49, 10, 59, 81, 18, 60, 90];
$sumOdd = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] % 2 == 0) {
        echo "$numbers[$i] <br>";
    } else {
        $sumOdd += $numbers[$i];
    }
}

echo "The sum of all odd numbers is: $sumOdd.";

?>
<!--Write PHP code above-->
</body>
</html>