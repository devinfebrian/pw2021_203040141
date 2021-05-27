<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php
// Mengecek apakah ada id yang dikirimkan
// jika tidak maka akan dikembalikan ke halaman index.php
if (!isset($_GET['id'])) {
  header("location : ../index.php");
  exit;
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$fashion = query("SELECT * FROM fashion WHERE id = $id");
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/detail.css">
</head>

<body>
  <div class="container">
    <div class="grid">
      <div class="card" style="max-width: 540px;">
        <div class="row ">
          <div class="col-md-4">
            <img src="../assets/img/<?= $fashion["picture"]; ?>" width="190px">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title"><?= $fashion["name"]; ?></h5>
              <p class="card-text"><?= $fashion["description"]; ?></p>
              <p class="card-text">Rp. <?= $fashion["price"]; ?></p>
              <p class="card-text"><small class="kategori text-muted"><?= $fashion["category"]; ?></small></p>
              <button class="tombol-kembali"><a href="../index.php">Back</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>