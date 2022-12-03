<?php

//Déclarer une variable $heure qui contient la valeur de type integer de votre choix comprise entre 0 et 24. 
//Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.

$heure = readline('Il est quelle heure ? ');

if ($heure < 0 || $heure > 23){
    echo 'AHHHHH';
    return $heure;
}
if ($heure < 10){
    echo ' il est tres tot mon brave ';
}
if ($heure > 10 && $heure <= 12){
    echo ' il est bientot l \'heure de manger';
}
if ($heure > 12 && $heure <= 16){
    echo 'C\'est l\'aprem';
}
if ($heure > 16 && $heure <= 19){
    echo 'C\'est fin d\'aprem';
}
if ($heure > 19 && $heure <= 23){
    echo 'C\'est l\'heure de jouer';
}
?>