<h3>Form Tambah Data Produk</h3>
<form action="" method="POST">
    <ul>
        <li>
            <label for="picture">Gambar :</label>
            <input type="text" name="picture" id="picture" required><br><br>
        </li>
        <li>
            <label for="name">Nama :</label>
            <input type="text" name="name" id="name" required><br><br>
        </li>
        <li>
            <label for="description">Deskripsi :</label>
            <input type="text" name="description" id="description" required><br><br>
        </li>
        <li>
            <label for="price">Harga :</label>
            <input type="text" name="price" id="price" required><br><br>
        </li>
        <li>
            <label for="category">Kategori :</label>
            <select name="category" id="category" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Hoodie">Hoodie</option>
                <option value="Denim">Denim</option>
            </select>
        </li>
        <br>
        <button type="submit" name="tambah">Tambah Data!</button>
        <button type="submit">
            <a href="../index.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </ul>
</form>

<?php 
session_start();

if (isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil ditambahkan!');
                document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
                alert('Data Gagal ditambahkan!');
                document.locaton.href = 'admin.php';
        </script>";
    }
}
?>