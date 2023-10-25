<?php

echo "Ex 4 \n";

$nombre1 = readline("Donne moi un premier nombre : ");
$nombre2 = readline("Donne moi un deuxième nombre : ");

if ($nombre1 == 0 || $nombre2 == 0) :
    echo "Le produit de tes nombres est nul <\n>";
elseif ($nombre1 < 0 ^ $nombre2 < 0):
    echo "Le produit de tes nombres est négatif <\n>";
else:
    echo "Le produit de tes deux nombres est positif <\n>";
endif;

echo "Ex5 \n";

$age = readline("Quel est l'age de l'enfant ? ");

if ($age >= 6 & $age <= 7):
    echo "L'enfant est en catégorie Poussin <\n>";
elseif ($age >= 8 & $age <= 9):
    echo "L'enfant est en catégorie Pupille <\n>";
elseif ($age >= 10 & $age <= 11):
    echo "L'enfant est en catégorie Minime <\n>";
elseif ($age >= 10):
    echo "L'enfant est en catégorie Cadet <\n>";
else:
    echo "l'enfant ne rentre pas dans une des catégorie <\n>";
endif;

echo "Ex6 \n";

$heure = readline("Donne moi juste l'heure sans les minutes : ");
$minute = readline("Donne moi les minutes : ") + 1;

if ($minute == 60):
    $heure++;
    $minute = 00;
endif;
if ($heure == 24):
    $heure = 00;
endif;

echo "Dans une minutes il va être " . $heure ."h" . $minute . "<\n>";

echo "Ex7 \n";

$heure2 = readline("Donne moi juste l'heure sans les minutes : ");
$minute2 = readline("Donne moi les minutes : ");
$seconde =  readline("Donne moi les secondes : ") + 1;

if ($seconde == 60):
    $minute2++;
    $seconde = 00;
endif;
if ($minute2 == 60):
    $heure2++;
    $minute2 = 00;
endif;
if ($heure2 == 24):
    $heure2 = 00;
endif;

echo "Dans une seconde il va être " . $heure2 ."h" . $minute2 . "m" . $seconde . "s" . "<\n>";

echo "Ex8 \n";

$nombrePt = readline("Nombre de photocopies effectuées : ");

if ($nombrePt <=10):
    $prix = $nombrePt *0.10;
elseif ($nombrePt >10 & $nombrePt <= 30):
    $prix = 1 + ($nombrePt - 10) * 0.09;
else :
    $prix = 2.8 + ($nombrePt - 30) * 0.08;
endif;

echo "Prix à payé : $prix \n";

echo "Ex9 \n";

$age2 = readline("AGE ? ");
$sexe = readline("SEXE ? h ou f ");

if ($age2 >= 20 and $sexe  == "h"):
    echo "Tu dois payer des impots \n";
elseif ($age2 >= 18 and $age2 <= 35 and $sexe == "f"):
    echo "Tu dois payer des impots \n";
else :
    echo "Tu ne dois pas payer d'impots \n";
endif;

echo "Ex10 \n";

$jour = readline("Jour ? : ");
$mois = readline("Mois ? : ");
$annee = readline("Année ? : ");

if (($annee % 4) == 0 and (($annee % 100) != 0) xor (($annee % 400) == 0)):
    echo "$annee est une année bissextile";
else:
    echo "$annee n'est pas une année bissextile";
endif;

// echo "Ex 10 perso \n";

// $ANNEE = 0;

// while ($ANNEE != 100000){
//     if (($ANNEE % 4) == 0 and (($ANNEE % 100) != 0) xor (($ANNEE % 400) == 0)):
//         echo "$ANNEE est une année bissextile \n";
//     else:
//         echo "$ANNEE n'est pas une année bissextile \n";
//     endif;
//     $ANNEE++;
// }