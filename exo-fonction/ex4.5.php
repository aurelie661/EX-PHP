<?php

$age = (int)readline('Veuillez indiquez votre âge :');
$sexe = (string)readline('Vous êtes : h/f ');
//GERE LES IMPOSABLE PAR AGE OU SEXE
if (strcmp($sexe, 'f') && ($age >= 18 && $age <= 35)) {
  echo ('Vous êtes imposable!');
} elseif (strcmp($sexe, 'f')  && $age >= 20) {
  echo ('Vous êtes imposable!');
} else {
  echo (' Vous n\'êtes pas imposable!');
}
