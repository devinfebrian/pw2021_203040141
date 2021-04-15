<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $fashion = query("SELECT * FROM fashion WHERE
                name LIKE '%keyword%' OR
                price LIKE '%keyword%' OR
                category LIKE '%keyword%' ");
} else {
    $fashion = query("SELECT * FROM fashion"); 
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

<h1>Daftar Produk</h1>
<a href="tambah.php">Tambah data Produk</a>
<form action="" method="get">
    <input type="text" name="keyword" autofocus>
    <button type="submit" name="cari">Cari</button>
</form>
<br><br>
    <table border="1" cellpadding="13" cellspacing="0">
        <tr>
            <th>#</th>
            <th>opsi</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Kategori</th>
        </tr>
        <?php if (empty($fashion)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>
        <?php $i =1; ?>
        <?php foreach ($fashion as $f) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $f['id'] ?>"><button>Ubah</button></a>
                    <a href="hapus.php?id=<?= $f['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $f['picture']; ?>" alt=""></td>
                <td><?= $f['name']; ?></td>
                <td><?= $f['description']; ?></td>
                <td><?= $f['price']; ?></td>
                <td><?= $f['category']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
</body>
</html>