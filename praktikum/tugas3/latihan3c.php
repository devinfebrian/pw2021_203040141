<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php 
    $nama = [
        "Christiano Ronaldo" => "Juventus",
        "Lionel Messi" => "Barcelona",
        "Luca Modric" => "Real Madrid",
        "Mohammad Salah" => "Liverpool",
        "Neymar Jr" => "Paris Saint Germain",
        "Sadio Mane" => "Liverpool",
        "Zlatan Ibrahimovic" => "Ac Milan"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3C</title>
    <style>
        table,tr,td {
           border-collapse: collapse;
        }

        tr,td {
            padding: 5px;
            text-align: left;
        }
        h3{
            padding-left: 5px;
        }
    </style>
</head>
<body>
    <table>
        <h3><b>Daftar pemain bola terkenal dan clubnya</b></h3>
        <?php foreach ($nama as $pemain => $club) : ?>
            <tr>
                <td><b><?= $pemain ?></b></td>
                <td><?= "<b>:</b> $club" ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>