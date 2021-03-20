<?php
/*
Devin Febrian
203040141
https://github.com/devinfebrian/pw2021_203040141
Pertemuan 6 - 12 Maret 2021
Mempelajari mengenai Array Associative PHP
*/
?>
<?php 
// $mahasiswa = ["Devin Febrian", "203040141",
// "203040141@unpas.ac.id", "Teknik Informatika"]

// Array Associative
// definisinya sama seperti array numerik, kecuali
// keynya adalah string yang kita buat sendiri
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
    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs[""]; ?>">
        </li>
        <li>Nama : <?php echo $mhs["nama"]; ?></li>
        <li>NRP : <?php echo $mhs["nrp"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>