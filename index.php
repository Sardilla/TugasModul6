<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>
    <a href="tambah.php">Tambah Produk Baru</a><brS><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Nama Produk</th><th>Harga</th><th>Stok</th><th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM produk");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id_produk']}</td>
                <td>{$row['nama_produk']}</td>
                <td>{$row['harga']}</td>
                <td>{$row['stok']}</td>
                <td>
                    <a href='edit.php?id={$row['id_produk']}'>Edit</a> | 
                    <a href='hapus.php?id={$row['id_produk']}' onclick='return confirm(\"Hapus produk ini?\");'>Hapus</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>
