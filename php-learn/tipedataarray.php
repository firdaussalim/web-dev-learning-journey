<?php

$values = array(1, 4, 5, 9.8);
//var_dump($values);

$values2 = [1, 4, 5, 9.8];
//var_dump($values2);
var_dump($values[2]); //mengambil index ke 2 dari array values

$values[] = 10; //menambahkan value 10 di akhir array values
var_dump($values);

$values[0] = 0.1; //menambahkan value 0.1 di index ke 0 array values
var_dump($values);

unset($values[0]); //menghapus value dari index ke 0 array values
var_dump($values);
var_dump(count($values)); //menghitung berapa jumlah data di dalam array

//membuat map

$promoMeo = array(
    "sku" => "A00987",
    "Produk" => "Meo Kitten Seafood",
    "Discount" => 0.1
);

var_dump($promoMeo);

//konsepnya seperti array biasa, hanya saja mengganti key dari index menjadi string sesuai kebutuhan kita

var_dump($promoMeo["Produk"]);

$jsm = [
    "id" => "A00092",
    "Produk" => "Royal Canin Hairball",
    "Discount" => 0.05
];

var_dump($jsm);

//array dalam array

$promoPurina = [
    "id" => "A09836",
    "Produk" => "Purina Kitten with Colostrum",
    "Discount" => [
        "Minimal Beli" => 1,
        "Discount" => 0.1,
        "Bonus" => "Purina Pouch Bag"
    ]
];

var_dump($promoPurina);
var_dump($promoPurina["Discount"]["Bonus"]);




 