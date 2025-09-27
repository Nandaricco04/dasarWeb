<?php
// function tampilkanHaloDunia(){
//     echo "Halo Dunia! <br>";

//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

function tampilkanAngka(int $jumlah, int $indexs = 1){
    echo "Perulangan ke-{$indexs} <br>";

    if ($indexs < $jumlah) {
        tampilkanAngka($jumlah, $indexs + 1);
    }
}
tampilkanAngka(20);
?>