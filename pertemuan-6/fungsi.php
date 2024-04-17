<?php
function perkenalan($nama , $salam = "Assalamualaikum"){
    echo $salam. " , ";
    echo "Perkenalkan , nama saya " .$nama. "<br/>";
    echo "Senang berkenalan dengan Anda <br/>";
}

perkenalan("Suhatta " , "hallo");

echo"<hr>";

$saya = "Hatta";
$ucapanSalam =   "Selamat pagi";

perkenalan($saya , $ucapanSalam);
?>