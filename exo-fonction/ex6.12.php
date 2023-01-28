<?php

$tailleTab = readline("Entrez la taille du tableau : ");
for ($i = 0; $i < $tailleTab; $i++) {
   $tab1[$i] = readline("Entrez votre valeur n°".($i+1)." :");
   echo $tab1[$i]. " " ; 
}
//AUGMENTE CHAQUE VALEUR DU TABLEAU DE 1
for($i=0;$i<$tailleTab;$i++){
   $tab2[$i]=$tab1[$i]+1;

}
foreach($tab2 as $key=>$value){
   echo $value. " " ;
}
