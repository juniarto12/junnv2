<?php
include 'koneksi.php';
session_start();

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];

    // Query untuk mengambil data post berdasarkan ID
    $query = "SELECT * FROM posts WHERE id = '$post_id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        // Data post ditemukan, lanjutkan ke form edit
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Post</title>
           
        </head>
        <body>

        <h1>Edit Post</h1>
        <form action="update_post.php" method="POST">
            <input type="hidden" name="post_id" value="<?php echo $row['id']; ?>">
            <label>Judul:</label><br>
            <input type="text" name="judul" value="<?php echo $row['judul']; ?>"><br>
            <label>Isi:</label><br>
            <textarea name="isi"><?php echo $row['isi']; ?></textarea><br>
            <!-- Tambahkan input lainnya sesuai kebutuhan -->
            <button type="submit" name="submit">Simpan Perubahan</button>
        </form>

        </body>
        </html>
        <?php
    } else {
        // Data post tidak ditemukan
        echo "<script>alert('Post tidak ditemukan');</script>";
        echo "<script>window.location.href='post.php';</script>";
    }
}
?>
