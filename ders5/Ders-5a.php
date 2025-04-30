<?php

$erkekler = array("Ali","Ahmet","Kemal");
$kadinlar = ["Ayşe","Ebru","Elif"];

echo "<pre>";
print_r($erkekler);
echo "</pre>";

echo "<pre>";
print_r($kadinlar);
echo "</pre>";

/* Dizinin Bir Elemanının Yazdırılması */

echo "Erkekler Dizisindeki 1. Eleman: " . $erkekler[0] . "<br>";
echo "Kadınlar Dizisindeki 3. Eleman: " . $kadinlar[2] . "<br>";

/* Array Tanımlamada Key-Value İlişkisi */

$personel = array(
    "id"       => 1,
    "name"     => "Elif Nur",
    "surname"  => "Candan",
    "graduate" => "Aymes Bilgisayar Programcılığı" 
);

echo "<pre>";
print_r($personel);
echo "</pre>";

echo "Personelin Adı: " . $personel["name"] . "<br>";
echo "Personelin Soyadı: " . $personel["surname"] . "<br>";

/* Foreach Döngüsüyle Dizi İçeriğinin YAzdırılması */

foreach($personel as $key => $value) {
    echo "$key - $value <br>";
}
?>

<h3> Tanımlı Diziye İçerik Ekleme </h3>

<?php

$degerler = [];

echo "<pre>";
print_r($degerler);
echo "</pre>";

$degerler[] = "Ocak";
$degerler[] = "Şubat";
$degerler[5] = "Mart";
$degerler["key"] = "Nisan";
$degerler[] = "Eylül";
$degerler[3] = "Temmuz";

echo "<pre>";
print_r($degerler);
echo "</pre>";


?>