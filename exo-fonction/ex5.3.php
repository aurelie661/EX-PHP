<?php

$nombre = readline("Veuillez entrer un nombre : ");
//AFFICHE LES 10 NOMBRES QUI SUIT LE NOMBRE TAPER
for ($i = 1; $i < 11; $i++) {
  echo $nombre + $i . " ";
}
