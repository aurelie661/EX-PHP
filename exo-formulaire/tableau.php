<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>exercice_php</title>
 

    <body>
        <div class="container">
            <h1>Mon tableau</h1>
        </div>
        <div>
            <table class="table table-hover border rounded table-striped table-responsive-md">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>E-MAIL</th>
                        <th>TELEPHONE</th>
                        <th>MODIFIER</th>
                        <th>SUPPRIMER</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $file = fopen("personne.txt", "r") or die("Impossible d'ouvrir le fichier");
                    while (!feof($file)) {

                        $ligne = fgets($file);
                        $tabLigne = explode(",", $ligne);
                        echo "<tr>";
                            echo "<td> $tabLigne[0]  </td>";
                            echo "<td> $tabLigne[1]  </td>";
                            echo "<td> $tabLigne[2]  </td>";
                            echo "<td> $tabLigne[3]  </td>";
                            echo "<td> $tabLigne[4]  </td>";
                            echo "<td><a href='modification.php?id=$tabLigne[0]'><button name='buttonMod'class='btn btn-warning'>Modifier</button></a></td>";
                            echo "<td><a href='suppression.php?id=$tabLigne[0]'><button name='buttonSup'class='btn btn-warning'>Supprimer</button></a></td>";
                        echo "</tr>";
                            
                        }
                        fclose($file) ?>
                        <div class="btn-group">
                            <a href="formulaire.html">
                            <button type="submit" class="btn btn-secondary">Ajouter</button>
                        </div>    
                </tbody>
            </table>
        </div>
    </body>

</html>