<?php

$candidat1 = (float)readline('Score du candidat n°1 : ');
$candidat2 = (float)readline('Score du candidat n°2 : ');
$candidat3 = (float)readline('Score du candidat n°3 : ');
$candidat4 = (float)readline('Score du candidat n°4 : ');
//GERE LES ELECTION DE 4 CANDIDATS
if ($candidat1 < 50) {
  if ($candidat1 < 12.5) {
    echo ('Vous êtes battu !');
  } elseif ($candidat1 > $candidat2 && $candidat1 > $candidat3 && $candidat1 > $candidat4) {
    echo ('Vous êtes en ballotage favorable pour le deuxième tour.');
  } else {
    echo ('Vous êtes en ballotage défavorable pour le deuxième tour.');
  }
} else {
  echo ('Félicitation vous êtes élue dès le premier tour.');
}
