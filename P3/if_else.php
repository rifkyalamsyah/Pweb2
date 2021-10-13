<?php
$kondisi_dompet = 12000;
if ($kondisi_dompet < 10000) {
    echo "Anda bahagia";
} else {
    echo "nyaris tidak bahagia";
}
echo "<br>";


// if else bercabang
$var1 = "isi 1";

if ($var1 == "isi 1") {
    if ($var1 == "isi 2") {
        echo "Benar"; //pernyataan pertama
    } else {
        echo "salah"; //pernyataan kedua
    }
} else {
    echo "data tidak cocok"; //pernyataan terakhir
}



// if else dengan beberapa kondisi
/*
$prodi = "Ti";
if ($prodi == "TI" || $prodi == "ti" || $prodi == "Ti" || $prodi
== "tI")
{
echo …
*/
