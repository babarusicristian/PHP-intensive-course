<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 6</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$numbers = [58, 64, 2, 71, 84, 48, 15, 44, 93, 55];

for ($i = count($numbers) - 1; $i >= 0; $i--) {
    echo "$numbers[$i] <br>";
}

?>
<!--Write PHP code above-->
</body>
</html>