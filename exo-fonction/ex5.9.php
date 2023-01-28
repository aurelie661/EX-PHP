<?php
$i = 0;
$sommeAPayer = 0;
$billetDix = 0;
$billetCinq = 0;
//DEMANDER LES PRIX DES ARTICLES ET LES ADDITIONNER
do {
    $i++;
    $achat = readline("Entrez le prix de l'article " . $i . " : ");
    $sommeAPayer = $sommeAPayer + $achat;
} while ($achat != 0);

echo "La somme à payer est de : " . $sommeAPayer . "€\n";
//DEMANDER LA SOMME AU CLIENT ET CALCULER SON RENDU
$sommeDonne = readline("Vous donnez combien ? ");
$rendu = $sommeDonne - $sommeAPayer;
echo "La remis de monnaie est de : " . $rendu . " €\n";

for ($i = 0; $rendu >= 10; $i++) {
    $rendu -= 10;
    $billetDix += 1;
}
if ($rendu >= 5) {
    $rendu -= 5;
    $billetCinq += 1;
}
echo "Rendu monnaie : " . $billetDix . " billet(s) de 10€ " . $billetCinq . " billet de 5 € " . $rendu . " pièce(s) de 1 € ";
