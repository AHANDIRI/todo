<?php
require 'connexion.php';

$requete = $bdd->query('SELECT * FROM taches');
$taches = $requete->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head><title>Ma To-Do List</title></head>
<body>
    <h1>Ma To-Do List</h1>
    
    <a href="ajouter.php">Ajouter une nouvelle tâche</a>

    <hr><?php
require 'Connexion.php';
require 'Tache.php';

$outilTache = new Tache($bdd);
$taches = $outilTache->lister();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>To-Do List Objet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Ma To-Do List (Objet)</h1>
    <a href="ajouter.php">Ajouter une tâche</a>
    <hr>
    <ul>
        <?php foreach($taches as $t): ?>
            <li>
                <?php echo $t['description']; ?> 
                <a href="modifier.php?id=<?php echo $t['id']; ?>">Modifier</a>
                <a href="supprimer.php?id=<?php echo $t['id']; ?>">Supprimer</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

    <ul>
        <?php foreach($taches as $tache): ?>
            <li>
                <?php echo $tache['description']; ?> 
                
                <a href="modifier.php?id=<?php echo $tache['id']; ?>"> [Modifier] </a>
                <a href="supprimer.php?id=<?php echo $tache['id']; ?>"> [Supprimer] </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>