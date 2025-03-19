<?php

$gelendosya = $_FILES["cv"];

print_r($gelendosya);
echo"<pre>";
print_r($gelendosya);
echo "</pre>";

echo"Gelen Dosyanın Adı :".$gelendosya["name"] ."<br>";
echo"Gelen Dosyanın mim türü :".$gelendosya["type"] ."<br>";
echo"Gelen Dosyanın temp dizini :".$gelendosya["tmp_name"] ."<br>";
echo"Gelen Dosyanın boyutu :".$gelendosya["size"] ."<br>";
?>