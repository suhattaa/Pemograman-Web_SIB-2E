<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil Penjumlahan $angka1 dan $angka2 adalah $hasil." . "<br>";

$benar = true;
$salah = false;
echo "Variabel benar: $benar" . "<br>";
echo "Variabel salah: $salah" . "<br>";

//Mendefinisikan untuk nilai tetap
define("NAMA_SITUS", "WebsiteKu.com");
define("TAHUN_PENDIRIAN", 2003);

echo "Selamat Datang di " . NAMA_SITUS . ",
 situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . "." . "<br>";
?>