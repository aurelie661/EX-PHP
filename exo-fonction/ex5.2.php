<?php

$nombre = readline(" Veuillez donner un nombre entre 10 et 20 : ");
// AFFICHE TANT QUE LA CONDITION EST NULL
while ($nombre < 10 || $nombre > 20) {
  //GERE LES PLUS PETIT OU PLUS GRAND
  if ($nombre < 10) {
    echo "Trop petit!\n";
    $nombre = readline(" Veuillez donner un nombre entre 10 et 20 : ");
  } elseif ($nombre > 20) {
    echo "Trop grand\n";
    $nombre = readline(" Veuillez donner un nombre entre 10 et 20 : ");
  }
}
echo "Merci!";
