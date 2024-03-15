<?php
$nilaiSiswa = [
    ['Alice', 85],
    ['Bob', 92], 
    ['Charlie', 78], 
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($nilaiSiswa as $siswa) {
    $totalNilai += $siswa[1]; 
}
$rataRata = $totalNilai / count($nilaiSiswa);

echo "Rata-rata nilai kelas: $rataRata";

echo "<br>";

echo "Daftar nilai siswa di atas rata-rata kelas: <br>";
foreach ($nilaiSiswa as $siswa) {
    $nama = $siswa[0]; 
    $nilai = $siswa[1]; 
    if ($nilai > $rataRata) {
        echo "$nama: $nilai <br>";
    }
}
?>