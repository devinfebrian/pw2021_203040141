<?php
/*
Devin Febrian
203040141
https://github.com/devinfebrian/pw2021_203040141
Pertemuan 5 - 5 Maret 2021
Mempelajari mengenai Array PHP
*/
?>
<?php 
$mahasiswa = [["Devin Febrian", "203040141", "Teknik Informatika", "devinfebrian20@gmail.com"],
["Devin Febrian", "203040141", "Teknik Informatika", "devinfebrian20@gmail.com"],
["Devin Febrian", "203040141", "Teknik Informatika", "devinfebrian20@gmail.com"]
];

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) : ?>
            <li><?= $mhs; ?></li>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NRP : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>