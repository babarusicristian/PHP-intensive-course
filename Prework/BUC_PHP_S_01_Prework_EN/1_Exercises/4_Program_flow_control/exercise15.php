<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 15</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$factorial = 1;
$x = 6;

if ($x <= 0 || $x === 1) {
    echo "Factorial $x! equals 1.";
} else {
    //FOR loop
    for ($i = 1; $i <= $x; $i++) {
        $factorial *= $i;
    }
    echo "Factorial $x! equals $factorial.";
}

echo "<br>";

$factorial = 1;
if ($x <= 0 || $x === 1) {
    echo "Factorial $x! equals 1.";
} else {
    //WHILE loop
    $i = 1;
    while ($i <= $x) {

        $factorial *= $i;

        $i++;
    }
    echo "Factorial $x! equals $factorial.";
}

?>
<!--Write PHP code above-->
</body>
</html>