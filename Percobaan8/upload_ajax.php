<?php
if (isset($_FILES['files'])) {
    $allowed_exts = array("jpg", "jpeg", "png", "gif");
    $max_size = 2 * 1024 * 1024;
    $upload_dir = "uploads";
    $responses = array();

    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    $file_count = count($_FILES['files']['name']);
    for ($i = 0; $i < $file_count; $i++) {
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp  = $_FILES['files']['tmp_name'][$i];
        $file_ext  = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_exts)) {
            $responses[] = "$file_name: Ekstensi tidak diizinkan (hanya gambar).";
            continue;
        }
        if ($file_size > $max_size) {
            $responses[] = "$file_name: Ukuran file melebihi 2 MB.";
            continue;
        }
        $target_path = $upload_dir . "/" . basename($file_name);
        if (move_uploaded_file($file_tmp, $target_path)) {
            $responses[] = "$file_name: Berhasil diunggah.";
        } else {
            $responses[] = "$file_name: Gagal mengunggah file.";
        }
    }
    echo implode("<br>", $responses);
}
?>