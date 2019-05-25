<?php

$numberToFind = 6;
$length = 100;
$randNumbers = [];
$keys = [];

for ($i = 0; $i < $length; $i++) {
    $randNumbers[$i] = mt_rand(0, 20);
}

for ($i = 0; $i < $length; $i++) {
    if ($randNumbers[$i] === $numberToFind) {
        $keys[] = $i;
    }
}