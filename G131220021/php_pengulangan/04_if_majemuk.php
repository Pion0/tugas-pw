<html>

<head>
    <title>contoh if majemuk</title>
</head>

<body>
    <?php
    $nilai = 90;
    if (($nilai >= 0) && ($nilai < 50)) 
    {
        $grade = "E";
    } 
    elseif (($nilai >= 50) && ($nilai < 60)) 
    {
        $grade = "D";
    } 
    elseif (($nilai >= 60) && ($nilai < 75)) 
    {
        $grade = "D";
    } 
    elseif (($nilai >= 75) && ($nilai < 85)) 
    {
        $grade = "D";
    } 
    elseif (($nilai >= 85) && ($nilai < 100)) 
    {
        $grade = "A";
    } 
    else
    {
        $grade = "nilai anda diluar jangkauan";
    }
    
    
        echo "NIlai anda =$nilai, dikonversi menjadi $grade ";
    ?>
</body>

</html>