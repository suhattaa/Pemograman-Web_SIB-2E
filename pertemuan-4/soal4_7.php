<?php
$hargaProduk = 120000;
$batasDiskon = 100000;
$persentaseDiskon = 20; 

if ($hargaProduk > $batasDiskon) {
    $diskon = $hargaProduk * ($persentaseDiskon / 100);
    $hargaSetelahDiskon = $hargaProduk - $diskon;
} else {
    $hargaSetelahDiskon = $hargaProduk;
}

echo "Harga Produk: Rp " . number_format($hargaProduk, 2) . "<br>";
echo "Diskon: $persentaseDiskon % <br>";
echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($hargaSetelahDiskon, 2);
?>
