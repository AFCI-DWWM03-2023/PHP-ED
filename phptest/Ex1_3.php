<?php

$a = 3 ;
$b = 10 ;
$c = $a + $b ;
$b = $a + $b ;
$a = $c ;

echo "La valeur de A est : " . $a . "\n";
echo "La valeur de B est : " . $b . "\n";
echo "La valeur de C est : " . $c;