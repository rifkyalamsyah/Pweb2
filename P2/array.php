<?php
// Array
$nama0 = "Joe";
$nama1 = "Atan";
$nama2 = "Dia";
$nama3 = "Sholeh";
$nama4 = "Belewah";
$nama4 = "Tiyasan";
$nama4 = "Timo Ho";
?>

<?php
// Contoh Array
$nama1 = array(
    0 => "Joe",
    1 => "Atan",
    2 => "Dia",
    3 => "Sholeh",
    4 => "Belewah",
    5 => "Tiyasan"
);

// Contoh Array
$nama2 = array("Joe", "Atan", "Dia", "Sholeh", "Belewah");
?>


<?php
$nama = array(
    0 => "joe",
    "kedua" => "2",
    'ketiga' => 3,
    true => true,
    20 => "dua puluh",
);

echo $nama[1];
echo "<br />";
echo $nama["kedua"];
echo "<br />";
echo $nama['ketiga'];
echo "<br />";
echo $nama[true];
echo "<br />";
echo $nama[20];
echo "<br /><br />";
?>

<?php
// Array
$nama = ["firman jeger", "abdul gimbal", "jaka gembung"];

// menampilkan semua isi array dengan fungsi count()
for ($i = 0; $i < count($nama); $i++) {
    echo $nama[$i] . "<br>";
}

echo "<br />";

// menampilkan array dengan menggunakan batasan perulangan $i < 3
for ($i = 0; $i < 3; $i++) {
    echo $nama[$i] . "<br>";
}

echo "<br />";
?>


<?php
// Menghapus Array dengan fungsi unset();
$angka = [
    "satu",
    "dua",
    "tiga"
];

unset($angka[0]);

//echo "<pre>";
print_r($angka);
//echo "</pre>";

echo "<br />";
?>

<?php
// Menghapus array dengan fungsi diff();
// menghapus hanya pada slot-slot tertentu
$angka = array(0 => "nol", 1 => "satu", 2 => "dua", 3 => "tiga", 4 => "empat", 5 => "lima");
$angka = array_diff($angka, ["satu", "tiga"]);

print_r($angka);
?>