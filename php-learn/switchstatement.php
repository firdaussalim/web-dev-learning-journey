<?php

$nilai = "A";

#switch statement
switch($nilai) {
    case "A" :
        echo "Selamat anda lulus dengan nilai yang sangat memuaskan" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Selamat anda lulus" . PHP_EOL;
        break;
    case "D" :
        echo "Anda dinyatakan remidi, segera hubungi dekan" . PHP_EOL;
        break;
    case "E" :
        echo "Selamat, anda sekarang mengetahui kalau anda salah jurusan" . PHP_EOL;
        break;
};

#ordinary if else
if ($nilai == "A") {
    echo "Selamat anda lulus dengan nilai yang sangat memuaskan" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C") {
    echo "Selamat anda lulus" . PHP_EOL;
} else if ($nilai == "D") {
    echo "Anda dinyatakan remidi, segera hubungi dekan" . PHP_EOL;
} else {
    echo "Selamat, anda sekarang mengetahui kalau anda salah jurusan" . PHP_EOL;
};

#alternatif switch statement syntax
switch($nilai) :
    case "A" :
        echo "Selamat anda lulus dengan nilai yang sangat memuaskan" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Selamat anda lulus" . PHP_EOL;
        break;
    case "D" :
        echo "Anda dinyatakan remidi, segera hubungi dekan" . PHP_EOL;
        break;
    case "E" :
        echo "Selamat, anda sekarang mengetahui kalau anda salah jurusan" . PHP_EOL;
        break;
    endswitch;