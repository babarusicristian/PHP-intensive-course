<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 11</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$n = 5;

for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= $i + 1) {
            echo "* ";
        } else {
            echo "$j ";
        }
    }
    echo "<br>";
}

for ($i = $n - 1; $i >= 0; $i--) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j <= $i + 1) {
            echo "* ";
        } else {
            echo "$j ";
        }
    }
    echo "<br>";
}

?>
<!--Write PHP code above-->
</body>
</html>