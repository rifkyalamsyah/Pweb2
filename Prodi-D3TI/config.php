<?php
// Konfigurasi ke database

$server = "localhost";
$username = "root";
$password = "";
$database = "Responsi_19.01.4351";

// Connect ke database
$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi database
if (!$db) {
    die("Gagal terhubung ke database" . mysqli_connect_error());
}
