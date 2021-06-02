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
                alert('Add Data Success');
                document.location.href = 'admin.php';
            </script>";
  } else {
    echo "<script>
                alert('Add Data Failed');
                document.location.href = 'admin.php';
            </script>";
  }
}
?>
<h3>Add Produt Form</h3>
<form action="" method="POST">
  <ul>
    <li>
      <label for="picture">Picture :</label><br>
      <input type="text" name="picture" id="picture" required><br><br>
    </li>
    <li>
      <label for="name">Name :</label><br>
      <input type="text" name="name" id="name" required><br><br>
    </li>
    <li>
      <label for="description">Description :</label><br>
      <input type="text" name="description" id="description" required><br><br>
    </li>
    <li>
      <label for="price">Price :</label><br>
      <input type="text" name="price" id="price" required><br><br>
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