<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php 
    // menghubungkan dengan file php lainnya
    require 'php/functions.php';

    // melakukan query
    $fashion = query("SELECT * FROM fashion");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5a</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Welcome to UpperWare.</h1>
    <h2>Here are some of our catalogue</h2>
        <div class="container mt-4">
        <?php foreach ($fashion as $fs) : ?>
            <div class="row">
                <div class="col-2 col-sm-10">
                <img src="assets/img/<?= $fs["picture"]; ?>">
                <p class="nama"><a href="php/detail.php?id=<?= $fs['id'] ?>"><br>
                <?= $fs["name"] ?></br></a></p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
</body>
</html>