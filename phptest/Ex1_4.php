<?php

$x = 54 ;
$z = 102 ;
$y = $x ;
$x = $y ;

echo "La valeur de X est : " . $x . "\n";
echo "La valeur de Y est : " . $y . "\n";

$x = 54 ;
$y = 102 ;
$z = $y ;
$y = $x ;
$x = $z ;

echo "La valeur de X est : " . $x . "\n";
echo "La valeur de Y est : " . $y . "\n";