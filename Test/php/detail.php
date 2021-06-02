<?php
// mengecek apakah ada id yang dikirimkan
// jika tidak maka kembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

// mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$f = query("SELECT * FROM fashion WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">
    <div class="gambar">
      <img src="../assets/img/<?= $f["picture"]; ?>" alt="">
    </div>
    <div class="keterangan">
      <p><?= $f["name"]; ?></p>
      <p><?= $f["description"]; ?></p>
      <p><?= $f["price"]; ?></p>
      <p><?= $f["category"]; ?></p>
    </div>

    <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
  </div>
</body>

</html>