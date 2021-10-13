<?php

$username = "admin";
$password = "admin";

if ($_POST['username'] && $_POST['password']) {

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        header('location:dashboard.php');
        // echo "Berhasil login";
    } elseif ($_POST['username'] !== $username && $_POST['password'] == $password) {
        echo "Username Salah";
    } elseif ($_POST['username'] == $username && $_POST['password'] !== $password) {
        echo "Password Salah";
    } elseif ($_POST['username'] !== $username && $_POST['password'] !== $password) {
        echo "Gagal login, Username & Password salah";
    }
} else {
    echo "Username atau Password Tidak boleh kosong";
}
