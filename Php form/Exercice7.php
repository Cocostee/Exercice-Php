<?php

//Déclarer une variable $budget qui contient la somme de 1 553,89 €. Déclarer une variable $achats qui contient la somme de 1 554,76 €. 
//Afficher si le budget permet de payer les achats.

$budget = readline('Votre budger ? ');
$achat = readline('Vos achats ? ');

if ($achat > $budget){
    echo 'Vous avez pas assez de fond';
}
else {
    echo 'Vous avez les fonds';
}
?>