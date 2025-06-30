<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM produk WHERE id_produk=$id"));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama  = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $stok  = $_POST['stok'];
    mysqli_query($conn, "UPDATE produk SET nama_produk='$nama', harga='$harga', stok='$stok' WHERE id_produk=$id");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Produk</title></head>
<body>
    <h1>Edit Produk</h1>
    <form method="post">
        Nama Produk: <input type="text" name="nama_produk" value="<?= $data['nama_produk'] ?>" required><br>
        Harga: <input type="number" name="harga" value="<?= $data['harga'] ?>" required><br>
        Stok: <input type="number" name="stok" value="<?= $data['stok'] ?>" required><br>
        <button type="submit">Update</button>
    </form>
    <br><a href="index.php">Kembali</a>
</body>
</html>
