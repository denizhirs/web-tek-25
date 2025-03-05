<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dersleri</title>
</head>

<body>
    <?php
    $metin = "<br>Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı";
    echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı<br>";
    echo "<br>Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı<br>"; //echo ekrana yazdırır
    echo $metin;  //$ ile değişken tanımladık
    echo strtoupper($metin);   //metinleri büyük yapar     
    $bharf = strtoupper($metin);
    $kharf = strtolower($bharf);

    echo $bharf2 = mb_strtoupper($metin);
    echo $kharf2 = mb_strtolower($bharf2);

    echo $bharf;
    echo $kharf;
    ?>

</body>

</html>