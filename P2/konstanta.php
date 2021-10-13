<?php
// Konstanta

// Contoh Menggunakan keyword cons
const alamat_univ = "http://Amikom.ac.id";
echo alamat_univ;
echo "<br>";

// Contoh menggunakan fungsi define
define("alamat_unive", "http://Amikom.ac.id");
echo alamat_unive;
echo "<br>";
?>

<?php
// Bisa menggunakan konstantanya
define('echo', 'Universitas Amikom Yogyakarta');
echo constant('echo');
echo "<br>";
?>

<?php
// Konstanta yg tidak dapat dirubah
define("universitas", "amikom.ac.id");
echo universitas;
// echo "<br />";
// define("universitas", "aptikom.com");
?>

