<?php

# While loop sama dengan for loop hanya saja lebih sederhana
# Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement

$counter = 0;

while($counter <= 10){
    echo "ini adalah loop yang ke = " . $counter . PHP_EOL;
    $counter++;
};

#alternatif syntax

$counter2 = 0;

while ($counter2 <=10) :
    echo "ini adalah loop yang ke = " . $counter2 . PHP_EOL;
    $counter2++;
endwhile;