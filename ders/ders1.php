<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri</title>
</head>

<body>

    <?php

    //phpinfo(); /* shift+alt+a , shift+alt+f */

    // Tek satır
    /* Çok satır */
    echo "Aydın Adnan Menderes Üniversitesi MYO Bilgisayar Programcılığı";
    echo "<br>Aydın Adnan Menderes Üniversitesi MYO Bilgisayar Programcılığı";

    $metin = "<br>Aydın Adnan Menderes Üniversitesi MYO Bilgisayar Programcılığı";
    echo $metin;

    echo $bmetin = strtoupper($metin);
    echo $kmetin = strtolower($bmetin);
    ?>

</body>

</html>