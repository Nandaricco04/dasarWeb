<?php

// coba 1
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan nama saya Nanda<br>";
//     echo "Senang berkenalan dengan anda<br>";
// }

// perkenalan();

// soal 2 dan 3
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo "$salam, ";
//     echo "Perkenalkan, nama saya ".$nama."<br>";
//     echo "Senang berkenalan dengan anda<br>";
// }

// perkenalan("Nanda", "Hallo");

// echo "<hr>";

// $saya = "Nanda";
// $ucapanSalam = "Selamat Pagi";

// perkenalan($saya);

function hitungUmur($tahunLahir, $tahunSekarang){
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2005, 2025)." tahun";
?>