<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Prework - exercise 13</title>
</head>
<body>
<!--Write PHP code below-->
<?php
$points = 98;

// if elseif else SOLUTION
if ($points >= 0) {
    if ($points <= 100) {
        if ($points >= 0 && $points <= 39) {
            echo "Result: unsatisfactory";
        } elseif ($points >= 40 && $points <= 54) {
            echo "Result: passing";
        } elseif ($points >= 55 && $points <= 69) {
            echo "Result: satisfactory";
        } elseif ($points >= 70 && $points <= 84) {
            echo "Result: good";
        } elseif ($points >= 85 && $points <= 98) {
            echo "Result: very good";
        } elseif ($points >= 99 && $points <= 100) {
            echo "Result: excellent";
        }
    } else {
        echo "Score over 100";
    }
} else {
    echo "Score below 0";
}

echo "<br>";

//switch SOLUTION
switch (true) {
    case ($points < 0):
        echo "Score below 0";
        break;
    case ($points >= 0 && $points <= 39):
        echo "Result: unsatisfactory";
        break;
    case ($points >= 40 && $points <= 54):
        echo "Result: passing";
        break;
    case ($points >= 55 && $points <= 69):
        echo "Result: satisfactory";
        break;
    case ($points >= 70 && $points <= 84):
        echo "Result: good";
        break;
    case ($points >= 85 && $points <= 98):
        echo "Result: very good";
        break;
    case ($points >= 99 && $points <= 100):
        echo "Result: excellent";
        break;
    case ($points > 100):
        echo "Score over 100";
        break;
}

?>
<!--Write PHP code above-->
</body>
</html>