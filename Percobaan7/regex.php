<?php
$pattern = '/[a-z]/';
$text = 'This is a Sample Text.';

if (preg_match($pattern, $text)) {
    echo "Terdapat huruf kecil!";
} else {
    echo "Tidak ditemukan huruf kecil!";
}