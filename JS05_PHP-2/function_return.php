<?php
function hitungUmur($tahunLahir, $tahunSekarang){
    $umur = $tahunSekarang - $tahunLahir;
    return $umur;
}

echo "Umur saya adalah ".hitungUmur(2005, 2025)." tahun<br>";
?>