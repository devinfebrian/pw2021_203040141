<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$f = query("SELECT * FROM fashion WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
                alert('Update Data Success');
                document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script>
                alert('Update Data Failed');
                document.location.href = 'admin.php';
            </script>";
  }
}
?>
<h3>Update Produt Form</h3>
<form action="" method="POST">
  <ul>
    <li>
      <input type="hidden" name="id" id="id" value="<?= $f['id']; ?>">
    </li>
    <li>
      <label for="picture">Picture :</label><br>
      <input type="text" name="picture" id="picture" required value="<?= $f['picture']; ?>"><br><br>
    </li>
    <li>
      <label for="name">Name :</label><br>
      <input type="text" name="name" id="name" required value="<?= $f['name']; ?>"><br><br>
    </li>
    <li>
      <label for="description">Description :</label><br>
      <input type="text" name="description" id="description" required value="<?= $f['description']; ?>"><br><br>
    </li>
    <li>
      <label for="price">Price :</label><br>
      <input type="text" name="price" id="price" required value="<?= $f['price']; ?>"><br><br>
    </li>
    <li>
      <label for="category">Category :</label><br>
      <select name="category" id="category" required>
        <option value="">Choose Category</option>
        <option value="Hoodie">Hoodie</option>
        <option value="Denim">Denim</option>
      </select>
    </li>
    <br>
    <button type="submit" name="add">Add Data</button>
    <button type="submit">
      <a href="../index.php" style="text-decoration: none; color: black;">Back</a>
    </button>
  </ul>
</form>