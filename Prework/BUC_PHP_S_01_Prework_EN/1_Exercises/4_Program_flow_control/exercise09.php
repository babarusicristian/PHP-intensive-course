<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 9</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$n = 3;

for ($i = 1; $i <= $n; $i++) {
    $row = "";
    for ($j = 1; $j <= $n; $j++) {
        if ($j < $i + 1) {
            $row .= "* ";
        } else {
            $row .= "$j ";
        }
    }
    echo $row . "<br>";
}

?>
<!--Write PHP code above-->
</body>
</html>