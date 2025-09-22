<?php

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);
echo "<br>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br>";
echo "Karyawan dengan pengalaman lebih dari 5 tahun: " . implode(", ", $karyawanPengalamanLimaTahun);
echo "<br>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "<br>";
echo "Daftar nilai mahasiswa untuk mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $data) {
    echo "Nama: {$data[0]}, Nilai: {$data[1]} <br>";
}

$nilaiUjianMTK = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];

$totalNilai = 0;
foreach ($nilaiUjianMTK as $nilaiMTK) {
    $totalNilai += $nilaiMTK[1];
}

$rataRata = $totalNilai / count($nilaiUjianMTK);

echo "<br>";
echo "Rata rata  nilai materi MTK adalah: $rataRata";
echo "<br>";
echo "Daftar mahasiswa dengan nilai di atas rata-rata: <br>";

foreach ($nilaiUjianMTK as $nilaiMTK) {
    if ($nilaiMTK[1] > $rataRata) {
        echo "Nama: {$nilaiMTK[0]}, Nilai: {$nilaiMTK[1]} <br>";
    }
}
?>