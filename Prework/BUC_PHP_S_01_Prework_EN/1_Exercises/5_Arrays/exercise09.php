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
$capitals = [
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "Poland" => "Warsaw",
    "United Kingdom" => "London",
    "Estonia" => "Tallin",
];

foreach ($capitals as $key => $value) {
    echo "Capital of $key is $value.<br>";
}

?>
<!--Write PHP code above-->
</body>
</html>