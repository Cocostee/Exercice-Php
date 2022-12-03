
<?php 
/*
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
$eleve[] = 'Jean';

print_r($eleve);
<?php 
$eleve = [
    'nom' => 'Doe',
    'prenom' => 'Marc',
    'notes' => [10, 20, 15]
];
$eleve['prenom'] = 'Jean';
$eleve['notes'][] = 16;
print_r($eleve['notes']);

*/
 
$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'lacoste',
        'notes' => [16, 15, 20]
    ],
    [
        'nom' => 'boris',
        'prenom' => 'hellman',
        'notes' => [16, 14, 19]
    ]
    ];


echo $classe[1]['notes'][2];

//on recupere notre classe : on prend le 2eme table donc [1] , je recupere l'index note et 
//je veux recupere la 2 eme note 


