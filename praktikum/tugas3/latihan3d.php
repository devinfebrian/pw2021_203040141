<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php 
    $pemain = [
        [
            "nama" => "Christiano Ronaldo",
            "club" => "Juventus",
            "main" => 100,
            "gol" => 76,
            "assist" => 30
        ],
        [
            "nama" => "Lionel Messi",
            "club" => "Barcelona",
            "main" => 120,
            "gol" => 80,
            "assist" => 12
        ],
        [
            "nama" => "Luca Modric",
            "club" => "Real Madrid",
            "main" => 87,
            "gol" => 12,
            "assist" => 48
        ],
        [
            "nama" => "Mohammad Salah",
            "club" => "Liverpol",
            "main" => 90,
            "gol" => 103,
            "assist" => 8
        ],
        [
            "nama" => "Neymar Jr",
            "club" => "Paris Saint Germain",
            "main" => 109,
            "gol" => 56,
            "assist" => 15
        ],
        [
            "nama" => "Sadio Mane",
            "club" => "Liverpool",
            "main" => 63,
            "gol" => 30,
            "assist" => 70
        ],
        [
            "nama" => "Zlatan Ibrahimovic",
            "club" => "Ac Milan",
            "main" => 100,
            "gol" => 10,
            "assist" => 12
        ]
        ];
    $total_main = 0;
    $total_gol = 0;
    $total_assist = 0;

    foreach ($pemain as $key => $value) {
        $total_main += $value['main'];
        $total_gol += $value['gol'];
        $total_assist += $value['assist'];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3D</title>
</head>
<style>
    table,th,td {
        border-collapse: collapse;
    }
    th,td {
        padding: 5px;
        text-align: left;
    }
</style>
<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>CLUB</th>
            <th>MAIN</th>
            <th>GOL</th>
            <th>ASSIST</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pemain as $p) : ?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $p["nama"] ?></td>
            <td><?= $p["club"] ?></td>
            <td><?= $p["main"] ?></td>
            <td><?= $p["gol"] ?></td>
            <td><?= $p["assist"] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        <tr>
            <th>#</th>
            <th colspan="2">
                <center>Jumlah</center>
            </th>
            <th><?= $total_main ?></th>
            <th><?= $total_gol ?></th>
            <th><?= $total_assist ?></th>
        </tr>
    </table>
</body>
</html>