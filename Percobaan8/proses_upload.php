<?php
$targetDirectory = "uploads/";

if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

$allowedExtensions = array("jpg", "jpeg", "png", "gif");
$maxSize = 5 * 1024 * 1024;

if (!empty($_FILES['images']['name'][0])) {
    $totalFiles = count($_FILES['images']['name']);

 for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $fileTmp = $_FILES['images']['tmp_name'][$i];
        $fileSize = $_FILES['images']['size'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . $fileName;

        if (in_array($fileExt, $allowedExtensions) && $fileSize <= $maxSize) {
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
                echo "<img src='$targetFile' width='200' style='height:auto; margin:10px 0;'><br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName tidak valid atau melebihi ukuran maksimum.<br>";
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}