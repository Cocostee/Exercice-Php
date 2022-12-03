<?php


function bonjour ($toto = null) {
    if ($toto === null){
        return 'bonjour!';
    }
    return 'bonjour ' . $toto . "\n"; 
}

$nom = readline('Quel est votre prenom ? ');

$salut = bonjour($nom);
echo $salut;
