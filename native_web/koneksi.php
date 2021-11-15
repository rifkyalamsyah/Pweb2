<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_01";

// $connect = mysql_connect();
$connect = mysqli_connect($servername, $username, $password, $database);

if (!$connect) {
    die("Koneksi Gagal" . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
