<?php

$prixht = readline("Prix de l'article : ") ;
$nombre = readline("Nombre d'article : ") ;
$Tva = readline("Montant de la tva en % : ") ;
$prixttc = round($prixht * $nombre * (1 + $Tva / 100), $precision = 2, $mode = PHP_ROUND_HALF_UP) ;

echo $prixttc;