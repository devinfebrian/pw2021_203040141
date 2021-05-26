<?php
require 'functions.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
                alert('Registration Success');
                document.location.href = 'login.php';
            </script>";
    } else {
        echo "<script>
                alert('Registrasi Failed');
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/regist.css">
</head>

<body>
    <div class="login-wrapper">
        <form action="" class="form" method="POST">
            <h2>Please Create an Account</h2>
            <div class="input-group">
                <input type="text" name="username" id="username" required autofocus>
                <label for="username">User Name</label>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" name="register" value="Register" class="submit-btn">
        </form>
    </div>
</body>

</html>