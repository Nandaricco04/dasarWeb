<?php

// coba 1
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan nama saya Nanda<br>";
//     echo "Senang berkenalan dengan anda<br>";
// }

// perkenalan();

function perkenalan($nama, $salam){
    echo "$salam, ";
    echo "Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Nanda", "Hallo");

echo "<hr>";

$saya = "Nanda";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);
?>