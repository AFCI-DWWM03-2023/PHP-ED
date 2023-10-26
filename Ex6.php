<?php

$CHOIX = true;

while ($CHOIX){
    
    $choix = readline("Choix de l'Exercice (entre 1 et 7, 0 pour quittez) ");

    switch ($choix){
        case 0:
            echo "Quittez \n";
            $CHOIX = false;
            break;

        case 1:
            echo "Ex1 \n";

        $notes = [];
        $total = 0;

        for ($i=0;$i<9;$i++){
            $notes[$i] = readline("Valeur de la notes \n");
            $total = $total + $notes[$i];
        }

        echo "La moyenne des notes est de " . (round($total / count($notes)) . "\n");
        break;

        case 2:
            echo "Ex2 \n";

            $nbvaleur = readline("Nombre de valeur voulu dans le tableau ? ");
            $tab2 = [];
            
            for ($i=0;$i<$nbvaleur;$i++){
            $tab2[$i] = readline("Valeur souhaitée \n");
            }
            
            $pos = 0 ;
            $neg = 0 ;
            
            for ($i=0;$i<$nbvaleur;$i++){
            if ($tab2[$i] > 0) {
                $pos++;
            }
            if ($tab2[$i] < 0) {
                $neg++;
            }
            }
            
            echo "nombre positif : $pos \nnombre négatif : $neg \n";
            break;
        
        case 3:
            echo "Ex3 \n";
            $nbvaleur2 = readline("Nombre de valeur voulu dans le tableau ? ");
            $tab3 = [];
            $somme = 0;

            for ($i=0;$i<$nbvaleur2;$i++){
            $tab3[$i] = readline("Valeur souhaitée \n");
            }

            for ($i=0;$i<count($tab3);$i++){
            $somme = $somme + $tab3[$i];
            }

            echo $somme . "\n";
            break;

        case 4:
            $tab41 = [];
            $tab42 = [];
            $tabsomme4 = [];

            $nbvaleur4 = readline("Nombre de valeur dans les deux tableaux ? ");
            for ($i=0;$i<$nbvaleur4;$i++){
                $tab41[$i] = readline("Valeur souhaitée dans le 1er tableaux ? ");
                $tab42[$i] = readline("Valeur souhaitée dans le 2er tableaux ? ");
                $tabsomme4[$i] = $tab41[$i] + $tab42[$i];
                }
            echo "La somme des deux tableaux : " . implode( "|", $tabsomme4) . "\n";
        
        case 5:
            echo "Ex5 \n";

            $nbvaleur5 = readline("Nombre de valeur voulu dans le tableau ? ");
            $tab5 = [];
            
            for ($i=0;$i<$nbvaleur5;$i++){
            $tab5[$i] = readline("Valeur souhaitée \n");
            }
            $tab5max =  $tab5[0];
            $tab5max2 = 0;
            for ($i=1; $i<$nbvaleur5;$i++){
                if ($tab5[$i] > $tab5max){
                    $tab5max = $tab5[$i];
                    $tab5max2 = $i++;
                }
            }
            echo "La plus grand valeur du tableau est $tab5max et se trouve au rang $tab5max2 \n ";
            break;

            case 6:
                echo "Ex6 \n";
    
                $notes6 = [];
                $total6 = 0;
                $nbvaleur6 = readline("Nombre de valeur voulu dans le tableau ? ");
                $pos6 = 0;
        
                for ($i=0;$i<$nbvaleur6;$i++){
                    $notes6[$i] = readline("Valeur de la notes \n");
                    $total6 = $total6 + $total6[$i];
                }
                $moyenne6 = round($total6 / count($moyenne6));
                for ($i=0; $i<$nbvaleur6;$i++){
                    if ($tab6[$i] > $moyenne6){
                        $pos6++;
                    }
                }
                echo "Le nombre de notes supérieur à la moyenne est de $pos6 \n";
                break;
            
            echo "Ex7 \n";       

        case 7:
            $tab71 = [];
            $tab72 = [];
            $prix7 = 0;

            $nbvaleur7 = readline("Nombre d'article différent ? ");
            for ($i=0;$i<$nbvaleur7;$i++){
                $tab71[$i] = readline("prix de l'article ? ");
                $tab72[$i] = readline("Quantité de l'article ? ");
                $prix7 = $prix7 + $tab71[$i] * $tab72[$i];
                }
            echo "Le prix est de $prix7 \n";
            break;
    }
}





