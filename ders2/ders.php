<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
Değişken Tanımlama:
1. Değişkenler $ ile tanımlanır.
2. mutlaka bir harf veya _ işareti ile başlayabilir.
3. Değişkenler rakamlar ile başlayamaz.
4. Değişken içerisinde boşluk ve Türkçe karakterler kullanılmaz.
5. Değişkenlerde büyük küçük harfe duyarlıdır.
6. Programlama dili içerisinde bulunan özel tanımlar değişken adı olarak kullanılmaz.


-->

<h4> Matematiksel İfadeler </h4>
<h5> Toplama İşlemi </h5>

<?php

    $sayi1 = 20;
    $sayi2 = 17;
    $sonuc = $sayi1 + $sayi2;

    echo $sonuc;

    $deger = 120;
    $ekdeger = 72;
    echo "<br>Sonuç: $deger - $ekdeger = " . $deger -= $ekdeger;
    echo "<br>İşlemin Sonucu: $sayi1 + $sayi2 = $sonuc";

    echo "<br>Değer Değişkenin İçeriği $deger";

    echo "<br>Değer Değişkeninin Yeni İçeriği:" . $deger+=123;

    echo "<br>Değer Değişkeninin Son İçeriği: $deger";




?>

<h5> Arttırma İşlemi </h5>

<?php
$sayi1 = 50;

echo "<br> Arttırma İşlemi Yapıldı:" . ++$sayi1;
echo "<br>İşlemin Sayi:" . $sayi1;

$a = 6;
echo "<br>" . --$a . "<br>";
echo "<br>" . --$a . "<br>";
echo "<br>" . --$a . "<br>";

$b = 9;
echo "<br>" . $b-- . "<br>";
echo "<br>" . $b-- . "<br>";
echo "<br>" . $b-- . "<br>";


?>

<!-- 
    ceil: Herhangi bir ondalıklı sayıyı yukarı yuvarlar.
    floor: Herhangi bir ondalıklı sayıyı aşağı yuvarlar.
    round: Herhangi bir ondalıklı sayıyı en yakına yuvarlar.

-->

<h5>Ceil İşlemi</h5>

<?php

    $sayi1 = 14.2687;
    echo "Sonuç " . ceil($sayi1);
?>

<h5> Floor İşlemi </h5>
<?php

    $sayi1 = 24.9875;
    echo "Sonuç " . floor($sayi1);
?>

<h5> Round İşlemi </h5>
<?php

    $sayi1 = 24.9875;
    echo "Sonuç " . round($sayi1);
    echo "<br>". round($sayi1,2);
    echo "<br>" . round($sayi1, -1); /* virgülden öncesi */
?>

<?php

    $sayi = 14.242932;
    echo "<br>\$sayi değişkeninin değeri $sayi yukarı yuvarlama işlemi sonucu: " . ceil($sayi);
?>

<h5> Number Format İşlemi </h5>
<?php

    $sayi1 = 95459.28594;
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 işlemin sonucu ". number_format($sayi1);
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 işlemin sonucu ". number_format($sayi1,2);
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 işlemin sonucu ". number_format($sayi1,2,",",".");
?>
</body>
</html>