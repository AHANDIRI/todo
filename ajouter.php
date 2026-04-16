<?php
require 'Connexion.php';
require 'Tache.php';

if (isset($_POST['description'])) {
    $outilTache = new Tache($bdd);
    
    $outilTache->ajouter($_POST['description']);
    
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ajouter une tâche</h1>

    <form method="POST" action="ajouter.php">
        <input type="text" name="description" placeholder="Que devez-vous faire ?" required>
        <button type="submit">Ajouter</button>
    </form>

    <br>
    <a href="index.php">Annuler et retourner à l'accueil</a>
</body>
</html>