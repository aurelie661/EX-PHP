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
