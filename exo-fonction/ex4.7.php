<?php

$age = 24;
$anneDePermis = 3;
$accident = 1;
$anneeDAssurance = 3;
$categorie = 0;
//COMPTEUR DE POINT PAR CATEGORIE
if ($age > 25) {
  $categorie += 1;
}
if ($anneDePermis >= 2) {
  $categorie += 1;
}
if ($anneeDAssurance > 1) {
  $categorie += 1;
}
//ATTRIBUTION DES COULEURS GRACE AUX CAT
$categorie = $categorie - $accident;
if ($categorie == 0) {
  echo "Vous bénéficiez du tarif rouge.";
} elseif ($categorie == 1) {
  echo "Vous bénéficiez du tarif orange.";
} elseif ($categorie == 2) {
  echo "Vous bénéficiez du tarif vert.";
} elseif ($categorie == 3) {
  echo "Vous bénéficiez du tarif bleu.";
} else {
  echo "Désolé, nous sommes dans l'impossibilité de vous assurer!";
}
