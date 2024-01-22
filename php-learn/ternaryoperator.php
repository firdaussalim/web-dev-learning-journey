<?php

$gender = "PRIA";

$hi = null ;

if ($gender == "PRIA") {
    $hi = "hi bro";
} else {
    $hi = "hi nona";
};

echo $hi . PHP_EOL;

#bisa dipersingkat menjadi ternary operator

$hi2 = $gender == "PRIA" ? "hi broww" : "hi nona";

echo $hi2 . PHP_EOL;