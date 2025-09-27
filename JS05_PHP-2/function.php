<?php

// soal 4
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan nama saya Nanda<br>";
//     echo "Senang berkenalan dengan anda<br>";
// }

// perkenalan();
// perkenalan();

// soal 2 dan 3
function perkenalan($nama, $salam="Assalamualaikum"){
    echo "$salam, ";
    echo "Perkenalkan, nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Nanda", "Hallo");

echo "<hr>";

$saya = "Nanda";
$ucapanSalam = "Selamat Pagi";
?>