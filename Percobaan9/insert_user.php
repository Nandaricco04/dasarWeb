<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "prakwebdb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "INSERT IGNORE INTO user (id, username, password) VALUES (1, 'admin', '123')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan.";
} else {
    echo "Terjadi kesalahan: " . mysqli_error($conn);
}

mysqli_close($conn);
?>