<html>

<head>
    <title>Function 3</title>
</head>

<body>
    <?php
    function nama()
    {
        echo "Nama : Arjuna ";
    }
    function alias()
    {
        echo "alias Kiwil ";
    }
    function panggilan()
    {
        echo "dipanggil Kentang goreng";
    }
    function artis()
    {
        nama() . alias() . panggilan();
    }

    artis();
    ?>
</body>

</html>