<?php


if(isset($_REQUEST['formconnexion'])){
    $newId = generateNextId();
    $nom=    htmlspecialchars($_REQUEST['nom']);
    $prenom= htmlspecialchars($_REQUEST['prenom']);
    $mail=   htmlspecialchars($_REQUEST['mail']);
    $numTel= htmlspecialchars($_REQUEST['telephone']);
    $myFile=fopen("personne.txt", "a+") or die (" impossible d'ouvrir dans le fichier");
    $nouvelleLigne="\n".$newId.",".$nom.",".$prenom.",".$mail.",".$numTel;
    $fileWrite=fwrite($myFile,$nouvelleLigne);
    fclose($myFile);

}
function generateNextId()
{
    $file = fopen("personne.txt", "r");
    while (!feof($file)) {
        $ligne = fgets($file);
        $infos = explode(",", $ligne);
        if (feof($file)) {
            return $infos[0] + 1;
        }
    }
}

if (isset($_REQUEST["formmodification"])) {
    $id=     htmlspecialchars($_REQUEST['id']);
    $nom=    htmlspecialchars($_REQUEST['nom']);
    $prenom= htmlspecialchars($_REQUEST['prenom']);
    $mail=   htmlspecialchars($_REQUEST['mail']);
    $numTel= htmlspecialchars($_REQUEST['telephone']);
    $myFile = "personne.txt";
    $lignes = file($myFile,FILE_IGNORE_NEW_LINES);
    $nouvelleLigne = $id.",".$nom.",".$prenom.",".$mail.",".$numTel;
    $lignes[$id-1] = $nouvelleLigne;
    file_put_contents($myFile,implode("\n",$lignes));
    
}
header("location: tableau.php");
?>
