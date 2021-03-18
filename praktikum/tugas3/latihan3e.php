<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php 
    $fashion = [
        [
            "picture" => "1.jpg",
            "name" => "Hoodie Pink",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 150.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "2.jpg",
            "name" => "Hoodie Gray",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 150.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "3.jpg",
            "name" => "Hoodie Black",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 150.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "4.jpg",
            "name" => "Hoodie FILA Blue",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 200.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "5.jpg",
            "name" => "Hoodie London Printed Yellow",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 250.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "6.jpg",
            "name" => "Hoodie Stussy White",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 250.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "7.jpg",
            "name" => "Hoodie Supreme Red",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 550.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "8.jpg",
            "name" => "Hoodie Red",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 150.000",
            "category" => "Hoodie"
        ],
        [
            "picture" => "9.jpg",
            "name" => "Denim Jacket Blue",
            "description" => "Innovative designs and comfortable to wear in any condition",
            "price" => "Rp 600.000",
            "category" => "Denim"
        ],
        [
            "picture" => "10.jpg",
            "name" => "Hoodie Orange",
            "description" => "Made of soft cotton fleece and comfortable to wear in any condition",
            "price" => "Rp 150.000",
            "category" => "Hoodie"
        ]
    ]
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan3E</title>
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
          <?php foreach ($fashion as $f) : ?>
        </thead>

        <tbody>
          <tr>
            <td><?= $i ?></td>
            <td><img src="img/<?= $f["picture"]; ?>" ></td>
            <td><?= $f["name"] ?></td>
            <td><?= $f["description"] ?></td>
            <td><?= $f["price"] ?></td>
            <td><?= $f["category"] ?></td>
          </tr>
          <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>
</body>
</html>