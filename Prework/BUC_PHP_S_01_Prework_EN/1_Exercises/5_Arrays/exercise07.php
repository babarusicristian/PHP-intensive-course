<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 7</title>
</head>
<body>
<!--Write PHP code below-->
<?php

$length = 100;

for ($i = 0; $i < $length; $i++) {
    $randNumbers[$i] = mt_rand(0, 20);
}

echo "<div class='numbersList'>";
for ($i = 0; $i < $length; $i++) {
    if ($i < $length - 1) {
        echo "$randNumbers[$i], ";
    } else {
        echo "$randNumbers[$i]";
    }
}
echo "</div>";

$sum = 0;

for ($i = 0; $i < count($randNumbers); $i++) {
    $sum += $randNumbers[$i];
}

echo "<div class='result'>";
echo "<br> The sum of a 100 random numbers in the range from 0 to 20 is: $sum.";
echo "</div>";

?>
<!--Write PHP code above-->
</body>
</html>