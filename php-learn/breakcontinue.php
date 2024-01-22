<?php

#kode bereak

$counter = 0;

while($counter <= 10) {
    echo "ini adalah perulangan yang ke = $counter" . PHP_EOL;
    $counter ++;

    if($counter % 2 == 0) {
        break;
    }
}

# kode continue

for ($counter2 = 0; $counter <=100; $counter ++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "hello continue $counter" . PHP_EOL;
}

#nyoba sendiri

$ganjil = array();
$genap = array();
for ($counter3 = 0; $counter3 <= 100; $counter3 ++) {
    if($counter3 % 2 == 0) {
        $genap[] = $counter3;
    } else {
        $ganjil[] = $counter3;
    }
}

var_dump($ganjil);
var_dump($genap);