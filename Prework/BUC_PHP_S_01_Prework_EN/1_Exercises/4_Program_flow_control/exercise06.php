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

$n = 11;

for ($i = 0; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        echo "$i - even <br>";
    } else {
        echo "$i - odd <br>";
    }
}

echo "<br>";

$i = 0;
while ($i <= $n) {
    if ($i % 2 == 0) {
        echo "$i - even <br>";
    } else {
        echo "$i - odd <br>";
    }

    $i++;
}

?>
<!--Write PHP code above-->
</body>
</html>