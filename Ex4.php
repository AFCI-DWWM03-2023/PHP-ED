<?php

echo "ex1 \n";

$nombre1 = readline("Nombre entre 1 et 3 : ");

while ($nombre1 > 3 or $nombre1 < 1){
    $nombre1 = readline("Nombre entre 1 et 3 !!!!: \n");
}

echo "ex2 \n";

$nombre2 = readline("Nombre entre 10 et 20 : ");

while ($nombre2 > 20 or $nombre2 < 10){
    if ($nombre2 > 20):
        echo "Plus petit !!!! \n";
    else :
        echo "Plus grand !!!! \n";
    endif;
    $nombre2 = readline("Nombre entre 10 et 20 !!!!: \n");
}

echo "ex3 \n";

$nombre3 = readline("Nombre de son choix : ");
$i = 0;
echo "Voici les 10 nombres suivant le nombre $nombre3 : ";

while ($i != 10){
    $nombre3++ ;
    $i++ ;
    echo "$i : $nombre3 " ;
}

echo "ex4 \n";

$nombreA1 = readline("Nombre A de son choix positif et plus grand que le 2eme : ");
$nombreB1 = readline("Nombre B de son choix positif et plus petit que le 1er: ");
$nombreR = -1;

while ($nombreA1 <=0 and $nombreB1 <= 0 and $nombreA1 <= $nombreB1){
    $nombreA1 = readline("Nombre A de son choix positif et plus grand que le 2eme : ");
    $nombreB1 = readline("Nombre B de son choix positif et plus petit que le 1er: ");
}

echo "Le PGCD de $nombreA1 et de $nombreB1 est : ";

while ($nombreR != 0){
    $nombreR = $nombreA1 % $nombreB1;
    $nombreA1 = $nombreB1;
    $nombreB1 = $nombreR;
}

echo "$nombreA1 \n";

echo "ex4 \n";

$nombreA2 = readline("Nombre A de son choix, positif et plus grand que le 2eme : ");
$nombreB2 = readline("Nombre B de son choix, positif et plus petit que le 1er : ");
$nombreR2 = -1;
$nombreAB = $nombreA2 * $nombreB2;

while ($nombreA2 <=0 and $nombreB2 <= 0 and $nombreA2 <= $nombreB2){
    $nombreA2 = readline("Nombre A de son choix, positif et plus grand que le 2eme : ");
    $nombreB2 = readline("Nombre B de son choix, positif et plus petit que le 1er: ");
}

echo "Le PPCM de $nombreA2 et de $nombreB2 est : ";

while ($nombreR2 != 0){
    $nombreR2 = $nombreA2 % $nombreB2;
    $nombreA2 = $nombreB2;
    $nombreB2 = $nombreR2;
}

echo $nombreAB / $nombreA2 ;

?>