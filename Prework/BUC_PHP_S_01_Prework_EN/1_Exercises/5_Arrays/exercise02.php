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
$fruits = ["kiwi", "orange", "pineapple", "apple", "strawberries"];

echo "The first fruit is: $fruits[0]. <br>";
echo "The last fruit is: " . $fruits[count($fruits) - 1] . ".<br>";

for ($i = 0; $i < count($fruits); $i++) {
    echo "$fruits[$i] <br>";
}

echo "<br>";
//foreach variant
foreach ($fruits as $value) {
    echo "$value <br>";
}

?>
<!--Write PHP code above-->
</body>
</html>