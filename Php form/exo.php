<?php

//Demande à l'utilisateur de rentrer une note ou de tape fin
//chaque note est sauvegarder dans un tableau $note (pensez $notes[])
//à la fin on affiche le tableau de note sous forme de liste.

// tant que l'utlisateur ne tape aps "fin" 
    //On ajoute la note tapée au tableau notes
//pour chaque note DANS notes 
    //On affiche "- note"

$notes = [];
$action = null;

while ($action !== 'fin'){
    $action = readline('Entrez une note et marquer \'fin\' pour terminer la saisie :');
    if ($action !=='fin'){
        $notes[]= (int)$action;
    }
}

foreach ($notes as $note) {
    # on affiche note 
    echo "- $note \n";

}

