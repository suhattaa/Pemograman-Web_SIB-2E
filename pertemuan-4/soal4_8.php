<?php

$poin = 700; 

echo "Total skor pemain adalah: $poin <br>";

if ($poin > 500) {
    $hadiahTambahan = "YA";
} else {
    $hadiahTambahan = "TIDAK";
}

echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
?>
