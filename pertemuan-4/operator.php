<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil Tambah : {$hasilTambah} <br>";
echo "Hasil Kurang : {$hasilKurang} <br>";
echo "Hasil Kali   : {$hasilKali} <br>";
echo "Hasil Bagi   : {$hasilBagi} Sisa {$sisaBagi} <br>";
echo "Hasil Pangkat: {$pangkat} <br>";

echo "<br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama            ? " . var_export($hasilSama, true) . "<br>";
echo "Hasil Tidak Sama      ? " . var_export($hasilTidakSama, true) . "<br>";
echo "Hasil Lebih Kecil     ? " . var_export($hasilLebihKecil, true) . "<br>";
echo "Hasil Lebih Besar     ? " . var_export($hasilLebihBesar, true) . "<br>";
echo "Hasil Lebih Kecil Sama? " . var_export($hasilLebihKecilSama, true) . "<br>";
echo "Hasil Lebih Besar sama? " . var_export($hasilLebihBesarSama, true) . "<br>";

echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND    : " . var_export($hasilAnd, true) . "<br>";
echo "Hasil OR     : " . var_export($hasilOr, true) . "<br>";
echo "Hasil NOT A  : " . var_export($hasilNotA, true) . "<br>";
echo "Hasil NOT B  : " . var_export($hasilNotB, true) . "<br>";

echo "<br>";

$hasilTambahSama = $a += $b;
$hasilKurangSama = $a -= $b;
$hasilKaliSama = $a *= $b;
$hasilBagiSama = $a /= $b;
$hasilModSama = $a %= $b;

echo "a += b : $hasilTambahSama <br>";
echo "a -= b : $hasilKurangSama <br>";
echo "a *= b : $hasilKaliSama <br>";
echo "a /= b : $hasilBagiSama <br>";
echo "a %= b : $hasilModSama <br>";

echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik? " . var_export($hasilIdentik, true) . "<br>";
echo "Hasil Tidak Identik? " . var_export($hasilTidakIdentik, true) . "<br>";
?>