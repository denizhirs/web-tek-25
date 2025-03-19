<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ders 3 (Global Değişkenker) </title>
</head>
<body>
    <h2>Global Değişkenker</h2>
    <h4>$_POST</h4>
    <form action="" method="post">
        <label for="username">Kullanıcı Adı : </label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Şifre : </label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="Giriş Yap">
    </form>
    <?php
        $kullanici_Adi = $_POST["username"];
        $kullanici_Sifre = $_POST["password"];
        if($kullanici_Adi == "deniz" && $kullanici_Sifre == "123"){
            echo"Giris Basarılı";
        }
    ?>
</body>
</html>