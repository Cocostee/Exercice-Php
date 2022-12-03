<?php


//on demande a l'utilisateur de rentrer les horaires d'ouverture d'un magasins 
//on demande a l'utlisatuer de rentres une heure et on lui dira si le magasins est ouvert 

//on demande a l'utlisateur de rentre un horaire 
    //on demande l'heure de debut 
    //on demande l'heure de debut 
    //verifier que l'heure de debut est infereirei l'heure de fin 
//on demande si on veut ajouter une creneaux (o/n)
//on demande a l'utlisateur de rentrer un fuseau horaire 
//on affiche l'etat du magasin 

$creneaux = [];




$heure = (int)readline('A qu\'elle heure voulez vous visiter le magasin ? ');
$creneautrouvé = false;

foreach($creneaux as $creneau) {

    if ($heure >= $creneau[0] && $heure <= $creneau[1]){
        $creneautrouvé = true;
        break;
    }
}

if ($creneautrouvé) {
     echo('magasin ouvert');
} else {
    echo ('magasin pas ouvert');
}
   



