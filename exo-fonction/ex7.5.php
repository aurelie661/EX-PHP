<?php
$tab = array("bonjour", "tout", "le", "monde");
$mot = readline("Entrer le mot recherché : ");
$existe = false;

for ($i = 0; $i < count($tab) && $existe != true; $i++) {
    if ($mot == $tab[$i]) {
        $existe = true;
    } else {
        $existe = false;
    }
}

if ($existe == true) {
    echo "Trouvé";
} else {
    echo "Pas trouvé";
}
