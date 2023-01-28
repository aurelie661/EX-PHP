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
</head>

<body>
    <div class="container">
        <h1>Mon tableau</h1>
    </div>
    <div>
        <table class="table table-hover border rounded table-striped table-responsive-md">
            <thead class="thead-dark">
                <tr>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>E-MAIL</th>
                    <th>TELEPHONE</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $file = fopen("client2.txt", "r") or die("Impossible d'ouvrir le fichier");

                while (!feof($file)) {

                    $ligne = fgets($file);
                    $tabLigne = explode(",", $ligne);

                    for ($i = 0; $i < 7; $i++) {
                        if ($i == 0) {
                            $nom = $tabLigne[$i];
                        } else if ($i == 1) {
                            $prenom = $tabLigne[$i];
                        } else if ($i == 2) {
                            $mail = $tabLigne[$i];
                        } else if ($i == 3) {
                            $numTel = $tabLigne[$i];
                        }
                    }
                    echo "   <tr>
                            <td> $nom </td>
                            <td> $prenom </td>
                            <td> $mail </td>
                            <td> $numTel </td>
                         </tr>";
                }
                fclose($file) ?>
                <div>
                    <a href="formulaire.html">
                    <button type="submit" class="btn btn-secondary">Ajouter</button>
                    <?php ?>
                </div>
            </tbody>
        </table>
    </div>
</body>

</html>