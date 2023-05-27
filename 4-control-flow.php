<?php
$var = 10;
if($var > 10){
    echo "lebih dari sepuluh<br>";
}elseif($var < 10){
    echo "kurang dari sepuluh<br>";
}else{
    echo "nilainya sepuluh<br>";
}

$hari = "selasa";
switch ($hari){
    case "senin":
        echo "1";
        break;
    case "selasa":
        echo "2";
        break;
    case "rabu":
        echo "3";
        break;
    case "kamis":
        echo "4";
        break;
    case "jumat":
        echo "5";
        break;
    case "sabtu":
        echo "6";
        break;
    case "minggu":
        echo "7";
        break;
    default:
        echo "bukan hari";
}
?>