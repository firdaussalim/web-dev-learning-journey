<?php

#metode 1

$nilai = 95;
$absen = 9;

if ($nilai > 75 && $absen < 4) {
    echo "Anda lulus" . PHP_EOL;
} else if ($nilai > 90 && $absen < 15) {
    echo "Anda lulus dengan syarat" . PHP_EOL;
} else {
    echo "Maaf anda tidak lulus" . PHP_EOL;
};

#metode 2

if ($nilai > 75 && $absen < 4) :
    echo "Anda lulus" . PHP_EOL;
elseif ($nilai > 90 && $absen < 15) :
    echo "Anda lulus dengan syarat" . PHP_EOL;
else :
    echo "Maaf anda tidak lulus" . PHP_EOL;
endif;