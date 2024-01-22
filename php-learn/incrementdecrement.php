<?php

$a = 10;

$b = $a++;
$c = ++$b;
$a++;

var_dump($a);
var_dump($b);
var_dump($c);

