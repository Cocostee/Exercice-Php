<?php

//Déclarer une variable $sexe qui contient une chaîne de caractères.
//Créer une condition qui affiche un message différent en fonction de la valeur de la variable.

$reponse = readline($phrase . 'Femme ou homme ?' );

if ($reponse == 'homme'){
    echo 'vous etes '. $reponse ;
}
else {
    echo ' vous etes une femme.';
}

?>