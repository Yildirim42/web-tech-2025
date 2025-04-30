<?php

/* Çok Boyutlu Diziler */

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

echo "1. Boyuttaki Eleman: " . $degerler[0] . "<br>";
echo "1. Boyuttaki Eleman: " . $degerler[2] . "<br>";
echo "2. Boyuttaki Eleman: " . $degerler[3][0] . "<br>";
echo "2. Boyuttaki Eleman: " . $degerler[4][0] . "<br>";
echo "3. Boyuttaki Eleman: " . $degerler[4][1][0] . "<br>";
echo "3. Boyuttaki Eleman: " . $degerler[4][1][1] . "<br>";



?>
