<DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exam1.css">
    <title>Document</title>
</head>
<body>
<h1><br><br></h1>

<fieldset><legend>Nombre de canditats</legend>
    <form action="examen1.php" method=post>
    <p>Elections présidentielles 2024 <br>Veuillez renseigner le nbre de candidats</p>
    
    <label for="nb_candidats">Nombre de candidats :</label>
    <input type="number" name="nb_candidats" id="nb_candidats" required><br>
    <hr>
    
    <a href="myIA.php"><input type="submit" value="Confirmer" id="submit"> </a>              
    <input type="reset" value=" Annuler"  id="reset"></form>
</fieldset>

</body>
</html>