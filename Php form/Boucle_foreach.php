<?php
$eleves = [ 
    // 'cm2' est une key (classe) qui est lieu a son objet 'jean'(prenom)
    'cm2' => ['Jean', 'Marc', 'Jane', 'Marion'],
    'cm1' => ['Emilie', 'Flo', 'Marcel']
];

foreach ($eleves as $classe => $listeleves) {
    echo "La classe $classe:\n";
    foreach ($listeleves as $eleve) {
        echo "- $eleve\n";
    }
    echo "\n";
}
//afficher dans la classe de l'élève

//la classe CM2
//- Jean
//- MArc

//La classe CM1
//- Emilie
//