<?php
session_start();
require 'functions.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $_row['username'];
        header("Location: admin.php");
        exit;
    }
}
// melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
// login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    // mencocokkan USERNAME DAN PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/sign.css">
</head>

<body>
    <!-- Form -->
    <div class="container">
        <br>
        <div class="grid">
            <div class="login-wrapper">
                <form action="" class="form" method="POST">
                    <?php if (isset($error)) : ?>
                        <p style="color: red; font-style: italic;">Username atau password incorrect</p>
                    <?php endif; ?>
                    <h2>Login</h2>
                    <div class="input-group">
                        <input type="text" name="username" id="username" required autofocus>
                        <label for="username">User Name</label>
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <input type="submit" name="submit" value="Login" class="submit-btn">
                    <div class="remember">
                        <input type="checkbox" name="remember" id="">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="registrasi">
                        <p>Not have an account ? <a href="registrasi.php">Register</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>


</body>

</html>