<?php

include('../config.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

$cek_login = mysqli_query($db, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($cek_login);

if ($cek > 0) {
    header('location:../view/content.php');
} else {
    header('location:../index.php?status=gagal');
}
