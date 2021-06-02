<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "pw20141", "#Akun#203040141#") or die("koneksi ke DB gagal");
    mysqli_select_db($conn, "pw20141_tubes_203040141") or die("Database salah!");

    return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $fs = [];
    while ($fashion = mysqli_fetch_assoc($result)) {
        $fs[] = $fashion;
    }
    return $fs;
}

function upload()
{
    $nama_file = $_FILES['picture']['name'];
    $tipe_file = $_FILES['picture']['type'];
    $ukuran_file = $_FILES['picture']['size'];
    $error = $_FILES['picture']['error'];
    $tmp_file = $_FILES['picture']['tmp_name'];

    // ketika tidak ada gambar yang dipilih
    if ($error == 4) {
        // echo "<script>
        //         alert('Choose Picture First');
        //         </script>";
        return 'nophoto.jpg';
    }

    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
                alert('choosen file is not picture');
                </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
                alert('choosen file is not picture');
                </script>";
        return false;
    }

    // cek ukuran file
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
                alert('file size is too large');
                </script>";
        return false;
    }

    // lolos pengecekan 
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    // $picture = htmlspecialchars($data['picture']);
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    // upload gambar
    $picture = upload();
    if (!$picture) {
        return false;
    }

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

    // menghapus gambar di folder img
    $fs = query("SELECT * FROM fashion WHERE id = $id");
    if ($fs['picture'] != 'nophoto.jpg') {
        unlink('../assets/img/' . $fs['picture']);
    }


    mysqli_query($conn, "DELETE FROM fashion WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi ubah data
function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $previous_img = htmlspecialchars($data['previous_img']);
    $name = htmlspecialchars($data['name']);
    $description = htmlspecialchars($data['description']);
    $price = htmlspecialchars($data['price']);
    $category = htmlspecialchars($data['category']);

    $picture = upload();
    if (!$picture) {
        return false;
    }

    if ($picture == 'nophoto.jpg') {
        $picture = $previous_img;
    }

    $query = "UPDATE fashion SET
                picture = '$picture',
                name = '$name',
                description = '$description',
                price = '$price',
                category = '$category'
              WHERE id = $id";

    mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username already exist');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM fashion
                WHERE name LIKE '%$keyword%'
                OR category LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $fs = [];
    while ($fashion = mysqli_fetch_assoc($result)) {
        $fs[] = $fashion;
    }
    return $fs;
}
