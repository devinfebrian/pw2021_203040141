<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

$id = $_GET['id'];

$f = query("SELECT * FROM fashion WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Data Update Success');
                document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
                alert('Data Update Failed');
                document.location.href = 'admin.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Data Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ubah.css">
</head>

<body>
    <div class="container">
        <div class="grid">
            <h3>Update Product Data Form</h3>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $f['id']; ?>">
                                <ul>
                                    <li>
                                        <input type="hidden" name="previous_img" value="<?= $f['picture']; ?>">
                                        <label for="picture">Picture :</label>
                                        <img src="../assets/img/<?= $f['picture']; ?>" width="150px" style="display: block;" class="img-preview"><br>
                                        <input type="file" name="picture" class="picture" onchange="previewImage()">
                                    </li><br>
                                    <li>
                                        <label for="name">Name :</label>
                                        <input type="text" name="name" required value="<?= $f['name']; ?>"><br><br>
                                    </li>
                                    <li>
                                        <label for="description">Description :</label>
                                        <input type="text" name="description" required value="<?= $f['description']; ?>"><br><br>
                                    </li>
                                    <li>
                                        <label for="price">Price :</label>
                                        <input type="text" name="price" required value="<?= $f['price']; ?>"><br><br>
                                    </li>
                                    <li>
                                        <label for="category">Category :</label>
                                        <select name="category" value="<?= $f['category']; ?>">
                                            <option value="">-- Choose Category --</option>
                                            <option value="Hoodie">Hoodie</option>
                                            <option value="Denim">Denim</option>
                                        </select>
                                    </li>
                                    <br>
                                    <button type="submit" name="ubah">Update Data</button>
                                    <br>
                                    <button type="submit">
                                        <a href="../index.php" style="text-decoration: none; color: black;">Back</a>
                                    </button>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/script.js"></script>
</body>

</html>