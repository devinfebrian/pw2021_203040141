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

$fs = query("SELECT * FROM fashion WHERE id = $id");

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
                                <input type="hidden" name="id" value="<?= $fs['id']; ?>">
                                <ul>
                                    <li>
                                        <input type="hidden" name="previous_img" value="<?= $fs['picture']; ?>">
                                        <label>
                                            Picture :
                                            <input type="file" name="picture" class="picture" onchange="previewImage()">
                                        </label>
                                        <img src="../assets/img/<?= $fs['picture']; ?>" width="150px" style="display: block;" class="img-preview"><br>
                                    </li><br>
                                    <li>
                                        <label>
                                            Name :
                                            <input type="text" name="name" autofocus required value="<?= $fs['name']; ?>"><br>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            Description :
                                            <input type="text" name="description" required value="<?= $fs['description']; ?>"><br><br>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            Price :
                                            <input type="text" name="price" required value="<?= $fs['price']; ?>"><br><br>
                                        </label>
                                    </li>
                                    <li>
                                        <label>Category :</label>
                                        <select name="category" value="<?= $fs['category']; ?>">
                                            <option value="">-- Choose Category --</option>
                                            <option value="Hoodie">Hoodie</option>
                                            <option value="Denim">Denim</option>
                                        </select>
                                    </li><br>
                                    <li>
                                        <button type="submit" name="ubah">Update</button>
                                    </li><br>
                                    <li>
                                        <button type="submit">
                                            <a href="../index.php" style="text-decoration: none; color: black;">Back</a>
                                        </button>
                                    </li>
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