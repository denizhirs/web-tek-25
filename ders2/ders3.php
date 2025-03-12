<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //ceil :herhangi bir ondalıklı sayıyı yukarı yuvarlamak için kullanılır.
    //floor:herhangi bir ondalıklıklı sayıyı aşağı yuvarlamak için kullanılır.
    //round : herhangi bir ondalılklı sayıyı en yakına yuvarlamak için kullanılır
    
    ?>
    <h5>ceil işlemi</h5>
    <?php
    $sayi1 = 14.24325;
    echo"Sonuç=".ceil($sayi1);
    echo "<br> \$sayi1 değişkenin değeri $sayi1 yukarı yuvarlama işlemi sonucu:".ceil($sayi1);
    ?>
    <h5>floor işlemi</h5>
    <?php 
    $sayi1 = 24.98563;
    echo "Sonuç".floor($sayi1);
    echo "<br> \$sayi1 değişkenin değeri $sayi1 aşağı yuvarlama işlemi sonucu:".floor($sayi1);

    ?>
    <h5>Round işlemi</h5>
    <?php
    $sayi1 = 18.425225;
    echo "Sonuç=".round($sayi1);
    echo "<br> \$sayi1 değişkenin değeri $sayi1 yakına yuvarlama işlemi sonucu:".round($sayi1);//.5 in üstündeyse üst sayıya altındaysa alt sayıya yuvarlar
    echo"<br><br> ilk iki hanenin sabit tutularak 3.haneye göre round işleminin uygulanması :";
    $sayi1 = 157.5353768;
    echo "<br><br>\$sayi1 değişkenin değeri $sayi1 round işlemin sonucu:".round($sayi1,-1);

    $sayi1 = 157.5353768;
    echo "<br>\$sayi1 değişkenin değeri $sayi1 round işlemin sonucu:".round($sayi1,-2);
    ?>
<h5>number format işlemi</h5>
    <?php 
    $sayi1 = 244234.98563;
    echo "<br> \$sayi1 değişkenin değeri $sayi1  işlemi sonucu:".number_format($sayi1);
    echo "<br> \$sayi1 değişkenin değeri $sayi1  işlemi sonucu:".number_format($sayi1,2);
    echo "<br> \$sayi1 değişkenin değeri $sayi1  işlemi sonucu:".number_format($sayi1,2,",",",");
    echo "<br> \$sayi1 değişkenin değeri $sayi1  işlemi sonucu:".number_format($sayi1,2,"TL",",");
    ?>
</body>
</html>