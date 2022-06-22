<?php
    require_once 'Bdd.php';

    class Auteur extends Bdd
    {
        public function getAllAuthors()
        {
            // chercher tous les auteurs
            $bdd = $this->dbConnect();
            $req = $bdd->query("SELECT * FROM author");
            $authors = $req->fetchAll(PDO::FETCH_ASSOC);

            return $authors;
        }

        public function getAuthor($idAuthor)
        {
            // chercher un seul livre par l'id
            $bdd = $this->dbConnect();
             $req = $bdd->query("SELECT * FROM `auteur` 
                                INNER JOIN auteur ON livre.fk_auteur = auteur.id
                                WHERE livre.id = ".$idAuthor);
             $author = $req->fetch(PDO::FETCH_ASSOC);

             return $author;
        }
    }
?>