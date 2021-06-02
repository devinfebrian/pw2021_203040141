<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

$fashion = query("SELECT * FROM fashion");

if (isset($_POST['cari'])) {
  $fashion = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="add">
    <a href="tambah.php">Add Product</a>
  </div>

  <form action="" method="GET">
    <input type="text" name="keyword" size="40" placeholder="insert keyword" autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Search</button>
  </form>

  <div class="container">
    <table border="1" cellpadding="13" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Option</th>
        <th>Picture</th>
        <th>Name</th>
        <th>description</th>
        <th>Price</th>
        <th>Category</th>
      </tr>
      <?php if (empty($fashion)) : ?>
        <tr>
          <td colspan="7">
            <h2>Product not found</h2>
          </td>
        </tr>
      <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($fashion as $f) : ?>
          <tr>
            <td><?= $i; ?></td>
            <td>
              <a href="ubah.php?id=<?= $f['id'] ?>"><button>Edit</button></a>
              <a href="hapus.php?id=<? $f['id'] ?>" onclick="return confirm('Delete Data ?')"><button>Delete</button></a>
            </td>
            <td><img src=" ../assets/img/<?= $f['picture']; ?>" alt="">
            </td>
            <td><?= $f['name']; ?></td>
            <td><?= $f['description']; ?></td>
            <td><?= $f['price']; ?></td>
            <td><?= $f['category']; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      <?php endif; ?>
    </table>
  </div>

  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>

  <script src="../js/script.js"></script>
</body>

</html>