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
          alert('Registration Failed');
      </script>";
  }
}
?>
<form action="" method="post">
  <table>
    <tr>
      <td><label for="username">username</label></td>
      <td>:</td>
      <td><input type="text" name="username" id=""></td>
    </tr>
    <tr>
      <td><label for="password">password</label></td>
      <td>:</td>
      <td><input type="password" name="password" id=""></td>
    </tr>
  </table>
  <button type="submit" name="register">REGISTER</button>
</form>