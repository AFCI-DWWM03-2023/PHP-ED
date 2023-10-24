<?php

$a = 1 ;
$b = 2 ;
$c = 3 ;
$d = $a ;
$a = $c ;
$c = $b ;
$b = $d ;

echo "La valeur de A est : " . $a . "\n";
echo "La valeur de B est : " . $b . "\n";
echo "La valeur de C est : " . $c . "\n";