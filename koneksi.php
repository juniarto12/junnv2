<?php
$server = "localhost:3306";
$user = "root";
$pass = "";
$database = "db_galeri";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>