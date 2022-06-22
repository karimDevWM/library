<?php
    require_once 'Bdd.php';

    class Auteur extends Bdd
    {
        public function getAllAuthors()
        {
            // chercher tous les auteurs
            $bdd = $this->dbConnect();
            $req = $bdd->query("SELECT * FROM auteur");
            $authors = $req->fetchAll(PDO::FETCH_ASSOC);

            return $authors;
        }

        public function getAuthor($idAuthor)
        {
            // chercher un seul livre par l'id
            $bdd = $this->dbConnect();
             $req = $bdd->query("SELECT * FROM `auteur` 
                                INNER JOIN livre ON livre.fk_auteur = auteur.id
                                WHERE fk_auteur = ".$idAuthor);
             $author = $req->fetch(PDO::FETCH_ASSOC);

             return $author;
        }
    }
?>