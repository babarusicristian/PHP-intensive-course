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
$tab1 = [11, 23, 4];
$tab2 = [35, 66, 44, 2, 19, 84, 1, 90];
$elementsSum = 0;

if (count($tab1) > count($tab2)) {
    for ($i = count($tab2); $i < count($tab1); $i++) {
        $elementsSum += $tab1[$i];
    }
    echo "The sum of elements is: $elementsSum";
} elseif (count($tab2) > count($tab1)) {
    for ($i = count($tab1); $i < count($tab2); $i++) {
        $elementsSum += $tab2[$i];
    }
    echo "The sum of elements is: $elementsSum";
} else {
    echo "The arrays have equal length.";
}

?>
<!--Write PHP code above-->
</body>
</html>