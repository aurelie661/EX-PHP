<?php
$tailleTab = readline("Entrer la taille du tableau : ");
for ($i = 0; $i < $tailleTab; $i++) {
    $tab[$i] = rand(0, 100);
}

echo "\nValeurs du tableau : ";
for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i] . " ";
}
$j = count($tab) - 1;
for ($i = 0; $i < $j; $i++) {
    $permutation = $tab[$j];
    $tab[$j] = $tab[$i];
    $tab[$i] = $permutation;
    $j--;
}
echo "\nValeurs du tableau inversé : ";
for ($i = 0; $i < count($tab); $i++) {
    echo $tab[$i] . " ";
}
