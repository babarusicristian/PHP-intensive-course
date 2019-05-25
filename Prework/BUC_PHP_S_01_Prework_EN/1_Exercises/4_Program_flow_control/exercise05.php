<?php

$resultFor = 0;
$resultWhile = 0;

for ($i = 1; $i <= 10; $i++) {
    $resultFor += $i;
}

$i = 1;
while ($i <= 10) {
    $resultWhile += $i;
    $i++;
}

echo $resultFor;
echo "<br>";
echo $resultWhile;