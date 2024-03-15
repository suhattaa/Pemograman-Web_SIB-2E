<?php
$totalKursi = 45;
$kursiTerisi = 28;

$kursiKosong = $totalKursi - $kursiTerisi;
$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Jumlah Kursi: $totalKursi || Kursi yang sudah terisi: $kursiTerisi <br>";
echo "Jumlah kursi yang masih kosong: $kursiKosong <br>";
echo "Persentase kursi yang masih kosong: " . number_format($persentaseKosong, 2) . "%";
?>
