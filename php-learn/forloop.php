<?php

# for (pra instance;logic;preinstance) {} 
# instance dan logic tidak wajib diisi, jikalau tidak diisi maka akan selalu bernilai true

#penggunaan biasa

$constanta = 0;

for (;$constanta <= 10;){
    echo "ini loop yang ke = " . $constanta . PHP_EOL;
    $constanta ++;
};

#constanta bisa dimasukkan kedalam instance

for ($constanta2 = 0; $constanta2 <= 10; $constanta2++) {
    echo "ini loop yang ke = " . $constanta2 . PHP_EOL;
};

# alternatif syntax menggunakan :

for ($constanta3 = 0; $constanta3 <=10; $constanta3++):
    echo "ini loop yang ke = " . $constanta3 . PHP_EOL;
endfor;