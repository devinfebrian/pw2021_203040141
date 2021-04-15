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

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $query = "INSERT INTO fashion
                    VALUES
                    ('', '$picture', '$name', '$description', '$price', '$category')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// fungsi menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM fashion WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>

