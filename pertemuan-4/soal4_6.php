<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$totalNilai = 0;
$rataNilai = 0;

for ($i=2; $i < count($nilai) - 2 ; $i++) { 
   $totalNilai += $nilai[$i];
}

$rataNilai = $totalNilai / (count($nilai) - 4);

echo "Rata - rata nilai : $rataNilai";
?>