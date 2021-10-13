<?php
// Contoh 1
if (TRUE) {
    echo "Universitas Amikom Yogyakarta";
} else {
    echo "STMIK";
}
?>

<?php
// Contoh 2
$amikom = true;
$bukan = false;

echo "<br>";
echo $bukan;
echo $amikom;
echo "<br>";
?>

<?php
$amikom = true;
$bukan = false;

echo "benar = $amikom, salah = $bukan";
echo "<br>";
?>

<?php
// Contoh 4
$a = FALSE;     // false 
$b = "";         // false
$c = " ";     // true
$d = 1;         // true
$e = -2;         // true
$f = "teknik informatika"; // true
$g = 3.14;     // true
$h = array();     // false
$i = array(1); // true
$j = "false";     // true
?>

<?php
$y = 1;
$z = 1;

if ($y == $z) {
    echo "nilainya sama";
} else {
    echo "berarti nilainya gak sama";
}
?>
