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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/min.css">
</head>

<body>
    <div class="container">
        <div class="top">
            <div class="logout"><br>
                <a href="logout.php"><button>Logout</button></a>
            </div>
            <h1>Product List</h1>
            <a href="tambah.php"><button>Add Product</button></a><br>
            <form action="" method="POST">
                <input type="text" name="keyword" size="40" placeholder="insert keyword" autocomplete="off" autofocus class="keyword">
                <button type="submit" name="cari" class="tombol-cari">Cari</button>
            </form>
            <br><br>
        </div>
    </div>

    <!-- Isi -->

    <?php if (empty($fashion)) : ?>
        <tr>
            <td colspan="7">
                <h1>Data Not Found</h1>
            </td>
        </tr>
    <?php else : ?>
        <?php foreach ($fashion as $f) : ?>
            <div class="container">
                <div class="grid">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../assets/img/<?= $f["picture"]; ?>" width="200px">
                            </div>
                            <div class="col-s12-m12">
                                <div class="card-body">
                                    <table>
                                        <ul>
                                            <li>
                                                <h5 class="card-title">Name : <?= $f["name"]; ?></h5>
                                            </li>
                                            <li>
                                                <p class="card-text"> Description : <?= $f["description"]; ?></p>
                                            </li>
                                            <li>
                                                <p class="card-text">Price : <?= $f["price"]; ?></p>
                                            </li>
                                            <li>
                                                <p class="card-text"><small class="kategori text-muted">Category : <?= $f["category"]; ?></small></p>
                                            </li>
                                            <li>
                                                <a href="ubah.php?id=<?= $f['id'] ?>"><button>Edit</button></a><br>
                                            </li>
                                            <li>
                                                <a href="hapus.php?id=<?= $f['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Delete</button></a>
                                            </li>
                                        </ul>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <script src="../js/script.js"></script>
</body>

</html>