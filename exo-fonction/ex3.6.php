<?php
$age = (int)readline("veuillez indiquer l'age de l'enfant :");
//TRIE SELON  UN AGE DONNER
if ($age >= 6 && $age <= 7) {
    echo ($age . ' ans : Catégorie POUSSIN');
} elseif ($age >= 8 && $age <= 9) {
    echo ($age . ' ans : Categorie Pupille');
} elseif ($age >= 10 && $age <= 11) {
    echo ($age . ' ans : Categorie Minime');
} else {
    echo ($age . ' ans : Categorie Cadet');
}
