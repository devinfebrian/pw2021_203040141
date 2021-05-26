<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Submitted');
                document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
                alert('Data failed to submit');
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
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/tambah.css">
</head>

<body>
    <div class="container">

        <h3>Add Product Form</h3>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <ul>
                                <li>
                                    <label for="picture" class="gambar">
                                        Picture :
                                        <img src="../assets/img/nophoto.jpg" width="120px" style="display: block;" class="img-preview"><br>
                                        <input type="file" name="picture" id="picture" class="picture" onchange="previewImage()">
                                    </label>
                                </li><br>
                                <li>
                                    <label for="name">
                                        Name :
                                        <input type="text" name="name" id="name" required>
                                    </label>
                                </li><br>
                                <li>
                                    <label for="description">
                                        Description :
                                        <input type="text" name="description" id="description" required>
                                    </label>
                                </li><br>
                                <li>
                                    <label for="price">
                                        Price :
                                        <input type="text" name="price" id="price" required>
                                    </label>
                                </li><br>
                                <li>
                                    <label for="category">Category :</label>
                                    <select name="category" id="category" required>
                                        <option value="">-- Choose Category --</option>
                                        <option value="Hoodie">Hoodie</option>
                                        <option value="Denim">Denim</option>
                                    </select>
                                </li>
                                <br>
                                <button type="submit" name="tambah">Add Data</button><br>
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

    <script src="../js/script.js"></script>
</body>

</html>