<html>

<head>
    <title>contoh if majemuk</title>
</head>

<body>
    <?php
    $angka = 6;
    switch($angka)
    {
        case 0 : $terbilang ="NOL";
        break;
        case 1 : $terbilang ="SATU";
        break;
        case 2 : $terbilang ="DUA";
        break;
        case 3 : $terbilang ="TIGA";
        break;
        case 4 : $terbilang ="EMPAT";
        break;
        case 5 : $terbilang ="LIMA";
        break;
        case 6 : $terbilang ="ENAM";
        break;
        case 7 : $terbilang ="TUJUH";
        break;
        case 8 : $terbilang ="DELAPAN";
        break;
        case 9 : $terbilang ="SEMBILAN";
        break;
        default : $terbilang =" nilai diluar angkasa";
        break;
    }
    
    
    
        echo "Bentuk terbilang dari angka $angka adalah $terbilang ";
    ?>
</body>

</html>