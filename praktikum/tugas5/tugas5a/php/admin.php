<?php 
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$fashion = query("SELECT * FROM fashion");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

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
        <?php $i =1; ?>
        <?php foreach ($fashion as $f) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                <td><img src="../assets/img/<?= $f['picture']; ?>" alt=""></td>
                <td><?= $f['name']; ?></td>
                <td><?= $f['description']; ?></td>
                <td><?= $f['price']; ?></td>
                <td><?= $f['category']; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>