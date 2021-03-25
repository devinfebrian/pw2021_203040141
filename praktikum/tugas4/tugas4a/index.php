<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php 
// melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "");

// Memilih Database
mysqli_select_db($conn, "pw_tubes_203040141");

// Melakukan Query dari database
$result = mysqli_query($conn, "SELECT * FROM fashion");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan4A</title>
    <style>
        table,tr,th {
            border-collapse: collapse;
        }
        tr,td {
            padding: 5px;
        }
    </style>
</head>
<body>
<table border="1">
        <thead>
          <tr>
              <th>No</th>
              <th>Picture</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Category</th>
          </tr>
          <?php $i = 1; ?>
          <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        </thead>

        <tbody>
          <tr>
            <td><?= $i ?></td>
            <td><img src="assets/img/<?= $row["picture"]; ?>"></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["description"] ?></td>
            <td><?= $row["price"] ?></td>
            <td><?= $row["category"] ?></td>
          </tr>
          <?php $i++; ?>
          <?php endwhile; ?>
        </tbody>
      </table>
</body>
</html>