<?php

#tanpa foreach
$nama = ["Bambang", "Sugeni", "Wilson"];

for ($counter = 0; $counter < count($nama); $counter ++) {
    echo "Selamat datang $nama[$counter]" . PHP_EOL;
}

#dengan foreach
foreach($nama as $jeneng) {
    echo "Selamat datang $jeneng" . PHP_EOL;
}

#foreach dengan memanggil key dan value
$person = [
    "Member 1" => "Wilson",
    "Member 2" => "Patricia",
    "Member 3" => "Bambang"
];

foreach($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}