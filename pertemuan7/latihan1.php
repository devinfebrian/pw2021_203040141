<?php
/*
Devin Febrian
203040141
https://github.com/devinfebrian/pw2021_203040141
Pertemuan 7 - 19 Maret 2021
Mempelajari mengenai GET & POST PHP
*/
?>
<?php 
// Variable Scope / lingkup variabel
// $x = 10;


// function tampilX() {
//     global $x;
//     echo $x;
// }

// tampilX();


?>
<?php 
// Variabel Superglobals
// variabel global milik PHP
// merupakan Array Associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV
// var_dump($_SERVER);
// echo $_SERVER["SERVER_NAME"];
?>
<?php 
// $_GET
// $_GET["nama"] = "Devin Febrian";
// $_GET["nrp"] = 203040141;
// var_dump($_GET);
?>
<?php 
$mahasiswa = [ 
    [
    "gambar" => "1.jpg",
    "nama" => "Devin Febrian",
    "nrp" => "203040141",
    "email" => "203040141@unpas.mail.ac.id",
    "jurusan" => "Teknik Informatika"
    ],
    [
        "gambar" => "2.jpg",
        "nama" => "Athala Thahira",
        "nrp" => "203040142",
        "email" => "203040142@unpas.mail.ac.id",
        "jurusan" => "Teknik Informatika"
    ]
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
    <ul>
    <?php foreach( $mahasiswa as $mhs ) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
            <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
            &jurusan=<?= $mhs["jurusan"]; ?>&gambar=
            <?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>