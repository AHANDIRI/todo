<?php
require 'Connexion.php';
require 'Tache.php';

$id = $_GET['id'];
$outilTache = new Tache($bdd);
$outilTache->supprimer($id);    

header('Location: index.php');
exit;