<?php

//AFFICHE TANT QUE LA CONDITION NEST PAS EFFECTUER
do {
  $nombre = (int)readline("Donner un nombre entre 1 et 3 :");
} while ($nombre < 1 || $nombre > 3);

echo "Merci!";
