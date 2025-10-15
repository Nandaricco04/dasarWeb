<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Terdapat huruf kecil!";
} else {
    echo "Tidak ditemukan huruf kecil!";
}

echo "<br>";
$pattern = '/[0-9]+/';
$text = 'There are 123 apples';

if (preg_match($pattern, $text, $matches)) {
    echo "Cocokan: " . $matches[0];
} else {
    echo "Tidak ada yang cocok.";
}