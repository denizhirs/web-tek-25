<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php ders-2</title>
</head>
<body>
    <!--
Değişken Tanımlama:
1.değişkenler $ işareti ile tanımlanır.
2.mutlaka bir harf veya _ işareti ile başlayabilir.
3.değişkenler rakamlar ile başlayamaz.
4.değişken içerisinde türkçe karakter kullanılmaz.
5.Değişkenlerde büyük küçük haarf duyarlılığı vardır.
6.programlama dili içerisinde bulunan özel tanımlar değişken ismi olarak kullanılamaz.
-->
<h4>Matematiksel İfadeler</h4>
<h5>Toplama işlemi</h5>
<?php 
$sayi1 =20; //sayi1 değişken tanımladı
$sayi2 = 18; // sayi2 değişken tanımlandı
$sonuc = $sayi1 + $sayi2; //toplama işlemi yapıldı
echo $sonuc; // ekrana yazdırıldı
echo "<br> <br> işlemin sonucu: $sayi1 + $sayi2 = $sonuc"; // sonuç ekrana yazdırıldı
echo "<br><br> Atamalı Toplama İşlemi:";
$deger = 10;
$ekdeger =  60;
echo "Sonuç= $deger + $ekdeger =" . $deger += $ekdeger; //  atamalı toplama işlemi
echo "<br> değer değişkeninin içeriği : $deger";
echo "<br>değer değişkenin yeni içeriği:". $deger += 123;
echo "<br>değer değişkeninin son içeriği:$deger";

echo "<br><br> Atamalı çıkartma İşlemi:";
echo "<br><br>Sonuç= $deger - $ekdeger =" . $deger -= $ekdeger; //  atamalı çıkartma işlemi
echo "<br> değer değişkeninin içeriği : $deger";
echo "<br>değer değişkenin yeni içeriği:". $deger -= 40;
echo "<br>değer değişkeninin son içeriği:$deger";

echo "<br><br> Atamalı çarpma İşlemi:";
echo "<br><br>Sonuç= $deger * $ekdeger =" . $deger *= $ekdeger; //  atamalı çarpma işlemi
echo "<br> değer değişkeninin içeriği : $deger";
echo "<br>değer değişkenin yeni içeriği:". $deger *= 10;
echo "<br>değer değişkeninin son içeriği:$deger";

echo "<br><br> Atamalı bölme İşlemi:";
echo "<br><br>Sonuç= $deger / $ekdeger =" . $deger /= $ekdeger; //  atamalı bölme işlemi
echo "<br> değer değişkeninin içeriği : $deger";
echo "<br>değer değişkenin yeni içeriği:". $deger /= 2;
echo "<br>değer değişkeninin son içeriği:$deger";

echo "<br><br> mod alma işlemi:";
$sayii1 = 50;
$sayii2 = 3;
$sonucc = $sayii1 % $sayii2;
echo "<br>İşlemin sonucu: $sayii1%$sayii2 = $sonucc";
?>
<h4>ARTTIRMA İŞLEMİ</h4>
<?php 
$sayii1 = 50;
echo "<br>arttırma işlemi yapıldı:".$sayii1++;
echo "<br>işlemin sayi:".$sayii1;
$sayii2 = 20;
echo "<br>arttırma işlemi yapıldı:".++$sayii2;
echo "<br>işlemin sayi:".$sayii2;
?>
</body>
</html>