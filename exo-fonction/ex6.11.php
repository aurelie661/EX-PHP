<?php
$tab1 = array(4, 8, 7, 12);
$tab2 = array(3, 6);
$schtroumpf = 0;
//CALCUL DU SCHTROUMPF
for ($i = 0; $i < count($tab2); $i++) {
    for ($j = 0; $j < count($tab1); $j++) {
        $schtroumpf = $schtroumpf + $tab1[$j] * $tab2[$i];
    }
}
echo "Le Schtroumpf est de : " . $schtroumpf;
