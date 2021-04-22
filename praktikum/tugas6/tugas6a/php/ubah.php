<?php 
require 'functions.php';

$id = $_GET['id'];
$f = query("SELECT * FROM fashion WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil diubah!');
                document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
                alert('Data Gagal diubah!');
                document.locaton.href = 'admin.php';
        </script>";
    }
}
?>
<title>Form Ubah Data Produk</title>
<form action="" method="POST">
    <ul>
        <li>
            <input type="hidden" name="id" id="id" value="<?= $f['id']; ?>"><br><br>
        </li>
        <li>
            <label for="picture">Gambar :</label>
            <input type="text" name="picture" id="picture" required value="<?= $f['picture']; ?>"><br><br>
        </li>
        <li>
            <label for="name">Nama :</label>
            <input type="text" name="name" id="name" required value="<?= $f['name']; ?>"><br><br>
        </li>
        <li>
            <label for="description">Deskripsi :</label>
            <input type="text" name="description" id="description" required value="<?= $f['description']; ?>"><br><br>
        </li>
        <li>
            <label for="price">Harga :</label>
            <input type="text" name="price" id="price" required value="<?= $f['price']; ?>"><br><br>
        </li>
        <li>
            <label for="category">Kategori :</label>
            <select name="category" id="category" required value="<?= $f['category']; ?>">
                <option value="">-- Pilih Kategori --</option>
                <option value="Hoodie">Hoodie</option>
                <option value="Denim">Denim</option>
            </select>
        </li>
        <br>
        <button type="submit" name="ubah">Ubah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

