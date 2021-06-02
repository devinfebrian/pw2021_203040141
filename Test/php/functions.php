<?php
// fungsi untuk melakukan koneksi ke database
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "pw_tubes_203040141");

  return $conn;
}

// function untuk melakukan query dan memasukkannya kedalam array
function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// fungsi untuk menabahkan data didalam database
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
                  ('', '$picture','$name', '$description', '$price', '$category')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM fashion WHERE id = $id");

  return mysqli_affected_rows($conn);
}

function ubah($data)
{
  $conn = koneksi();
  $id = htmlspecialchars($data['id']);
  $picture = htmlspecialchars($data['picture']);
  $name = htmlspecialchars($data['name']);
  $description = htmlspecialchars($data['description']);
  $price = htmlspecialchars($data['price']);
  $category = htmlspecialchars($data['category']);

  $query = "UPDATE fashion2
          SET 
          picture = '$picture',
          name = '$name',
          description = '$description',
          price = '$price',
          category = '$category'
          WHERE id = '$id'
          ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username already exist');
        </script>";
    return false;
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru
  $query_tambah = "INSERT INTO user VALUES('', '$username', '$password') ";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM fashion
              WHERE name LIKE '%$keyword%' OR 
              category LIKE '%$keyword%'
              ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
