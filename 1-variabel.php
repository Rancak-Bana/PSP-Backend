<?php

$var1 = "Hallo Global<br>";

function test1(){
    $var1 = "Hallo local<br>";
    echo $var1;
}

test1();
echo $var1;


$var2 = "hai<br>";

function test2(){
    global $var2;
    $var2 = "halo<br>";
    echo $var2;
}

test2();
echo $var2;


function static_test(){
    static $i = 0;
    echo $i . "<br>";
    $i++;
}

static_test();
static_test();
?>