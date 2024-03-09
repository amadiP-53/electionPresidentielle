<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exam1.css">
    <title>Document</title>
</head>
<body>
    <h1><br></h1>

<fieldset><legend>Saisie informations</legend>
<form method="post" action="traitement_examen.php">
<label for="nb_candidats"> Resaisir le même nombre de candidats :</label>

<input type="number" name="nb_candidats" id="nb_candidats" min='$ncdt' max='$ncdt' required><br>     
<br>
    <?php
    
    $ncdt=$_POST['nb_candidats'];
    $nc=$ncdt;
    
    for ($i = 1; $i <= $ncdt; $i++) {
        echo 'Nom du candidat ' . $i . ' : <input type="text" name="nom_candidat_' . $i . '" required><br>';
        echo 'Nombre de voies ' . $i . ' : <input type="number" name="score_candidat_' . $i . '" min="0" max="100" required><br><br>';
    }
    ?>

<input type="submit" value="Confirmer" id="submit">              
    <input type="reset" value=" Annuler"  id="reset">
    <a href="examen.php"><input type="button" value="Retour"></a>
</form>
</fieldset>

</body>
</html>