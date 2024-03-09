<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exam1.css">
    <title>Document</title>
</head>
<body>
    <fieldset><legend>Résultat des élections</legend>
    <?php
$scores = [];
$ncdt=$_POST['nb_candidats'];


for ($i = 1; $i <= $ncdt; $i++) {
    $nom = $_POST['nom_candidat_' . $i];
    $score = $_POST['score_candidat_' . $i];
    $scores[$nom] = $score;
}

arsort($scores); // Trie les scores en ordre décroissant

$totalVotes = array_sum($scores);
$gagnant = '';
$position = 1;


foreach ($scores as $nom => $score) {
    $pourcentage = ($score / $totalVotes) * 100;

    echo "<br>Candidat $position : $nom <hr>- Score : $score <hr>- Position : $position <hr>- Pourcentage : $pourcentage% <hr>";

    if ($pourcentage > 50 &&$pourcentage>25 ) {
        $gagnant = $nom;
        break;
    }

    $position++;
}

if ($gagnant != '') {
    echo "Le candidat $gagnant remporte les élections !";
} elseif ($position <= $ncdt) {
    echo "Les candidats $position vont au second tour.";
} else {
    echo "Tous les candidats sont battus aux élections.";
}
?>
<hr>
<a href="examen.php"><input type="button" value="Accueil"></a>
<fieldset>

</body>
</html>
