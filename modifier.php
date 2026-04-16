<?php
require 'Connexion.php';
require 'Tache.php';

$outilTache = new Tache($bdd);

if (isset($_POST['description'])) {
    $outilTache->modifier($_POST['id'], $_POST['description']);
    
    header('Location: index.php');
    exit;
}


$id = $_GET['id'];

$tache = $outilTache->recupererParId($id);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Modifier la tâche</h1>

    <form method="POST" action="modifier.php">
        <input type="hidden" name="id" value="<?php echo $tache['id']; ?>">
        
        <input type="text" name="description" value="<?php echo $tache['description']; ?>" required>
        
        <button type="submit">Mettre à jour</button>
    </form>

    <br>
    <a href="index.php">Annuler</a>
</body>
</html>