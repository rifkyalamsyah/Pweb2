<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$cek_login = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($cek_login);

if ($cek > 0) {
    header('location:view_after_login.php');
} else {
    header('location:view_login.php');
}
