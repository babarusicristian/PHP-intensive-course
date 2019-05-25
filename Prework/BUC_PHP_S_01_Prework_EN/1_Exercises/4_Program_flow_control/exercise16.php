<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 16</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$x = 1320;
$y = 1120;

echo "For $x and $y GCD is: " . gdc2($x, $y);

function gdc2($a, $b)
{
    if ($a < 1 || $b < 1) {
        die("a or b is less than 1");
    } else {
        while ($b != 0) {
            $r = $a % $b;
            $a = $b;
            $b = $r;
        }
    }
    return $a;
}

?>
<!--Write PHP code above-->
</body>
</html>