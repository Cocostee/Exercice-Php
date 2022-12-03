<?php 

function repondre_oui_ou_non ($phrase){
    while (true) {  

        $rrr = 'ok';
        $reponse = readline($phrase . 'o/n   :' );
        if ($reponse === 'o') {
            return true; 
        } elseif ( $reponse === 'n'){
            return $rrr;
        }
    }
}  

function demander_creneaux() {

    while (true) {
        $debut = (int)readline('heure de debut :');
        $fin = (int)readline('heure de fin :');
        if ($debut > $fin){
            echo 'L\'heure de debut est superiere a l\'heure de fin    ';
        } else{
            $creneaux = [$debut, $fin];
            $action = readline ('voulez vous enregistrer un nouveau creneau ? (o/n) ');
            if ($action === 'n'){
                break;
            }
        } 
        
    }

}  


$creneau = demander_creneaux();

$resultat = repondre_oui_ou_non('vous voulez continuer ? ');



var_dump($resultat);