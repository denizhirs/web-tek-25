<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    <h3>Sık Kullanılan hazır fonksiyonlar</h3>
    <?php
    $metin = "<b>Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı</b><br><br>";
    echo $metin;
    $byazi = strtoupper($metin); //yazıyı büyük yapar
    $kyazi = mb_strtoupper($byazi); //yazıyı küçük yapar
    $mb_byazi = mb_strtoupper($kyazi); //yazıyı büyük yapar
    $mb_kyazi = mb_strtolower($mb_byazi); //yazıyı küçük yapar
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi); //gelen metnin ilk harfini büyük yapar
    $ilk_harf_buyuk_kelime = ucwords($mb_byazi); //gelen metnin kelimelerinin baş harflerini büyük yapar
    echo "karakter sayısı:" . strlen($metin);
    echo "<br><br>metnin ilk 25 karakteri:" . substr($metin, 0, 25);
    $lorem = "<br><br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem in harum iste deleniti rem, itaque veritatis dolores magnam, ad autem sint, incidunt totam numquam quo reiciendis nesciunt libero maiores dolor?
";
    echo "<br><br>metnin lorem belirli bir karakter sayısı:" . substr($lorem, 0, 97)."...";
    ?>
    <br>
    <br>
<a href="https://www.adu.edu.tr/" target="_blank">ADNAN MENDERES ÜNİVERSİTESİ</a>
</body>

</html>