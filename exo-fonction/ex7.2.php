<?php
function afficherTableau($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        echo $tab[$i] . " ";
    }
}

function triBullesDecroissant($tab)
{
    $permutation = 0;
    for ($i = 0; $i < count($tab); $i++) {
        for ($j = 0; $j < count($tab) - 1; $j++) {
            if ($tab[$j] < $tab[$j + 1]) {
                $permutation = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $permutation;
            }
        }
    }
    return $tab;
}

function triInsertionDecroissant($tab)
{
    for ($i = 0; $i < count($tab); $i++) {
        $insertion = $tab[$i];
        for ($j = 0; $j < $i; $j++) {
            $courant = $tab[$j];
            if ($insertion > $courant) {
                $tab[$j] = $insertion;
                $insertion = $courant;
            }
        }
        $tab[$i] = $insertion;
    }
    return $tab;
}

$tailleTab = readline("Entrer la taille du tableau : ");
for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = rand(0, 100);
    $tab2[$i] = rand(0, 100);
}

echo "\nValeurs du tableau 1 : ";
afficherTableau($tab1);
echo "\nValeurs du tableau 2 : ";
afficherTableau($tab2);

$tab1 = triBullesDecroissant($tab1);
$tab2 = triInsertionDecroissant($tab2);

echo "\nTableau 1 trie à bulles (décroissant) : ";
afficherTableau($tab1);
echo "\nTableau 2 tri par insertion (décroissant) :";
afficherTableau($tab2);
