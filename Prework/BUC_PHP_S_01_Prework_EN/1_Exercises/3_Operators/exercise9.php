<?php

$x = 16;
$y = 15;
$x_y = $x < $y;
$t = true;
$f = false;
$t_f = $t || $f;
$last = $x_y && $t_f;

var_dump($last);