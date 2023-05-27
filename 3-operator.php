<?php
$x = 10;
$y = 12 ;
echo $x + $y;
echo "<br>";
echo $x -= $y;

echo "<br>";

$var1 = 123;
$var2 = "45r";
echo $var1 + $var2;

echo "<br>";

$var3 = 666;
$var4 = "666";

if($var3 == $var4){
    echo "nilai sama<br>";
}

if($var3 === $var4){
    echo "sama<br>";
}else{
    echo "beda<br>";
}
?>