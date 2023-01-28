<?php
$tab1 = array(4, 8, 7, 9, 1, 5, 4, 6);
$tab2 = array(7, 6, 5, 2, 1, 3, 7, 4);
//ADDITION LES VALEURS DES DEUX TABLEAUX
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}
echo "Somme des éléments des deux tableaux de départ :\n";
foreach ($tab3 as $key => $value) {
    echo $value . " ";
}
