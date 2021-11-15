<html>

<head>
    <title>Function 2</title>
</head>

<body>
    <?php
    $i = 10;
    $j = 12;
    function hitung($param1, $param2)
    {
        $i = $param1;
        $j = $param2;
        $hasil = $i + $j;
        return $hasil;
    }
    $hasil = hitung($i, $j);
    echo "hasilnya adalah $hasil";
    ?>
</body>

</html>