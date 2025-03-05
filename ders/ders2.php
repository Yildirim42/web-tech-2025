<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dersleri</title>
</head>

<body>
    <?php


    $metin = "aydın adnan menderes üniversitesi<br>";
    $byazi = strtoupper($metin);
    $kyazi = strtolower($byazi);
    $mb_byazi = mb_strtoupper($kyazi);
    $mb_kyazi = mb_strtolower($mb_byazi);
    echo $ilkharf_buyuk_metin = ucfirst($mb_kyazi); //gelen metnin ilk harfini büyüt
    echo $ilkharf_buyuk_kelime = ucwords($mb_kyazi); //gelen metnin kelimelerinin baş harfini büyüt
    echo "Karakter Sayısı: " . strlen($metin);
    echo "<br> Metnin Belirli Bir Karaterin Sayısı: " . substr($metin,0,10);

    $lorem = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi tempora,
     omnis ea eaque dicta tempore repellendus odio itaque ut suscipit recusandae soluta doloremque iste maxime,
     commodi magnam eligendi quaerat! Minus?";

    echo substr($lorem,0,100);
    ?>
</body>
</html>