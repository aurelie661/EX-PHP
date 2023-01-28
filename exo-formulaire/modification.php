<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modification</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto&display=swap" rel="stylesheet">
</head>

<body>
<?php
$personneSelectionner=[];
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $file=fopen("personne.txt","r");
    while(!feof($file)){
        $ligne=fgets($file);
        $tabLigne=explode(",",$ligne);
        if($id == $tabLigne[0]){
            $personneSelectionner= $tabLigne;
            break;
        }
    }
      
}
?>
    <form class="formulaire" action="traitement.php?id=<?php echo $_GET["id"]; ?>" method="POST">
        <legend>Modification</legend>
        <div class="form-group">
            <label for="id"  class="form-label">Id</label> :
            <input type="text" readonly class="form-control" name="id" value="<?php echo $personneSelectionner[0]; ?>"/>
        </div>
        <div class="form-group">
            <label for="nom" class="form-label">Nom</label> :
            <input type="text" class="form-control" name="nom" value="<?php echo $personneSelectionner[1]; ?> "/>
        </div>
        <div class="form-group">
            <label for="prenom" class="form-label">Prenom</label> :
            <input type="text" class="form-control" name="prenom" value="<?php echo $personneSelectionner[2]; ?>"/>
        </div>
        <div class="form-group">
            <label for="mail" class="form-label">E-mail</label> :
            <input type="email" class="form-control" name="mail" value="<?php echo $personneSelectionner[3]; ?>"/>
        </div>
        <div class="form-group">
            <label for="telephone" class="form-label">N°Tel</label> :
            <input type="tel" class="form-control" name="telephone" value="<?php echo $personneSelectionner[4]; ?>"/>
        </div>
        <div>
            <button type="submit" name="formmodification" class="btn btn-success btn-block">Valider</button>
        </div>
        <div style="margin-top: 5px;">
            <button type="reset" class="btn btn-link btn-block">Réinitialiser</button>
        </div>
    </form>
</body>

</html>