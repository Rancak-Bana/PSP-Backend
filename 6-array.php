<?php
$var1 = array(1,2,3,4,5,6,7,8,9,10);
$var2 = array(
    "nama"=>"budi",
    "umur"=>"17",
    "alamat"=>"jl. jalan"
);

foreach($var2 as $key => $value) {
    echo $key . " = " . $value;
    echo "<br>";
}
?>