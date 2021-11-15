<?php
// Konfigurasi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "db_CRUD";

// Connect ke database
$db = mysqli_connect($server, $username, $password, $database);
if (!$db) {
    die("Gagal terhubung ke server" . mysqli_connect_error());
}
