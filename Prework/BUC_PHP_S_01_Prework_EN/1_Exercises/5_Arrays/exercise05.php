<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 5</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$numbers = [-78, -12, -88, -72, -80, -87, -52, -25, -19, -30];
$max = null;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}

echo "The greatest number from array is: $max.";

?>
<!--Write PHP code above-->
</body>
</html>