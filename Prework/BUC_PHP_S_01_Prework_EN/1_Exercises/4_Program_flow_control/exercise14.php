<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 14</title>
    <style>
        table td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<!--Write PHP code below-->
<?php
$n = 9;

echo "<table>";
for ($i = 1; $i <= $n; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $n; $j++) {
        $multiply = $i * $j;
        echo "<td> $i x $j = $multiply</td>";
    }
    echo "</tr>";
}
echo "</table>"

?>
<!--Write PHP code above-->
</body>
</html>