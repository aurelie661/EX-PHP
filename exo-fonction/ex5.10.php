<?php
$chevauxJouer = 0;
$chevauxPartant = 0;
$fP1 = 1;
$fPartant = 1;
$fJouer = 1;
$x = 1;
$y = 1;
function factorielle($nb2)
{
    $total = 1;
    for ($i = 1; $i <= $nb2; $i++) {
        $total = $total * $i;
    }
    return $total;
}
//CHANCE AU TIERCE
$chevauxPartant = readline("Chevaux partant : ");
$chevauxJouer = readline("Chevaux joués : ");
$p1 = $chevauxPartant - $chevauxJouer;
$fP1 = factorielle($p1);
$fPartant = factorielle($chevauxPartant);
$fJouer = factorielle($chevauxJouer);
//CHANCE DANS LORDRE
$x = $fPartant / $fP1;
//CHANCE DANS LE DESORDRE
$y = $fPartant / $fJouer * $fP1;

echo "Dans l'ordre vous avez 1 chance sur " . $x . " de gagner.\n";
echo "Dans le désordre vous avez 1 chance sur " . $y . " de gagner.";
