<?php 
// fungsi untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040141");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $fs = [];
    while ($fashion = mysqli_fetch_assoc($result)) {
        $fs[] = $fashion;
    }
    return $fs;
}

?>

