<?php
// function tampilkanHaloDunia(){
//     echo "Halo Dunia! <br>";

//     tampilkanHaloDunia();
// }
// tampilkanHaloDunia();

// function tampilkanAngka(int $jumlah, int $indexs = 1){
//     echo "Perulangan ke-{$indexs} <br>";

//     if ($indexs < $jumlah) {
//         tampilkanAngka($jumlah, $indexs + 1);
//     }
// }
// tampilkanAngka(20);

$menu = [
    [
        "nama" => "Beranda",
    ],
    [
        "nama" => "Berita",
        "submenu" => [
            [
                "nama" => "Wisata",
                "submenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $key => $item){
        echo "<li>{$item["nama"]}</li>";
        if (isset($item["submenu"])) {
            tampilkanMenuBertingkat($item["submenu"]);
        }
        echo "</li>";
    }
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);
?>