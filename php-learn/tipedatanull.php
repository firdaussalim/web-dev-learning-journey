<?php

$produk = "wet food";
$produk = null;

echo "Is Produk Null ? : ";
echo is_null($produk);
echo "\n";
echo var_dump(isset($produk));
echo "\n";

$namaProduk = "Meo Tuna";
unset($namaProduk); //untuk menghapus variable, sehingga ketika di echo, maka akan menjadi undefined

echo $namaProduk;