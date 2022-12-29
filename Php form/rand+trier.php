<?php
$tableau = array();
$tableau1 = array();
$tableau2 = array();
$i = 0;

while ($i <= 10) {
    $tableau[]= rand(0,100);
    $i++; 
}

foreach ($tableau as $tab) {
    if ($tab < 50){
        $tableau1[] = $tab;
    }else {
        $tableau2[] = $tab;
    }
}

echo 'Tableau 1 : ';
foreach ($tableau1 as $tab1) {
    echo $tab1.' ';
}
echo 'Tableau 2 : ';
foreach ($tableau2 as $tab2) {
    echo $tab2.' ';
}
?>