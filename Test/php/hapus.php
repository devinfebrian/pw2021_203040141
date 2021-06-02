<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
                alert('Delete Data Success');
                document.location.href = 'admin.php';
            </script>";
} else {
  echo "<script>
                alert('Add Data Failed');
                document.location.href = 'admin.php';
            </script>";
}
