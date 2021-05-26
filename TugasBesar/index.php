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
    <title>UpperWare</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dex.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand " href="#">UpperWare</a>
            <a href="php/login.php">
                <button type="submit" class="login">Login</button>
            </a>
        </div>
    </nav>

    <!-- Isi -->
    <section>
        <?php foreach ($fashion as $fs) : ?>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="assets/img/<?= $fs['picture']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $fs['name']; ?></h5>
                                <a href="php/detail.php?id=<?= $fs['id']; ?>" class="btn btn-primary">Detail</a>
                            </div>
                        </div><br>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer">
            <p>© 2021 Devin Febrian</p>
        </div>
    </footer>
</body>


</html>