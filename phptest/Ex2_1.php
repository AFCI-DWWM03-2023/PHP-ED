<?php

echo "Entrez un nombre pour l'avoir au carre";

$nombre = fgets(STDIN);
$nombrecarre = $nombre * $nombre;

echo $nombrecarre;
