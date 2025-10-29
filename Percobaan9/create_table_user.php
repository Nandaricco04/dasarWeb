<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "prakwebdb";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel 'user' berhasil dibuat.";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>