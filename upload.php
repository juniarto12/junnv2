<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $file_name = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];

    // Pindahkan file yang diunggah ke direktori yang ditentukan
    $upload_dir = 'gambar/';
    move_uploaded_file($file_tmp, $upload_dir . $file_name);

    // Masukkan informasi foto ke dalam database
    $query = "INSERT INTO galeri (nama_file, judul) VALUES ('$file_name', '$judul')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Foto berhasil diunggah');</script>";
        echo "<script>window.location.href='galeri.php';</script>";
    } else {
        echo "<script>alert('Gagal mengunggah foto');</script>";
        echo "<script>window.location.href='upload_form.php';</script>";
    }
}
?>
