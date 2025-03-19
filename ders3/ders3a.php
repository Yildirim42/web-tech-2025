<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Değişkenler</title>
</head>
<body>
    <h3>Global Değişkenler</h3>
    <h4>$_GET</h4>

    <form action="" method="GET">

        <label for="kullanici">Kullanıcı Adı: </label>
        <input type="text" name="username" id="kullanici">
        <br>
        <label for="sifre">Şifrenizi Giriniz: </label>
        <input type="password" name="password" id="sifre">
        <br>
        <input type="submit" value="Giriş Yap">

    </form>

    <?php

    
    $kullanici_adi     = @$_GET["username"];
    $kullanici_sifresi = @$_GET["password"];
    if ($kullanici_adi == "ali" && $kullanici_sifresi=="12345") {
        echo "Giriş Yapıldı <br>";
    }
    else {
        echo "Kullanıcı adı ya da şifre hatalı <br>";
    }

    echo "Formdan gelen kullanıcı adı: $kullanici_adi <br>";
    echo "Formdan gelen kullanıcı şifresi: $kullanici_sifresi <br>"; 

    ?>
</body>
</html>