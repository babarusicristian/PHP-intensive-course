<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 12</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$a = 3;
$b = 3;
$c = 1;

if (($a + $b) > $c && ($c + $a) > $a && ($a + $c) > $b) {
    echo "A triangle can be built from the given sides.";
} else {
    echo "A triangle cannot be built from the given sides.";
}

?>
<!--Write PHP code above-->
</body>
</html>