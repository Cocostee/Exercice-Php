<?php
  for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
       if ($j == 1) {
         echo str_pad($i * $j, 2, " ");
       } else {
         echo str_pad($i * $j, 4, " ");
       }
    }
    echo "\n";
  }
?>