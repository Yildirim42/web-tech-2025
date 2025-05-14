<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrol Yapıları</title>
</head>
<body>
    <h3> Kontrol Yapıları </h3>

    <?php

    if (3 > 5) {
        echo "Koşul Doğru";
    }
    else {
        echo "Koşul Yanlış";
    }

    echo "<h3> Farklı Kullanım Örneği</h3>";
    if (3 > 5) :
        echo "Koşul Doğru";
    
    else: 
        echo "Koşul Yanlış";
    endif;

    echo "<h3> Fazla Koşul Kullanım Örneği</h3>";
    if (3 > 10 ) {
        echo "Koşul Yanlış 3 > 10";
    }
    else if (18 > 15) {
        echo "Koşul Doğru 18 > 15";
    }
    else {
        echo "Koşulların dışında";
    }

    echo "<h3> Saat Uygulaması </h3>";

    $saat = 3;
    if ($saat >= 0 or $saat <= 6) {
        echo "İyi Geceler";

    }
    else if ($saat > 6 or $saat <= 9) {
        echo "Günaydın";
    }
    else if ($saat > 9 or $saat <= 17) {
        echo "İyi Günler";
    }
    else if ($saat > 17 or $saat < 24) {
        echo "İyi Akşamlar";
    }
    else {
        echo "Geçersiz Saat";
    }
    ?>
</body>
</html>