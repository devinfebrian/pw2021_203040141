<?
/*
Devin Febrian
203040141
Shift Jum'at 13.00
*/
?>
<?php 
    $nama = ["Mohammad Salah", "Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic",
    "Neymar Jr"];
    $nama[5] = "Luka Modric";
    $nama[6] = "Sadio Mane";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3B</title>
    <style>
        li {
            list-style: none;
            margin-left : 50px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Daftar pemain bola terkenal</h1>
    <li><?= "1. $nama[0]" ?></li>
    <li><?= "2. $nama[1]" ?></li>
    <li><?= "3. $nama[2]" ?></li>
    <li><?= "4. $nama[3]" ?></li>
    <li><?= "5. $nama[4]" ?></li>

    <h1>Daftar pemain bola terkenal baru</h1>
    <li><?= "1. $nama[1]" ?></li>
    <li><?= "2. $nama[2]" ?></li>
    <li><?= "3. $nama[5]" ?></li>
    <li><?= "4. $nama[0]" ?></li>
    <li><?= "5. $nama[4]" ?></li>
    <li><?= "6. $nama[6]" ?></li>
    <li><?= "7. $nama[3]" ?></li>
</body>
</html>