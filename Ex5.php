<?php

echo "Ex1 \n";

$alea = rand(1, 9);

for ($i = 1; $i <=10; $i++){
    echo "$i * $alea = " . $i * $alea . "\n";
}

echo "Ex2 \n";

$nombre2 = readline("Entrez un nombre : ");
echo "Les 5 nombres précedents sont : \n";

for ($i = 1; $i <=5; $i++){
    echo $nombre2 - $i . "\n";
}

echo "Les 5 nombres suivants sont : \n";

for ($i = 1; $i <=5; $i++){
    echo $nombre2 + $i . "\n";
}

echo "Ex3 \n";

$nombre3 = readline("Entrez un nombre : ");
$factorielle = 1;

for ($i = 1; $i <= $nombre3; $i++){
    $factorielle = $i * $factorielle;
}

echo "$factorielle \n";

echo "Ex4 \n";

$nombre4 = readline("Entrez un nombre : \n");
$grand = $nombre4;
$petit = $nombre4;

for ($i = 1; $i <= 4; $i++){
    $nombre4 = readline("Entrez un nombre : \n");
    // if ($nombre4 > $grand){
    //     $grand = $nombre4;
    // }
    // if ($nombre4 < $petit){
    //     $petit = $nombre4;
    // }
    switch ($nombre4){
        case $grand < $nombre4 :
            $grand = $nombre4;
            break;
        case $petit > $nombre4 :
            $petit = $nombre4;
            break;
    }
}

echo "Le plus grand est $grand \n";
echo "Le plus petit est $petit \n";