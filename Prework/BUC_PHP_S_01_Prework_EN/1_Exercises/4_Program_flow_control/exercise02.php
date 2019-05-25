<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 2</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$nr1 = 26;
$nr2 = 21;
$nr3 = 44;

if ($nr1 > $nr2 && $nr1 > $nr3) {
    echo "The greatest number of $nr1, $nr2, $nr3 is $nr1";
} elseif ($nr2 > $nr3 && $nr2 > $nr1) {
    echo "The greatest number of $nr1, $nr2, $nr3 is $nr2";
} else {
    echo "The greatest number of $nr1, $nr2, $nr3 is $nr3";
}

?>
<!--Write PHP code above-->
</body>
</html>