<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $degerler = array(
        "Ocak",
        "Şubat",
        "Mart",
        array(
            "Pazartesi",
            "Salı",
            "Çarşamba",
            "Perşembe"
        ),
        array(
            "Cuma",
            array(
                "Sabah",
                "Öğle",
                "Akşam"
            ),
            "Cumartesi",
            "Pazar"
        )
        );

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";
    echo "Dizinin Eleman Sayısı: " . count($degerler) . "<br>";
    echo "Dizinin İçerisindeki Alt Dizinin Eleman Sayısı: " . sizeof($degerler[3]) . "<br>";
    echo "Dizinin Alt Boyutları Dahil Tüm Eleman Sayısı: " . count($degerler,COUNT_RECURSIVE) . "<br>";
    ?>
    <h5> Dizinin Başına Eleman Ekleme </h5>
    <?php

    $isimler = array("Ali","Ahmet","Ayşe","Huriye");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $yeni_eleman_sayisi = array_push($isimler,"Aynur","Kerim");
    echo "Yeni Dizinin Eleman Sayısı: $yeni_eleman_sayisi <br>";
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    ?>

    <h5> Dizinin Başından Eleman Çıkarma </h5>

    <?php

        echo "<pre>";
        print_r($isimler);
        echo "</pre>";

        echo "Diziden Kaldırılan 1. Eleman: " . array_shift($isimler) . "<br>";
        echo "Diziden Kaldırılan 2. Eleman: " . array_shift($isimler) . "<br>";
        echo "Diziden Kaldırılan 3. Eleman: " . array_shift($isimler) . "<br>";

        echo "<pre>";
        print_r($isimler);
        echo "</pre>";
    ?>

<h5> Dizinin Sonundan Eleman Çıkarma </h5>

<?php
    $isimler = array("Ali","Ahmet","Ayşe","Huriye");
    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    echo "Diziden Kaldırılan 1. Eleman: " . array_pop($isimler) . "<br>";
    echo "Diziden Kaldırılan 2. Eleman: " . array_pop($isimler) . "<br>";
    echo "Diziden Kaldırılan 3. Eleman: " . array_pop($isimler) . "<br>";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";
    ?>

    <h5>Dizilerde Explode İşlemi </h5>

    <?php

        echo $pizza = "dilim-1,dilim-2,dilim-3,dilim-4";
        $dizi = explode(",", $pizza );
        echo "<pre>";
        print_r($pizza);
        echo "</pre>";


    ?>

    <h5>Dizilerde implode İşlemi </h5>

    <?php

        $pizza = array("Dilim1","Dilim2","Dilim3");
        $dizi = implode(", ", $pizza );
        echo "<pre>";
        print_r($pizza);
        echo "</pre>";


    ?>
</body>
</html>