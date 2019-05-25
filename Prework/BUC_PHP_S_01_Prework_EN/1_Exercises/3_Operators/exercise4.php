<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 4</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$myNumber = 4;
$myString = "4";
$resultFirst = null;
$resultSecond = null;

echo $resultFirst = $myNumber == $myString;
echo $resultSecond = $myNumber === $myString;

var_dump($resultFirst);
var_dump($resultSecond);

$quiz = 'a';
?>
<!--Write PHP code above-->
</body>
</html>