<?php

$tableau = array();
$i = 0;

while ($i <= 10) {
    $tableau[] = rand(0, 50); 
    $i++; 
}
if(in_array(42, $tableau)){
    echo 'le nombre 42 est le tableau';
}else{
    echo 'le nombre 42 est pas dans le taleau';
}

var_dump($tableau);
?>

