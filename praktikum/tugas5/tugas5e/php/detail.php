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
$fashion = query("SELECT * FROM fashion WHERE id = $id")[0];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4C</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="../assets/img/<?= $fashion["picture"]; ?>" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $fashion["name"]; ?></h5>
        <p class="card-text"><?= $fashion["description"]; ?></p>
        <p class="card-text">Rp. <?= $fashion["price"]; ?></p>
        <p class="card-text"><small class="kategori text-muted"><?= $fashion["category"]; ?></small></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
</body>
</html>