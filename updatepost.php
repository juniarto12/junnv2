<?php
include 'koneksi.php';
session_start();

if (isset($_POST['submit'])) {
    $posts_id = $_POST['post_id'];
    $judul = $_POST['judul'];
    


    // Query untuk mengupdate data post di database
    $query = "UPDATE posts SET judul = '$judul', isi = '$isi' WHERE id = '$posts_id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Post berhasil diperbarui');</script>";
        echo "<script>window.location.href='post.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui post');</script>";
        echo "<script>window.location.href='edit_post.php?id=$posts_id';</script>";
    }
}
?>
