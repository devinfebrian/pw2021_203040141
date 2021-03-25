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
    <title>latihan4B</title>
    <style>
        table,tr,th {
            border-collapse: collapse;
        }
        tr,td {
            padding: 5px;
            text-align: center;
        }

    </style>
</head>
<body>

        <div class="container mt-5 mb-5">
            <table border="1" >
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
                <?php foreach ($fashion as $fs) : ?>
                </thead>

                <tbody>
                  <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $fs["picture"]; ?>" ></td>
                    <td><?= $fs["name"] ?></td>
                    <td><?= $fs["description"] ?></td>
                    <td><?= $fs["price"] ?></td>
                    <td><?= $fs["category"] ?></td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
        </table>
      </div>
</body>
</html>