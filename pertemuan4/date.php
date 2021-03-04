<?php 
    // Date
    // Untuk menampilkan tanggal dengan format tertentu
    // echo date("l, d-M-Y");

    // Time
    // UNIX Timestamp / EPOCH time
    // detik yang berlalu sejak 1 Januari 1970
    // echo time();
    // echo date("d M Y", time()+60*60*24*100);
    // echo date("d M Y", time()-60*60*24*100);
    

    // mktime
    // membuat detik sendiri
    // mktime(0,0,0,0,0,0) 6 parameter
    // jam, menit, detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,2,20,2002));

    // strtotime
    // echo date("l", strtotime("20 feb 2002"));

    // String
    // strlen() menghitung panjang sebuah string
    // strcmp() menggabungkan dua buah string
    // explode() memecah sebuah string menjadi array
    // htmlspecialchars() mencegah orang lain masuk ke website

    // Utility
    // var_dump() mencetak isi dari sebuah variabel,array dan objek
    // isset() untuk mengecek sebuah variabel sudah pernah dibikin atau belum
    // empty() apakah variabel yang ada memiliki isi atau kosong
    // die() untuk memberhentikan program
    // sleep() untuk memberhentikan sementara

    // User-defined Function
    // fungsi yang kita bikin sendiri
?>