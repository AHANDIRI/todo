<?php
class Tache {
    private $bdd;

    public function __construct($maConnexion) {
        $this->bdd = $maConnexion;
    }

    public function lister() {
        return $this->bdd->query('SELECT * FROM taches')->fetchAll();
    }

    public function recupererParId($id) {
        $req = $this->bdd->prepare('SELECT * FROM taches WHERE id = ?');
        $req->execute([$id]);
        return $req->fetch();
    }

    public function ajouter($texte) {
        $req = $this->bdd->prepare('INSERT INTO taches (description) VALUES (?)');
        $req->execute([$texte]);
    }

    public function modifier($id, $texte) {
        $req = $this->bdd->prepare('UPDATE taches SET description = ? WHERE id = ?');
        $req->execute([$texte, $id]);
    }

    public function supprimer($id) {
        $req = $this->bdd->prepare('DELETE FROM taches WHERE id = ?');
        $req->execute([$id]);
    }
}