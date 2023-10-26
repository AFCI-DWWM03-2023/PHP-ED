<?php

function alea($seed){
    $res = ( 1103515245 * $seed + 12345 ) % 2147483647;
    return $res;
}

$temps= microtime();
$temps = str_replace('.', '', $temps);
$temps = intval($temps);
echo $temps . "\n";



for($i=0;$i<10;$i++){
    $temps= microtime();
    $temps = str_replace('.', '', $temps);
    $temps = intval($temps);
    echo alea($temps) . "\n";
}