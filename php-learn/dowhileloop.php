<?php

# mirip dengan while loop, hanya saja pengecekan kondisi dilakukan setelah perulangan dilakukan


$counter = 100;

do {
    echo "ini adalah perulangan ke = " . $counter . PHP_EOL;
    $counter ++;
} while ($counter <= 0);