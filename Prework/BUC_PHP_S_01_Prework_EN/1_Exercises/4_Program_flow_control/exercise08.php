<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 8</title>
</head>
<body>
<!--Write PHP code below-->
<?php
//defining variable with the number of rows and asterisks in a row
$n = 30;
//creating a loop that will generate ROWS
for ($i = 0; $i < $n; $i++) {
    $row = '';//variable that is zeroed at the beginning of each iteration, storing asterisks from a single row
    //creating a loop that will generate asterisks in a row
    for ($j = 0; $j < $n; $j++) {
        $row .= '* ';
    }
    echo $row . '<br>';//displaying asterisks from a row and moving to the next row
}

echo "<br>";

$i = 0;
while ($i < $n) {
    $row = "";
    $j = 0;
    while ($j < $n) {
        $row .= '* ';
        $j++;
    }
    echo $row . '<br>';
    $i++;
}

?>

<!--Write PHP code above-->
</body>
</html>