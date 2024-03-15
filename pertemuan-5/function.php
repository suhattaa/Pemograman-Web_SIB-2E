
<?php
//membuat fungsi

function perkenalan ($nama, $salam="Assalamualaikum"){
echo $salam.", ";
echo "Perkenalkan, nama saya ".$nama."<br/>"; 
echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi yang sudah dibuat
perkenalan ("Suhatta", "Hallo");

echo "<hr>";

$saya = "Hatta";
$ucapanSalam = "Selamat pagi";

//memanggil lagi
perkenalan ($saya);
?>