<html>

<head>
    <title>Function 4</title>
</head>

<body>
    <?php
    function hitung_selisih($gaji, $hutang)
    {
        if ($gaji > $hutang) $hasil = $gaji - $hutang;
        else $hasil = $gaji - $hutang;
        return $hasil;
    }
    //$param1=4000000;
    //$param2=200000;
    //$hasil= $hitung_selisih($param1,$param2);
    $hasil = hitung_selisih(4000000, 200000);
    print "Sisa gaji pokok $hasil";

    ?>
</body>

</html>