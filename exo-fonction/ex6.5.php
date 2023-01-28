<?php

//CREER UN TABLEAU 1 COMME PREMIERE VALEUR PUIS RAJOUTE 2 A LA VALEUR A CHAQUE INDEXF
$N[0] = (1);
for ($k = 1; $k <= 6; $k++) {
    $N[$k] = $N[$k - 1] + 2;
}
for ($i = 0; $i <= 6; $i++) {
    echo $N[$i] . " ";
}
