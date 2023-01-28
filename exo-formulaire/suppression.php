<?php

if (isset($_REQUEST['id'])) {
    
    $myFile = "personne.txt";
    $lignes = file($myFile,FILE_IGNORE_NEW_LINES);
    unset($lignes[$_REQUEST['id']-1]);
    file_put_contents($myFile,implode("\n",$lignes));
    $id=     htmlspecialchars($_REQUEST['id']);
    $nom=    htmlspecialchars($_REQUEST['nom']);
    $prenom= htmlspecialchars($_REQUEST['prenom']);
    $mail=   htmlspecialchars($_REQUEST['mail']);
    $numTel= htmlspecialchars($_REQUEST['telephone']);
    $myFile = "personne.txt";
    $ligne = file($myFile,FILE_IGNORE_NEW_LINES);
    $nouvelleLigne = $id.",".$nom.",".$prenom.",".$mail.",".$numTel;
    $ligne[$id+1] = $nouvelleLigne;
}
header('location: tableau.php');
?>
 
